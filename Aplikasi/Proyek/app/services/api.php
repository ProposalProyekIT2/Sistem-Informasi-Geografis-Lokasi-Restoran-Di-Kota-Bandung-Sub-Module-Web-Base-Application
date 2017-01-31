<?php
require_once("Rest.inc.php");

class API extends REST {

	public $data = "";
	const demo_version = false;

	const DB_SERVER = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB = "kuliner_bdg";
	const GOOGLE_API_KEY = "AIzaSyCytb-6WapNc0AIUG5Q5eFiST-gXnIitwc";

	private $db = NULL;
	private $mysqli = NULL;
	public function __construct(){
		parent::__construct();				// Init parent contructor
		$this->dbConnect();					// Initiate Database connection
	}

	/* Connect to Database */
	private function dbConnect(){
		$this->mysqli = new mysqli(self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
	}

	/* Dynmically call the method based on the query string */
	public function processApi(){
		$func = strtolower(trim(str_replace("/","",$_REQUEST['x'])));
		if((int)method_exists($this,$func) > 0) {
			$this->$func();
		} else {
			$this->response('processApi - method not exist',404); // If the method not exist with in this class "Page not found".
		}
	}
	
	/* Api Checker */
	private function checkResponse(){
		if (mysqli_ping($this->mysqli)){
			echo "Database Connection : Success";
		}else {
			echo "Database Connection : Error";
		}
	}
	
	// security for filter manipulate data		
	private function checkAuthorization(){
		$resp = array("status" => 'Failed', "msg" => 'Unauthorized' );
		if(isset($this->_header['Token']) && !empty($this->_header['Token'])){
			$token = $this->_header['Token'];
			$query = "SELECT id FROM users WHERE password='$token' ";
			$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
			if($r->num_rows < 1) {
				$this->response($this->json($resp), 200);
			}
		} else {
			$this->response($this->json($resp), 200);
		}
	}		

	/*
	 * API USED BY ANDROID CLIENT -------------------------------------------------------------------------------------------------------
	 */

	//use start android LAZY_LOAD = false
	private function getApiClientData(){
		if($this->get_request_method() != "GET") $this->response('',406);

		$query_p   = "SELECT * FROM place p ORDER BY p.last_update DESC;";
		$query_pc  = "SELECT * FROM place_category;";
		$query_i   = "SELECT DISTINCT * FROM images;";
		$p   = $this->mysqli->query($query_p) or die($this->mysqli->error.__LINE__);
		$pc  = $this->mysqli->query($query_pc) or die($this->mysqli->error.__LINE__);
		$i   = $this->mysqli->query($query_i) or die($this->mysqli->error.__LINE__);
		$result["places"] = array();
		$result["place_category"] = array();
		$result["images"] = array();
		while($row = $p->fetch_assoc()){
			$result["places"][] = $row;
		}
		while($row = $pc->fetch_assoc()){
			$result["place_category"][] = $row;
		}
		while($row = $i->fetch_assoc()){
			$result["images"][] = $row;
		}
		$this->response($this->json($result), 200); // send user details
	}
	
	// use start version 3.0 for android LAZY_LOAD = true
	// deprecated on version 5.0
	private function getApiClientDataDraft(){
		if($this->get_request_method() != "GET") $this->response('',406);
		$query_p   = "SELECT p.place_id, p.name, p.image, p.lat, p.lng, p.last_update FROM place p ORDER BY p.last_update DESC";
		$query_pc  = "SELECT * FROM place_category;";
		$query_i   = "SELECT DISTINCT * FROM images;";
		$p   = $this->mysqli->query($query_p) or die($this->mysqli->error.__LINE__);
		$pc  = $this->mysqli->query($query_pc) or die($this->mysqli->error.__LINE__);
		$i   = $this->mysqli->query($query_i) or die($this->mysqli->error.__LINE__);
		$result["places"] = array();
		$result["place_category"] = array();
		$result["images"] = array();
		while($row = $p->fetch_assoc()){
			$result["places"][] = $row;
		}
		while($row = $pc->fetch_assoc()){
			$result["place_category"][] = $row;
		}
		while($row = $i->fetch_assoc()){
			$result["images"][] = $row;
		}
		$this->response($this->json($result), 200); // send user details
	}
	
	// use start version 5.0
	private function listPlaces(){
		if($this->get_request_method() != "GET") $this->response('',406);
		$limit = isset($this->_request['count']) ? ((int)$this->_request['count']) : 10;
		$page = isset($this->_request['page']) ? ((int)$this->_request['page']) : 1;
		$draft = isset($this->_request['draft']) ? ((int)$this->_request['draft']) : 0;
		
		$offset = ($page * $limit) - $limit;
		$count_total = $this->get_count_result("SELECT COUNT(DISTINCT p.place_id) FROM place p");
		$query = "SELECT DISTINCT p.place_id, p.name, p.image, p.address, p.phone, p.website, p.description, p.lat, p.lng, p.last_update
				  FROM place p ORDER BY p.last_update DESC LIMIT $limit OFFSET $offset";
		if($draft == 1){
			$query = "SELECT DISTINCT p.place_id, p.name, p.image, p.lat, p.lng, p.last_update 
					  FROM place p ORDER BY p.last_update DESC LIMIT $limit OFFSET $offset";
		}
		
		$places = $this->get_list_result($query);
		$object_res = array();
		foreach ($places as $r){
			$r["categories"] = $this->getCategoriesArrayByPlaceId($r["place_id"]);
			if($draft != 1) $r["images"] = $this->getImagesArrayByPlaceId($r["place_id"]);
			array_push($object_res, $r);
		}
		$count = count($places);
		$respon = array(
			'status' => 'success', 'count' => $count, 'count_total' => $count_total, 'pages' => $page, 'places' => $object_res
		);
		$this->response($this->json($respon), 200);
	}
	
	// use start version 5.0
	private function getPlaceDetails(){
		if($this->get_request_method() != "GET") $this->response('',406);
		if(!isset($this->_request['place_id'])) $this->responseInvalidParam();
		$place_id = (int)$this->_request['place_id'];
		
		$query = "SELECT * FROM place p WHERE p.place_id=$place_id";
		$place = $this->get_result($query);
		$place["categories"] = $this->getCategoriesArrayByPlaceId($place["place_id"]);
		$place["images"] = $this->getImagesArrayByPlaceId($place["place_id"]);
		$respon = array( 'place' => $place );
		
		$this->response($this->json($respon), 200);
	}

	/*
	 * TABLE USERS TRANSACTION --------------------------------------------------------------------------------------------------------------
	 */
	private function login(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		$customer = json_decode(file_get_contents("php://input"),true);
		$username = $customer["username"];
		$password = $customer["password"];
		if(!empty($username) and !empty($password)){ // empty checker
			$query="SELECT id, name, username, email, password FROM users WHERE password = '".md5($password)."' AND username = '$username' LIMIT 1";
			$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
			if($r->num_rows > 0) {
				$result = $r->fetch_assoc();
				$this->response($this->json($result), 200);
			}
			$this->response('', 204);	// If no records "No Content" status
		}
		$error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
		$this->response($this->json($error), 400);
	}

	private function users(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$id = (int)$this->_request['id'];
		$query="SELECT id, name, username, email FROM users WHERE id=$id";
		$this->get_one($query);
	}

	private function updateUsers(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		if(self::demo_version){
			$m = array('status' => "failed", "msg" => "Ops, this is demo version", "data" => null);
			$this->response($this->json($m),200);
		}

		$this->checkAuthorization();
		$users = json_decode(file_get_contents("php://input"),true);
		if(!isset($users['id'])) $this->responseInvalidParam();
		
		$id = (int)$users['id'];
		$password = $users['users']['password'];
		if($password == '*****'){
			$column_names = array('id', 'name', 'username', 'email');
		}else{
			$users['users']['password'] = md5($password);
			$column_names = array('id', 'name', 'username', 'email', 'password');
		}
		$table_name = 'users';
		$pk = 'id';
		$this->post_update($id, $users, $pk, $column_names, $table_name);
	}

	private function insertUser(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		if(self::demo_version){
			$m = array('status' => "failed", "msg" => "Ops, this is demo version", "data" => null);
			$this->response($this->json($m),200);
		}
		$this->checkAuthorization();
		$users = json_decode(file_get_contents("php://input"),true);
		
		$users['password'] = md5($users['password']);
		$column_names = array('name', 'username', 'email', 'password');
		$table_name = 'users';
		$pk = 'id';
		$this->post_one($users, $pk, $column_names, $table_name);
	}

	/*
	 * TABLE PLACES TRANSACTION ---------------------------------------------------------------------------------------------------------
	 */
	private function getPlaces(){
		if($this->get_request_method() != "GET") $this->response('',406);
		$param = "";
		if(isset($this->_request['cat_id'])) $param = $this->_request['cat_id'];
		if($param != ""){
			$cat_id = (int)$param;
			$query = "SELECT DISTINCT p.* FROM place p, place_category pc WHERE pc.place_id=p.place_id AND pc.cat_id=$cat_id ORDER BY p.last_update DESC;";
		}else{
			$query = "SELECT * FROM place p ORDER BY p.last_update DESC";
		}
		$this->get_list($query);
	}

	private function getPlace(){
		if($this->get_request_method() != "GET") $this->response('',406);
		$place_id = (int)$this->_request['place_id'];
		$query="SELECT * FROM place p WHERE p.place_id=$place_id";
		$this->get_one($query);
	}

	private function insertPlace(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		$this->checkAuthorization();
		$place = json_decode(file_get_contents("php://input"),true);
		if(!isset($place) ) $this->responseInvalidParam();
		
		$column_names = array('name', 'image', 'address', 'phone','website','description','lat','lng','last_update');
		$table_name = 'place';
		$pk = 'place_id';
		$this->post_one($place, $pk, $column_names, $table_name);
	}

	private function updatePlace(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		$this->checkAuthorization();
		$place = json_decode(file_get_contents("php://input"),true);
		if(!isset($place['place_id']))$this->responseInvalidParam();
		
		$place_id = (int)$place['place_id'];
		$column_names = array('name', 'image', 'address', 'phone','website','description','lat','lng','last_update');
		$table_name = 'place';
		$pk = 'place_id';
		$this->post_update($place_id, $place, $pk, $column_names, $table_name);
	}

	private function deletePlace(){
		if($this->get_request_method() != "DELETE") $this->response('',406);
		
		$this->checkAuthorization();
		if(!isset($this->_request['place_id'])) $this->responseInvalidParam();
		
		$place_id = (int)$this->_request['place_id'];
		$table_name = 'place';
		$pk = 'place_id';
		$this->delete_one($place_id, $pk, $table_name);
	}
	
	private function getPlaceCount(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$param = "";
		if(isset($this->_request['cat_id'])){
			$param = $this->_request['cat_id'];
		}
		if($param != ""){
			$cat_id = (int)$param;
			$query = "SELECT COUNT(DISTINCT p.place_id) FROM place p, category c WHERE p.place_id IN
					  (SELECT pc.place_id FROM place_category pc WHERE pc.cat_id=$cat_id)";
		}else{
			$query="SELECT COUNT(p.place_id) FROM place p";
		}
		$this->get_count($query);
	}
	
	private function getPlacesByPage(){
		if($this->get_request_method() != "GET") $this->response('',406);

		$limit = (int)$this->_request['limit'];
		$offset = ((int)$this->_request['page']) - 1;

		$param = "";
		if(isset($this->_request['cat_id'])){
			$param = $this->_request['cat_id'];
		}
		if($param != ""){
			$cat_id = (int)$param;
			$query = "SELECT DISTINCT p.* FROM place p, category c WHERE p.place_id IN 
				(SELECT pc.place_id FROM place_category pc WHERE pc.cat_id=$cat_id)  
				ORDER BY p.last_update DESC LIMIT $limit OFFSET $offset";
		}else{
			$query="SELECT DISTINCT * FROM place p ORDER BY p.last_update DESC LIMIT $limit OFFSET $offset";
		}
		
		$this->get_list($query);
	}

	/*
	 * TABLE CATEGORY TRANSACTION ----------------------------------------------------------------------------------------------------------
	 */
	private function getCategories(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$query="SELECT * FROM category c ORDER BY c.cat_id ASC";
		$this->get_list($query);
	}

	private function getCategory(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$cat_id = (int)$this->_request['cat_id'];
		$query="SELECT distinct * FROM category c WHERE c.cat_id=$cat_id";
		$this->get_one($query);
	}

	private function getCategoriesByPlaceId(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$place_id = (int)$this->_request['place_id'];
		$query = "SELECT DISTINCT c.* FROM category c WHERE c.cat_id IN (SELECT pc.cat_id FROM place_category pc WHERE pc.place_id=$place_id);";
		$this->get_list($query);
	}

	/*
	 * TABLE PLACE_CATEGORY TRANSACTION ----------------------------------------------------------------------------------------------------------
	 */
	private function getPlaceCategories(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$query="SELECT * FROM place_category;";
		$this->get_list($query);
	}

	private function placeCategoriesByPlaceId(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$place_id = (int)$this->_request['place_id'];
		$query="SELECT * FROM place_category WHERE place_id=".$place_id;
		$this->get_list($query);
	}

	private function insertPlaceCategories(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		$this->checkAuthorization();
		$place_category = json_decode(file_get_contents("php://input"),true);
		if(!isset($place_category))$this->responseInvalidParam();
		
		$column_names = array('place_id', 'cat_id');
		$table_name = 'place_category';
		try {
			$query="DELETE FROM ".$table_name." WHERE place_id = ".$place_category[0]['place_id'];
			$this->mysqli->query($query);
		} catch(Exception $e) {}
		$this->post_array($place_category, $column_names, $table_name);
	}
	
	private function getCategoriesArrayByPlaceId($place_id){
		$query = "SELECT DISTINCT pc.cat_id, c.name FROM place_category pc, category c WHERE c.cat_id = pc.cat_id AND pc.place_id=".$place_id;
		return $this->get_list_result($query);
	}

	/*
	 * TABLE IMAGES TRANSACTION ----------------------------------------------------------------------------------------------------------
	 */
	private function getImages(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$query="SELECT DISTINCT * FROM images;";
		$this->get_list($query);
	}

	private function imagesByPlaceId(){
		if($this->get_request_method() != "GET") $this->response('',406);
		
		$place_id = (int)$this->_request['place_id'];
		$query="SELECT DISTINCT * FROM images i WHERE i.place_id=$place_id";
		$this->get_list($query);
	}

	private function insertImages(){
		if($this->get_request_method() != "POST") $this->response('',406);
		
		$this->checkAuthorization();
		$images = json_decode(file_get_contents("php://input"),true);
		if(!isset($images))$this->responseInvalidParam();
		
		$column_names = array('place_id', 'name');
		$table_name = 'images';
		try {
			$query="DELETE FROM ".$table_name." WHERE place_id = ".$images[0]['place_id'];
			$this->mysqli->query($query);
		} catch(Exception $e) {}
		$this->post_array($images, $column_names, $table_name);
	}

	private function deleteImage(){
		if($this->get_request_method() != "DELETE") $this->response('',406);
		
		$this->checkAuthorization();
		$_name = $this->_request['name'];
		$table_name = 'images';
		$pk = 'name';
		$target_file = "../../uploads/place/" . $_name;
		if(file_exists($target_file)){
			unlink($target_file);
		}
		$this->delete_one_str($_name, $pk, $table_name);
	}
	
	private function getImagesArrayByPlaceId($place_id){
		$query = "SELECT DISTINCT i.place_id, i.name FROM images i WHERE i.place_id=".$place_id;
		return $this->get_list_result($query);
	}	

	/*
	/*
	 * ========================================================================================================================
	 * ===================================== API utilities # DO NOT EDIT ======================================================
	 */

	private function get_list($query){
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0){
		$result = array();
		while($row = $r->fetch_assoc()){
			$result[] = $row;
		}
		$this->response($this->json($result), 200); // send user details
	}
		$this->response('',204);	// If no records "No Content" status
	}
	
	private function get_list_result($query){
		$result = array();
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0){
			while($row = $r->fetch_assoc()){
				$result[] = $row;
			}
		}
		return $result;
	}
	
	private function get_result($query){
		$result = array();
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0) $result = $r->fetch_assoc();
		return $result;
	}
		
	private function get_one($query){
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0) {
			$result = $r->fetch_assoc();
			$this->response($this->json($result), 200); // send user details
		}
		$this->response('',204);	// If no records "No Content" status
	}
	
	private function get_count($query){
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0) {
			$result = $r->fetch_row();
			$this->response($result[0], 200); 
		}
		$this->response('',204);	// If no records "No Content" status
	}
	
	private function get_count_result($query){
		$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		if($r->num_rows > 0) {
			$result = $r->fetch_row();
			return $result[0];
		}
		return 0;
	}
			
	private function post_one($obj, $pk, $column_names, $table_name){
		$keys 		= array_keys($obj);
		$columns 	= '';
		$values 	= '';
		foreach($column_names as $desired_key){
			if(!in_array($desired_key, $keys)) {
				$$desired_key = '';
			}else{
				$$desired_key = $obj[$desired_key];
			}
			$columns 	= $columns.$desired_key.',';
			$values 	= $values."'".$this->real_escape($$desired_key)."',";
		}
		
		$query = "INSERT INTO ".$table_name."(".trim($columns,',').") VALUES(".trim($values,',').")";
		if(!empty($obj)){
			if ($this->mysqli->query($query)) {
				// retrive row after insert
				$last_id = $this->mysqli->insert_id;
				$get_query = "SELECT * FROM ".$table_name." WHERE ".$pk."=".$last_id;
				$r = $this->mysqli->query($get_query) or die($this->mysqli->error.__LINE__);
				if($r->num_rows > 0) {
					$obj = $r->fetch_assoc();
				}
				$status = "success";
				$msg 	= $table_name." created successfully";
			} else {
				$status = "failed";
				$msg 	= $this->mysqli->error.__LINE__;
			}
			$resp = array('status' => $status, "msg" => $msg, "data" => $obj);
			$this->response($this->json($resp),200);
		}else{
			$this->response('',204);	//"No Content" status
		}
	}

	private function post_array($obj_array, $column_names, $table_name){
		$query = "";
		for ($i = 0; $i < count($obj_array); $i++) {
			$obj = $obj_array[$i];
			$keys 		= array_keys($obj);
			$columns 	= '';
			$values 	= '';
			foreach($column_names as $desired_key){
				if(!in_array($desired_key, $keys)) {
					$$desired_key = '';
				}else{
					$$desired_key = $obj[$desired_key];
				}
				$columns 	= $columns.$desired_key.',';
				$values 	= $values."'".$this->real_escape($$desired_key)."',";
			}
			$query .= "INSERT INTO ".$table_name."(".trim($columns,',').") VALUES(".trim($values,',').");";
		}
		if(!empty($obj_array)){
			if ($this->mysqli->multi_query($query)) {
				$status = "success";
				$msg 	= $table_name." created successfully";
			} else {
				$status = "failed";
				$msg 	= $this->mysqli->error.__LINE__;
			}
			$resp = array('status' => $status, "msg" => $msg, "data" => $obj_array);
			$this->response($this->json($resp),200);
		}else{
			$this->response('',204);	//"No Content" status
		}
	}

	private function post_update($id, $obj, $pk, $column_names, $table_name){
		$keys = array_keys($obj[$table_name]);
		$columns = '';
		$values = '';
		foreach($column_names as $desired_key){ // Check the recipe received. If key does not exist, insert blank into the array.
			if(!in_array($desired_key, $keys)) {
				$$desired_key = '';
			}else{
				$$desired_key = $obj[$table_name][$desired_key];
			}
			$columns = $columns.$desired_key."='".$this->real_escape($$desired_key)."',";
		}
		$query = "UPDATE ".$table_name." SET ".trim($columns,',')." WHERE ".$pk."=$id";
		if(!empty($obj)){
			// $r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
			if ($this->mysqli->query($query)) {
				$status = "success";
				$msg 	= $table_name." update successfully";
			} else {
				$status = "failed";
				$msg 	= $this->mysqli->error.__LINE__;
			}
			$resp = array('status' => $status, "msg" => $msg, "data" => $obj);
			$this->response($this->json($resp),200);
		}else{
			$this->response('',204);	// "No Content" status
		}
	}

	private function delete_one($id, $pk, $table_name){
		$query="DELETE FROM ".$table_name." WHERE ".$pk." = $id";
		if ($this->mysqli->query($query)) {
			$status = "success";
			$msg 	= "One record " .$table_name." successfully deleted";
		} else {
			$status = "failed";
			$msg 	 = $this->mysqli->error.__LINE__;
		}
		$resp = array('status' => $status, "msg" => $msg);
		$this->response($this->json($resp),200);
	}

	private function delete_one_str($pkval, $pk, $table_name){
		$query="DELETE FROM ".$table_name." WHERE ".$pk." = '$pkval'";
		if ($this->mysqli->query($query)) {
			$status = "success";
			$msg 	= "One record " .$table_name." successfully deleted";
		} else {
			$status = "failed";
			$msg 	= $this->mysqli->error.__LINE__;
		}
		$resp = array('status' => $status, "msg" => $msg);
		$this->response($this->json($resp),200);
	}
	
	private function responseInvalidParam(){
		$resp = array("status" => 'Failed', "msg" => 'Invalid Parameter' );
		$this->response($this->json($resp), 200);
	}
	
	/* ==================================== End of API utilities ==========================================
	 * ====================================================================================================
	 */

	/*Encode array into JSON */
	private function json($data){
		if(is_array($data)){
			return json_encode($data, JSON_NUMERIC_CHECK);
		}
	}

	/* String mysqli_real_escape_string */
	private function real_escape($s){
		return mysqli_real_escape_string($this->mysqli, $s);
	}

}

// Initiiate Library

$api = new API;
$api->processApi();
?>

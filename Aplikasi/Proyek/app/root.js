angular.module('App').controller('RootCtrl',
function($rootScope, $scope, $mdSidenav, $mdToast, $mdDialog, $cookies, services) {

	var self = $scope;
	var root = $rootScope;

	self.bgColor  = '#d9d9d9';
	self.black    = '#000000';

	root.base_url   = window.location.origin;
	self.uid_key    = '_session_uid';
	self.uid_name   = '_session_name';
	self.uid_email  = '_session_email';
	self.uid_password  = '_session_password';

	// retrive session data
	self.data = {
		user: {
			name  : $cookies.get(root.base_url+self.uid_name),
			email : $cookies.get(root.base_url+self.uid_email),
			icon  : 'face'
		}
	};

	/* prepare category data */
	root.categories = [];
	services.getCategories().then(function(resp){
		root.categories = resp.data;
		self.sidenav.actions[1].sub_menu = resp.data;
	});


	self.toggleSidenav = function() {
		$mdSidenav('left').toggle();
	};

	self.doLogout = function(ev){
		var confirm = $mdDialog.confirm().title('Logout Confirmation')
		.content('Are you sure want to logout from user : '+root.getSessionName()+' ?')
		.targetEvent(ev)
		.ok('OK').cancel('CANCEL');
		$mdDialog.show(confirm).then(function() {
			// clear session
			root.clearCookies();
			window.location.href = '#login';
			$mdToast.show($mdToast.simple().content('Logout Success').position('bottom right'));
		});
	};

	root.clearCookies = function(){
		// saving session
		$cookies.remove(root.base_url+self.uid_key, null);
		$cookies.remove(root.base_url+self.uid_name, null);
		$cookies.remove(root.base_url+self.uid_email, null);
		$cookies.remove(root.base_url+self.uid_password, null);
	}

	root.saveCookies = function(id, name, email, password){
		// saving session
		$cookies.put(root.base_url+self.uid_key, id);
		$cookies.put(root.base_url+self.uid_name, name);
		$cookies.put(root.base_url+self.uid_email, email);
		$cookies.put(root.base_url+self.uid_password, password);
		console.log("TOKEN A : "+$cookies.get(root.base_url+self.uid_password));
	}

	root.isCookieExist = function(){
		var uid   = $cookies.get(root.base_url+self.uid_key);
		var name  = $cookies.get(root.base_url+self.uid_name);
		var email = $cookies.get(root.base_url+self.uid_email);
		var password = $cookies.get(root.base_url+self.uid_password);
		if(uid == null || name == null || email == null || password == null){
			return false;
		}
		return true;
	}

	root.getSessionUid = function(){
		return $cookies.get(root.base_url+self.uid_key);
	}

	root.getSessionName = function(){
		return $cookies.get(root.base_url+self.uid_name);
	}

	root.getSessionEmail = function(){
		return $cookies.get(root.base_url+self.uid_email);
	}
  
	root.getSessionPassword = "asdsadadsd";

	self.sidenav = {
	actions: [{
		name: 'Home',
		icon: 'Home',
		link: '#home',
		sub : false
	  }, {
		name: 'Jam Buka',
		icon: 'dns',
		link: '#gcm',
		sub : true,
		sub_expand : false,
		sub_menu : []
	  }, {
	  	name: 'Semua Tempat',
		icon: 'place',
		link: '#place',
		sub : false
	  }, {
		name: 'Peta',
		icon: 'map',
		link: 'map.php',
		sub : false
	  }, {
		name: 'Pengaturan',
		icon: 'settings',
		link: '#setting',
		sub : false
	  }, {
		name: 'Tentang',
		icon: 'web_asset',
		link: '#about',
		sub : false
	  }]
	}

	self.directHref = function(href){
		root.sub_obj = '';
		self.toggleSidenav();
		window.location.href = href;
	};

	root.sub_obj = '';
	root.subMenuAction = function(ev, obj) {
		root.sub_obj = obj.cat_id;
		window.location.href = '#place';
		root.pagetitle = 'Place : '+obj.name;
	}

	root.sortArrayOfInt = function(array_of_int){
		array_of_int.sort(function(a, b){return a-b});
	}

	// for editing place
	root.setCurPlace = function(cur_place){
		$cookies.put('cur_place_place_id', cur_place.place_id);
		$cookies.put('cur_place_name', cur_place.name);
		$cookies.put('cur_place_image', cur_place.image);	
		$cookies.put('cur_place_address', cur_place.address);
		$cookies.put('cur_place_phone', cur_place.phone);
		$cookies.put('cur_place_website', cur_place.website);
		$cookies.put('cur_place_description', cur_place.description);
		$cookies.put('cur_place_lat', cur_place.lat.toString());
		$cookies.put('cur_place_lng', cur_place.lng.toString());
		$cookies.put('cur_place_last_update', cur_place.last_update.toString());
	}
	
	root.getCurPlace = function(){
		var cur_obj = { 
			place_id: $cookies.get('cur_place_place_id'),
			name: $cookies.get('cur_place_name'),
			image: $cookies.get('cur_place_image'),
			address: $cookies.get('cur_place_address'),
			phone: $cookies.get('cur_place_phone'),
			website: $cookies.get('cur_place_website'),
			description: $cookies.get('cur_place_description'),
			lat: parseFloat($cookies.get('cur_place_lat')),
			lng: parseFloat($cookies.get('cur_place_lng')),
			last_update: parseFloat($cookies.get('cur_place_last_update'))
		};

		if(cur_obj.place_id == ""){
			return null;
		}
		return cur_obj;
	}
	
	root.clearCurPlace = function(){
		$cookies.put('cur_place_place_id', "");
		$cookies.put('cur_place_name', "");
		$cookies.put('cur_place_image', "");
		$cookies.put('cur_place_address', "");
		$cookies.put('cur_place_phone', "");
		$cookies.put('cur_place_website', "");
		$cookies.put('cur_place_description', "");
		$cookies.put('cur_place_lat', null);
		$cookies.put('cur_place_lng', null);
		$cookies.put('cur_place_last_update', null);
	}

	root.getExtension = function(f){
		return (f.type == "image/jpeg" ? '.jpg' : '.png');
	}
	root.constrainFile = function(f){
		return ((f.type =="image/jpeg" || f.type =="image/png" ) && f.size <= 500000);
	}

});

<?php

namespace backend\controllers;

use Yii;
use backend\models\Tempat;
use backend\models\TempatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * TempatController implements the CRUD actions for Tempat model.
 */
class TempatController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tempat models.
     * @return mixed
     */
    public function actionIndex()
    {
      $query = Tempat::find();

        $searchModel = new TempatSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $marker = $dataProvider->getModels();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'marker' =>$marker,

        ]);
    }

    /**
     * Displays a single Tempat model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionPeta()
    {
      $models = new TempatSearch();
        return $this->render('peta',[
          'models'=> $models,
        ]);
    }
    /**
     * Creates a new Tempat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
   {
       $model = new Tempat();

       if ($model->load(Yii::$app->request->post())) {

         $model->gambar = UploadedFile::getInstance($model, 'gambar');

         if(!$model->gambar==NULL){
           //save file
          // $unik = $model->id;
           $namafile = $model->nama_tempat;
           $extensi = $model->gambar->extension;

           $model->gambar->saveAs('uploads/'.$namafile.'.'.$extensi);
           $model->gambar = 'uploads/'.$namafile.'.'.$extensi;
         }

         $model->save();

           return $this->redirect(['view', 'id' => $model->id]);
       } else {
           return $this->render('create', [
               'model' => $model,
           ]);
       }
   }

    /**
     * Updates an existing Tempat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
     public function actionUpdate($id)
   {
       $model = $this->findModel($id);
       $tmpgambar = $model->gambar;

       if ($model->load(Yii::$app->request->post())) {

         $model->gambar = UploadedFile::getInstance($model, 'gambar');

         if(!$model->gambar==NULL){
           //save file
        //   $unik = $model->nama_tempat;
           $namafile = $model->nama_tempat;
           $extensi = $model->gambar->extension;

           $model->gambar->saveAs('uploads/'.$namafile.'.'.$extensi);
           $model->gambar = 'uploads/'.$namafile.'.'.$extensi;
         } else {
           if($tmpgambar!=NULL) $model->gambar = $tmpgambar;
         }
         $model->save();

           return $this->redirect(['view', 'id' => $model->id]);
       } else {
           return $this->render('update', [
               'model' => $model,

           ]);
       }
   }


    /**
     * Deletes an existing Tempat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tempat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tempat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tempat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

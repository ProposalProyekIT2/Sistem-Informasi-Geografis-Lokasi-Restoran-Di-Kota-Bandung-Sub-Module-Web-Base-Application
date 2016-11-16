<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Tempat */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDI3HJ6lzZK4t-69beLdawReB9tg4w0ORM&callback=initMap" async defer></script>

<div class="tempat-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mlat')->textInput(['readonly' => true]) ?>
<?= $form->field($model, 'mlong')->textInput(['readonly' => true]) ?>


<?= \ibrarturi\latlngfinder\LatLngFinder::widget([
    'model' => $model,              // model object
  'latAttribute' => 'mlat',        // Latitude attribute
  'lngAttribute' => 'mlong',        // Longitude attribute
  'defaultLat' => -6.907937155970458,        // Default latitude for the map
  'defaultLng' => 107.63580322265625,         // Default Longitude for the map
  'defaultZoom' => 8,             // Default zoom for the map
  'enableZoomField' => false,      // True: for assigning zoom values to the zoom field, False: Do not assign zoom value to the zoom field
]); ?>
<?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'deskripsi')->widget(CKEditor::className(), [
          'options' => ['rows' => 6],
          'preset' => 'custom_v1'
      ]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

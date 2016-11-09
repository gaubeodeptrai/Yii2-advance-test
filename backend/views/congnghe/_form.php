<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use backend\models\Sangche;
use yyii\web\View;
/* @var $this yii\web\View */
/* @var $model backend\models\Congnghe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congnghe-form">

     <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'ten_congnghe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thuoc_detai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chunhiem_detai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cq_quanly_detai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ten_sanpham')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mota')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        
        'imageUpload' => Url::to(['/frontend/uploads/']),
        
    ]
])?>

    <?= $form->field($model, 'congsuat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muc_do_trien_khai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'so_lieu_kinh_te')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hinh_thuc_chuyen_giao')->textInput(['maxlength' => true]) ?>

   <?php
    echo $form->field($model, 'image')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php
    echo $form->field($model, 'attachment')->widget(FileInput::classname(), [
    'options' => ['accept' => '*/*'],
    ]);
    ?>

    <?= $form->field($model, 'dang_tai_lieu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi_lienhe')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

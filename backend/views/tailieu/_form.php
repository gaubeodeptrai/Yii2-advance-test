<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use backend\models\Sangche;
use yyii\web\View;
/* @var $this yii\web\View */
/* @var $model backend\models\Tailieu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tailieu-form">

     <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'tentailieu')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'dangtailieu')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'mota')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        
        'imageUpload' => Url::to(['/frontend/uploads/']),
        
    ]
])?>

    <?= $form->field($model, 'tacgia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nguontrich')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sotrang')->textInput(['maxlength' => true]) ?>

   

    <?= $form->field($model, 'DDC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaynhap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quocgia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

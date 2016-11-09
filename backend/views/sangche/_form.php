<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use backend\models\Sangche;
use yyii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\models\Sangche */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sangche-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'so_don')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'so_don_uu_tien')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'ngay_cong_bo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngay_don_cong_bo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'IPC')->textInput(['maxlength' => 50]) ?>
    
    
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
    
   
    <?= $form->field($model, 'file_video')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ten_sang_che')->textInput(['maxlength' => 250]) ?>

     <?= $form->field($model, 'tomtat')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        
        'imageUpload' => Url::to(['/frontend/uploads/']),
        
    ]
])?>

    <?= $form->field($model, 'so_bang')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngay_cap_bang')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ngay_nop_don')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'tacgia')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chu_so_huu')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chu_bang')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'ten_dai_dien')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'so_don_ptc')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'so_congbo_ptc')->textInput(['maxlength' => 200]) ?>

    <?php echo $form->field($model, 'baohotaivietnam')->dropDownList(['1' => 'Đã được bảo hộ tại Việt Nam', '0' => 'Chưa được bảo hộ'],['prompt'=>'Select...']); ?>

    <?= $form->field($model, 'ngonngu')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

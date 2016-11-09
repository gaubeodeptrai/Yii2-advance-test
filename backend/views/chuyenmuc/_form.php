<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use backend\models\Sangche;
use yyii\web\View;
use kartik\widgets\Select2;
use backend\models\Chuyenmuc;
/* @var $this yii\web\View */
/* @var $model backend\models\Chuyenmuc */
/* @var $form yii\widgets\ActiveForm */
$categories = Chuyenmuc::find()->all();
?>

<div class="chuyenmuc-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'parent')->dropDownList(\yii\helpers\ArrayHelper::map($categories, 'id', 'ten'),
             ['prompt'=>'-- Chọn chuyên mục  --']); ?>

    <?= $form->field($model, 'gioithieu')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        
        'imageUpload' => Url::to(['/frontend/web/uploads/']),
        
    ]
   ])?>
    
    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

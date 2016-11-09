<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use dosamigos\ckeditor\CKEditor;
use yii\helpers\Url;
use backend\models\Sangche;
use yyii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'news_title_vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_short_vn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_mieuta_vn')->widget(\yii\redactor\widgets\Redactor::className(), [
    'clientOptions' => [
        
        'imageUpload' => Url::to(['/frontend/web/uploads/']),
        
    ]
   ])?>

    <?php
    echo $form->field($model, 'image')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

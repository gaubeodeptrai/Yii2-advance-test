<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_title')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'news_short')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_mieuta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_cat_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'day')->textInput() ?>

    <?= $form->field($model, 'month')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'news_hot')->textInput() ?>

    <?= $form->field($model, 'news_title_vn')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'news_short_vn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_mieuta_vn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_image')->textInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

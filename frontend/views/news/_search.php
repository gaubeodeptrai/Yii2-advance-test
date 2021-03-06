<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'news_title') ?>

    <?= $form->field($model, 'news_short') ?>

    <?= $form->field($model, 'news_mieuta') ?>

    <?= $form->field($model, 'news_cat_id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'day') ?>

    <?php // echo $form->field($model, 'month') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'news_hot') ?>

    <?php // echo $form->field($model, 'news_title_vn') ?>

    <?php // echo $form->field($model, 'news_short_vn') ?>

    <?php // echo $form->field($model, 'news_mieuta_vn') ?>

    <?php // echo $form->field($model, 'news_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

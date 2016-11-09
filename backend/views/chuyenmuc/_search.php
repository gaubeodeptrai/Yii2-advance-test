<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChuyenmucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chuyenmuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten_vn') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'parent') ?>

    <?= $form->field($model, 'gioithieu') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'kieu') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'ma_danhmuc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

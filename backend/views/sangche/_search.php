<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SangcheSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sangche-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'so_don') ?>

    <?= $form->field($model, 'so_don_uu_tien') ?>

    <?= $form->field($model, 'ngay_cong_bo') ?>

    <?= $form->field($model, 'ngay_don_cong_bo') ?>

    <?php // echo $form->field($model, 'IPC') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'file_video') ?>

    <?php // echo $form->field($model, 'ten_sang_che') ?>

    <?php // echo $form->field($model, 'tomtat') ?>

    <?php // echo $form->field($model, 'so_bang') ?>

    <?php // echo $form->field($model, 'ngay_cap_bang') ?>

    <?php // echo $form->field($model, 'ngay_nop_don') ?>

    <?php // echo $form->field($model, 'tacgia') ?>

    <?php // echo $form->field($model, 'chu_so_huu') ?>

    <?php // echo $form->field($model, 'chu_bang') ?>

    <?php // echo $form->field($model, 'ten_dai_dien') ?>

    <?php // echo $form->field($model, 'so_don_ptc') ?>

    <?php // echo $form->field($model, 'so_congbo_ptc') ?>

    <?php // echo $form->field($model, 'baohotaivietnam') ?>

    <?php // echo $form->field($model, 'ngonngu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

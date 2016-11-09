<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CongngheSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congnghe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten_congnghe') ?>

    <?= $form->field($model, 'thuoc_detai') ?>

    <?= $form->field($model, 'chunhiem_detai') ?>

    <?= $form->field($model, 'cq_quanly_detai') ?>

    <?php // echo $form->field($model, 'ten_sanpham') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'congsuat') ?>

    <?php // echo $form->field($model, 'muc_do_trien_khai') ?>

    <?php // echo $form->field($model, 'so_lieu_kinh_te') ?>

    <?php // echo $form->field($model, 'hinh_thuc_chuyen_giao') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'file_toanvan') ?>

    <?php // echo $form->field($model, 'dang_tai_lieu') ?>

    <?php // echo $form->field($model, 'diachi_lienhe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

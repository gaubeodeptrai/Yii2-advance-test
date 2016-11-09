<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChuyengiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chuyengia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['search'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'birthdate') ?>

    <?= $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'hinhanh') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'chuyenmon') ?>

    <?php // echo $form->field($model, 'chucvu') ?>

    <?php // echo $form->field($model, 'hoc_vi') ?>

    <?php // echo $form->field($model, 'hoc_ham') ?>

    <?php // echo $form->field($model, 'ngoai_ngu') ?>

    <?php // echo $form->field($model, 'linhvuc_tuvan') ?>

    <?php // echo $form->field($model, 'loaihinh_tuvan') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Làm lại', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

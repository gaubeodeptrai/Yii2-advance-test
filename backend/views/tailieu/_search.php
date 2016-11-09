<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TailieuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tailieu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tentailieu') ?>

    <?= $form->field($model, 'file_toanvan') ?>

    <?= $form->field($model, 'dangtailieu') ?>

    <?= $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'tacgia') ?>

    <?php // echo $form->field($model, 'nguontrich') ?>

    <?php // echo $form->field($model, 'sotrang') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'DDC') ?>

    <?php // echo $form->field($model, 'ngaynhap') ?>

    <?php // echo $form->field($model, 'quocgia') ?>

    <?php // echo $form->field($model, 'tap') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

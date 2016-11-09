<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Congnghe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="congnghe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten_congnghe')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'thuoc_detai')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'chunhiem_detai')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cq_quanly_detai')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ten_sanpham')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'mota')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'congsuat')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'muc_do_trien_khai')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'so_lieu_kinh_te')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hinh_thuc_chuyen_giao')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'file_toanvan')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'dang_tai_lieu')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'diachi_lienhe')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sangche */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sangche-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'so_don')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'so_don_uu_tien')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'ngay_cong_bo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngay_don_cong_bo')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'IPC')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'file_toanvan')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'file_video')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ten_sang_che')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'tomtat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'so_bang')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngay_cap_bang')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ngay_nop_don')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'tacgia')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chu_so_huu')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chu_bang')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'ten_dai_dien')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'so_don_ptc')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'so_congbo_ptc')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'baohotaivietnam')->textInput() ?>

    <?= $form->field($model, 'ngonngu')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chuyengia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chuyengia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'birthdate')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'hinhanh')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chuyenmon')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'chucvu')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'hoc_vi')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'hoc_ham')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngoai_ngu')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'linhvuc_tuvan')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'loaihinh_tuvan')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

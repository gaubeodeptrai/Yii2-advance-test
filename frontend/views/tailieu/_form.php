<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tailieu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tailieu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tentailieu')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'file_toanvan')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'dangtailieu')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'mota')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tacgia')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'nguontrich')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'sotrang')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'DDC')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ngaynhap')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'quocgia')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'tap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

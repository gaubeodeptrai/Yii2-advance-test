<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_hotnews')->textInput() ?>

    <?= $form->field($model, 'num_news')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax_branch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'products_new')->textInput() ?>

    <?= $form->field($model, 'products_per_page')->textInput() ?>

    <?= $form->field($model, 'email_nhan_thu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hotline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template')->textInput() ?>

    <?= $form->field($model, 'sologan_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_sangche')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sologan_sangche')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_congnghe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sologan_congnghe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_nckh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sologan_nckh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo_chuyengia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sologan_chuyengia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

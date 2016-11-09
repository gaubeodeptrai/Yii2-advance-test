<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'keyword') ?>

    <?= $form->field($model, 'num_hotnews') ?>

    <?= $form->field($model, 'num_news') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel_branch') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'address_branch') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'fax_branch') ?>

    <?php // echo $form->field($model, 'products_new') ?>

    <?php // echo $form->field($model, 'products_per_page') ?>

    <?php // echo $form->field($model, 'email_nhan_thu') ?>

    <?php // echo $form->field($model, 'branch') ?>

    <?php // echo $form->field($model, 'hotline') ?>

    <?php // echo $form->field($model, 'template') ?>

    <?php // echo $form->field($model, 'sologan_home') ?>

    <?php // echo $form->field($model, 'logo_home') ?>

    <?php // echo $form->field($model, 'logo_sangche') ?>

    <?php // echo $form->field($model, 'sologan_sangche') ?>

    <?php // echo $form->field($model, 'logo_congnghe') ?>

    <?php // echo $form->field($model, 'sologan_congnghe') ?>

    <?php // echo $form->field($model, 'logo_nckh') ?>

    <?php // echo $form->field($model, 'sologan_nckh') ?>

    <?php // echo $form->field($model, 'logo_chuyengia') ?>

    <?php // echo $form->field($model, 'sologan_chuyengia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

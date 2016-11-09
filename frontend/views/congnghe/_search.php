<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CongngheSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-sm-4 col-md-3">
    <h4 class="search-results-title">
        <i class="soap-icon-search"></i>Tìm kiếm nâng cao
    </h4>
    <div class="toggle-container style1 filters-container">
        <div class="panel arrow-right">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#modify-search-panel" class="">Tìm kiếm chi tiết</a>
            </h4>
            <div id="modify-search-panel" class="panel-collapse collapse in">
                <div class="panel-content">
   <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <input type="hidden" name="<?= Yii::$app->request->csrfParam;?>" value="<?= Yii::$app->request->csrfToken;?>" />
    <?= $form->field($model, 'ten_congnghe') ?>

    <?= $form->field($model, 'thuoc_detai') ?>

    <?= $form->field($model, 'chunhiem_detai') ?>

    <?= $form->field($model, 'cq_quanly_detai') ?>

    <?php  echo $form->field($model, 'ten_sanpham') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php  echo $form->field($model, 'congsuat') ?>

    <?php  echo $form->field($model, 'muc_do_trien_khai') ?>

    <?php  echo $form->field($model, 'so_lieu_kinh_te') ?>

    <?php  echo $form->field($model, 'hinh_thuc_chuyen_giao') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'file_toanvan') ?>

    <?php  echo $form->field($model, 'dang_tai_lieu') ?>

    <?php  echo $form->field($model, 'diachi_lienhe') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Làm lại', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
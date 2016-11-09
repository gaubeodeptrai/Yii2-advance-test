<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SangcheSearch */
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
   <?php  echo $form->field($model, 'ten_sang_che') ?>

    <?= $form->field($model, 'so_don') ?>

    <?= $form->field($model, 'so_don_uu_tien') ?>

    <?= $form->field($model, 'ngay_cong_bo') ?>

    <?= $form->field($model, 'ngay_don_cong_bo') ?>

    <?php  echo $form->field($model, 'IPC') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'file_toanvan') ?>

    <?php // echo $form->field($model, 'file_video') ?>

    <?php  //echo $form->field($model, 'tomtat') ?>

    <?php  echo $form->field($model, 'so_bang') ?>

    <?php  echo $form->field($model, 'ngay_cap_bang') ?>

    <?php  echo $form->field($model, 'ngay_nop_don') ?>

    <?php  echo $form->field($model, 'tacgia') ?>

    <?php  echo $form->field($model, 'chu_so_huu') ?>

    <?php  echo $form->field($model, 'chu_bang') ?>

    <?php  echo $form->field($model, 'ten_dai_dien') ?>

    <?php  echo $form->field($model, 'so_don_ptc') ?>

    <?php  echo $form->field($model, 'so_congbo_ptc') ?>

    <?php echo $form->field($model, 'baohotaivietnam')->dropDownList(['1' => 'Đã được bảo hộ tại Việt Nam', '0' => 'Chưa được bảo hộ'],['prompt'=>'Select...']); ?>


    <?php  echo $form->field($model, 'ngonngu') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Làm lại', ['class' => 'btn btn-default']) ?>
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    

    <?php ActiveForm::end(); ?>



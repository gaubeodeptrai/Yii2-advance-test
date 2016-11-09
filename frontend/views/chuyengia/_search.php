<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChuyengiaSearch */
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

   

    <?= $form->field($model, 'fullname') ?>

   <input type="hidden" name="<?= Yii::$app->request->csrfParam;?>" value="<?= Yii::$app->request->csrfToken;?>" />

    <?= $form->field($model, 'birthdate') ?>

    <?= $form->field($model, 'sex') ?>

    <?php  echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'hinhanh') ?>

    <?php  echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php  echo $form->field($model, 'email') ?>

    <?php  echo $form->field($model, 'address') ?>

    <?php  echo $form->field($model, 'chuyenmon') ?>

    <?php  echo $form->field($model, 'chucvu') ?>

    <?php  echo $form->field($model, 'hoc_vi') ?>

    <?php  echo $form->field($model, 'hoc_ham') ?>

    <?php  echo $form->field($model, 'ngoai_ngu') ?>

    <?php  echo $form->field($model, 'linhvuc_tuvan') ?>

    <?php  echo $form->field($model, 'loaihinh_tuvan') ?>

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

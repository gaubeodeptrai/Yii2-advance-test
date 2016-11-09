<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TailieuSearch */
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
    <?= $form->field($model, 'tentailieu') ?>

   

    <?= $form->field($model, 'dangtailieu') ?>

    

    <?php  echo $form->field($model, 'tacgia') ?>

    <?php  echo $form->field($model, 'nguontrich') ?>

    <?php  echo $form->field($model, 'sotrang') ?>

    

    <?php  echo $form->field($model, 'DDC') ?>

    <?php  echo $form->field($model, 'ngaynhap') ?>

    <?php  echo $form->field($model, 'quocgia') ?>

    <?php  echo $form->field($model, 'tap') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Làm lại', ['class' => 'btn btn-default']) ?>
    </div>

  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



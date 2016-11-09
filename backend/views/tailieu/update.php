<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tailieu */

$this->title = '' . ' ' . $model->tentailieu;
$this->params['breadcrumbs'][] = ['label' => 'Tài liệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tentailieu, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tailieu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

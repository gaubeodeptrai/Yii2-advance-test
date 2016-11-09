<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sangche */

$this->title = '' . ' ' . $model->ten_sang_che;
$this->params['breadcrumbs'][] = ['label' => 'Sáng chế', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ten_sang_che, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sangche-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

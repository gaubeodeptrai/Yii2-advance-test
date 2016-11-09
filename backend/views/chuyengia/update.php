<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Chuyengia */

$this->title = 'Update Chuyengia: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Chuyengias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chuyengia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

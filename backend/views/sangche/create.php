<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sangche */

$this->title = 'Thêm sáng chế mới';
$this->params['breadcrumbs'][] = ['label' => 'Sáng chế', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sangche-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

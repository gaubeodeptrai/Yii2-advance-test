<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chuyengia */

$this->title = 'Create Chuyengia';
$this->params['breadcrumbs'][] = ['label' => 'Chuyengias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyengia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Congnghe */

$this->title = 'Thêm mới công nghệ';
$this->params['breadcrumbs'][] = ['label' => 'Công nghệ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congnghe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

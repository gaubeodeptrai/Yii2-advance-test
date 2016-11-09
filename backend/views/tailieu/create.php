<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tailieu */

$this->title = 'Thêm mới tài liệu';
$this->params['breadcrumbs'][] = ['label' => 'Tài liệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tailieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

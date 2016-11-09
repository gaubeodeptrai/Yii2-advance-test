<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sangche */

$this->title = 'Create Sangche';
$this->params['breadcrumbs'][] = ['label' => 'Sangches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sangche-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

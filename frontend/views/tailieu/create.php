<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tailieu */

$this->title = 'Create Tailieu';
$this->params['breadcrumbs'][] = ['label' => 'Tailieus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tailieu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

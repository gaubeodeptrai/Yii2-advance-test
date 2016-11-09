<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Congnghe */

$this->title = 'Create Congnghe';
$this->params['breadcrumbs'][] = ['label' => 'Congnghes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congnghe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->news_title_vn;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
          //  'news_title',
           // 'news_short:ntext',
          //  'news_mieuta:ntext',
          //  'news_cat_id',
          //  'date',
          //  'day',
          //  'month',
          //  'year',
           // 'news_hot',
            'news_title_vn:HTML',
            'news_short_vn:HTML',
            'news_mieuta_vn:HTML',
            'news_image',
        ],
    ]) ?>

</div>

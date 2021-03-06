<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'news_title',
            'news_short:ntext',
            'news_mieuta:ntext',
            'news_cat_id',
            // 'date',
            // 'day',
            // 'month',
            // 'year',
            // 'news_hot',
            // 'news_title_vn',
            // 'news_short_vn:ntext',
            // 'news_mieuta_vn:ntext',
            // 'news_image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

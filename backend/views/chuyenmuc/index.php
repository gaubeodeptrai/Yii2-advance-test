<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChuyenmucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chuyên mục trên Menu trang chủ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyenmuc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           // 'ten_vn',
            'ten',
            'parent',
            //'gioithieu:ntext',
            // 'link',
            // 'sort',
            // 'kieu',
            // 'icon',
            // 'active',
            // 'ma_danhmuc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

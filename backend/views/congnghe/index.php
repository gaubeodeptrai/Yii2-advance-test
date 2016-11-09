<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CongngheSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Công nghệ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congnghe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới công nghệ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ten_congnghe',
            'thuoc_detai',
            'chunhiem_detai',
            'cq_quanly_detai',
            // 'ten_sanpham',
            // 'mota:ntext',
            // 'congsuat',
            // 'muc_do_trien_khai',
            // 'so_lieu_kinh_te:ntext',
            // 'hinh_thuc_chuyen_giao',
            // 'file',
            // 'file_toanvan',
            // 'dang_tai_lieu',
            // 'diachi_lienhe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

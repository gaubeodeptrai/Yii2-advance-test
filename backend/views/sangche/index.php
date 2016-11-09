<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SangcheSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sáng chế';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sangche-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới sáng chế', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ten_sang_che',
            'tacgia',
            'IPC',
            'chu_bang',
            'ten_dai_dien',
            // 'IPC',
            // 'file',
            // 'file_video',
            // 'ten_sang_che',
            // 'tomtat:ntext',
            // 'so_bang',
            // 'ngay_cap_bang',
            // 'ngay_nop_don',
            // 'tacgia',
            // 'chu_so_huu',
            // 'chu_bang',
            // 'ten_dai_dien',
            // 'so_don_ptc',
            // 'so_congbo_ptc',
            // 'baohotaivietnam',
            // 'ngonngu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

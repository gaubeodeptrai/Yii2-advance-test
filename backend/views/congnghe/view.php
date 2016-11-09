<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Congnghe */

$this->title = $model->ten_congnghe;
$this->params['breadcrumbs'][] = ['label' => 'Công nghệ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congnghe-view">

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
            //'id',
            'ten_congnghe',
            'thuoc_detai',
            'chunhiem_detai',
            'cq_quanly_detai',
            'ten_sanpham',
            'mota:HTML',
            'congsuat',
            'muc_do_trien_khai',
            'so_lieu_kinh_te:ntext',
            'hinh_thuc_chuyen_giao',
            'file',
            'file_toanvan',
            'dang_tai_lieu',
            'diachi_lienhe',
        ],
    ]) ?>

</div>

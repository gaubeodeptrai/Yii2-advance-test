<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sangche */

$this->title = $model->ten_sang_che;
$this->params['breadcrumbs'][] = ['label' => 'Sáng chế', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sangche-view">

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
            'so_don',
            'so_don_uu_tien',
            'ngay_cong_bo',
            'ngay_don_cong_bo',
            'IPC',
            'file',
            'file_toanvan',
            'file_video',
            'ten_sang_che',
            'tomtat:HTML',
            'so_bang',
            'ngay_cap_bang',
            'ngay_nop_don',
            'tacgia',
            'chu_so_huu',
            'chu_bang',
            'ten_dai_dien',
            'so_don_ptc',
            'so_congbo_ptc',
            'baohotaivietnam',
            'ngonngu',
        ],
    ]) ?>

</div>

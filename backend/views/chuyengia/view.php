<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Chuyengia */

$this->title = $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách chuyên gia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->fullname;
?>
<div class="chuyengia-view">

    <h1><?= Html::encode($model->fullname) ?></h1>

    <p>
        <?= Html::a('Sửa thông tin chuyên gia', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa bỏ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn chắc chắn muốn xóa người này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'lastname',
            'birthdate',
            'sex',
            'nationality',
            //'hinhanh:image',
            [
             'attribute'=>'photo',
             'value'=>'/niptex/admin/frontend/web/uploads/'.$model->hinhanh.'',
             'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            'tel',
            'fax',
            'email:email',
            'address',
            'chuyenmon',
            'chucvu',
            'hoc_vi',
            'hoc_ham',
            'ngoai_ngu',
            'linhvuc_tuvan',
            'loaihinh_tuvan',
        ],
    ]) ?>

</div>

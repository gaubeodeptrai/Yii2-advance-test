<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Setting */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-view">

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
            'id',
            'title',
            'keyword',
            'num_hotnews',
            'num_news',
            'company_name',
            'email:email',
            'tel_branch',
            'tel',
            'address',
            'address_branch',
            'website',
            'fax',
            'fax_branch',
            'products_new',
            'products_per_page',
            'email_nhan_thu:email',
            'branch:ntext',
            'hotline',
            'template',
            'sologan_home',
            'logo_home',
            'logo_sangche',
            'sologan_sangche',
            'logo_congnghe',
            'sologan_congnghe',
            'logo_nckh',
            'sologan_nckh',
            'logo_chuyengia',
            'sologan_chuyengia',
        ],
    ]) ?>

</div>

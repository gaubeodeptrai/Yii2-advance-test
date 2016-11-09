<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'keyword',
            //'num_hotnews',
            //'num_news',
            // 'company_name',
            // 'email:email',
            // 'tel_branch',
            // 'tel',
            // 'address',
            // 'address_branch',
            // 'website',
            // 'fax',
            // 'fax_branch',
            // 'products_new',
            // 'products_per_page',
            // 'email_nhan_thu:email',
            // 'branch:ntext',
            // 'hotline',
            // 'template',
            // 'sologan_home',
            // 'logo_home',
             'logo_sangche',
            // 'sologan_sangche',
            // 'logo_congnghe',
            // 'sologan_congnghe',
            // 'logo_nckh',
            // 'sologan_nckh',
            // 'logo_chuyengia',
            // 'sologan_chuyengia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

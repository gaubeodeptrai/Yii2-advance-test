<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ChuyengiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách chuyên gia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyengia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    $dataProvider = new ActiveDataProvider([
    'query' => \backend\models\Chuyengia::find()->orderBy('lastname'),
    //  'query' => \backend\models\Chuyengia::findBySql('select * from chuyengia order by lastname'),  
    'pagination' => [
        'pageSize' => 50,
      ],
    ]);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         
            'fullname',
            //'lastname',
            'birthdate',
            
            // 'nationality',
            // 'hinhanh',
            // 'tel',
            // 'fax',
            // 'email:email',
            // 'address',
             'chuyenmon',
             //'chucvu',
             'hoc_vi',
             'hoc_ham',
            // 'ngoai_ngu',
            // 'linhvuc_tuvan',
            // 'loaihinh_tuvan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

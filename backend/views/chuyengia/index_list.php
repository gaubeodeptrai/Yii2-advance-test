<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChuyengiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách chuyên gia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chuyengia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Tìm kiếm', ['search'], ['class' => 'btn btn-success']) ?>
    </p>
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
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => '_item',
    ]) ?>
    

</div>

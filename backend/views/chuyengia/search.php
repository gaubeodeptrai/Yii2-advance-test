<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChuyengiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tìm kiếm chuyên gia';
$this->params['breadcrumbs'][] = $this->title;
?>

 <?= $this->render('_search', ['model' => $searchModel]);?>
 
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        //'itemOptions' => ['class' => 'item'],
        'itemView' => '_item',
    ]) ?>


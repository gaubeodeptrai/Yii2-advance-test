<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TailieuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tài liệu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tailieu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tentailieu',
            //'file_toanvan',
            'dangtailieu',
            'mota:HTML',
             'tacgia',
             'nguontrich',
            // 'sotrang',
            // 'file',
            // 'DDC',
            // 'ngaynhap',
             'quocgia',
            // 'tap',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

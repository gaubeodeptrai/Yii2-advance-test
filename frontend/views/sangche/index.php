<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SangcheSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sáng chế';
$this->params['breadcrumbs'][] = Html::encode($this->title);
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Sáng chế
                        </h2>
	</div>
	    <ul class="breadcrumbs pull-right">
              <?= Breadcrumbs::widget([
            
            'homeLink' => [ 
                      'label' => Yii::t('yii', 'Trang chủ'),
                      'url' => Yii::$app->homeUrl,
                      
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
           
             ]) ?>
           </ul>	
    </div>
</div>
<!--*******************************************************************-->
<section id="content">
	<div class="container">
		<div id="main">
			<div class="row">
			 <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                            <div class="col-sm-8 col-md-9">
                                <div class="hotel-list list-wrapper">
                                    <div class="image-box listing-style3 hotel">
                                      <?= ListView::widget([
                                          'dataProvider' => $dataProvider,
                                          'itemView' =>  '_sangche-list.php',
                                          ]) ?>
                                    </div>
                                </div>
			     
                            </div>
		     </div>
		</div>
	</div>
</section>


<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->news_title;
?>

<?php
         
         $this->params['breadcrumbs'][] = ['label' => 'News'];
         //$this->params['breadcrumbs'][] = $this->title;
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Tin tức
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
			  
                            <div class="col-sm-12 col-md-12">
                                <div class="hotel-list list-wrapper">
                                    <div class="image-box listing-style3 hotel">
                                      <h2 class="entry-title">
                                        <?= Html::encode($this->title) ?>
				      </h2>
                                        <div class="post-content entry-content">
                                            <i><?=Html::encode($model->news_short_vn)?></i>
                                            <p>
                                               <?=$model->news_mieuta_vn?> 
                                            </p>
		                        </div>
                                    </div>
                                </div>
                                
                              
			     
                            </div>
		     </div>
                   
		</div>
	</div>
</section>


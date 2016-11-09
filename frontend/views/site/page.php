<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = $pagemodel->ten;
$this->params['breadcrumbs'][] = $this->title;
?>

<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
			  <?=$this->title?>
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
        <div id="main" class="entry-content">
	    <div>
                <style 
                    scoped>#f-corner-1 { 
                        background:#fff;margin-right:60px
                    } 
                           #f-corner-1:before{
                               background:#fff;width:60px;right:-60px;bottom:60px;top:0;
                    }
                           #f-corner-1:after{right: -60px;bottom:0;border-top:60px solid #d9d9d9; border-right: 60px solid transparent;
                    }
                </style>
                <div id="f-corner-1" class="fc-block">
                  <p><?=$pagemodel->gioithieu?></p>
                </div>
                     
            </div>
	</div>
    </div>
</section>
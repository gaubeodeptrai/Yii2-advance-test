<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\models\Tailieu */

$this->title = Html::encode($model->tentailieu);
$this->params['breadcrumbs'][] = ['label' => 'Tài liệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Chi tiết tài liệu
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
        <div class="row">
            <div id="main" class="col-sm-8 col-md-9">
               
                <div id="hotel-features" class="tab-container">
                    <ul class="tabs">
                        <li class="active">
                            <a href="#hotel-description" data-toggle="tab">Mô tả</a>
                        </li>
                        <li>
                            <a href="#hotel-availability" data-toggle="tab">Ảnh minh họa</a>
                        </li>
                        <li>
                            <a href="#hotel-amenities" data-toggle="tab">Tài liệu toàn văn</a>
                        </li>
                        <li>
                            <a href="#hotel-reviews" data-toggle="tab">Tải về</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="hotel-availability">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                <?php
                                 echo Html::a(Html::img('@web/uploads/'.$model->file, ['alt'=>'', 'class'=>'','width'=>'250px']));  
                                ?>
                            </div>
                              
                        </div>
                                    <div class="tab-pane fade in active" id="hotel-description">
                                        <div class="intro table-wrapper full-width hidden-table-sms">
                                            <div class="col-sm-12">
                                                <table style="width:100%; border: none">
                                                    <tr>
                                                        <td style="width: 30%">
                                                            <label>Tên tài liệu:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->tentailieu)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Dạng tài liệu:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->dangtailieu)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tác giả:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->tacgia)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Nguồn trích:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->nguontrich)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Số trang:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->sotrang)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>DDC: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->DDC)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày nhập</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngaynhap)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Quốc gia:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->quocgia)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tập: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->tap)?></td>
                                                    </tr>
                                                   
                                                    
                                                   
                                                 
                                                </table>
                                            </div>
                                           
                                        </div>
                                        <div class="long-description">
                                            <div class="box entry-content">
                                                <h2>Mô tả tài liệu</h2>
                                                <?=strip_tags($model->mota)?>
                                            </div>
                                       
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hotel-amenities">
                                   <object data="<?=Yii::$app->homeUrl?>uploads/<?=$model->file_toanvan?>" width="100%" height="1000px" type="application/pdf">
                                            <embed src="<?=Yii::$app->homeUrl?>uploads/<?=$model->file_toanvan?>" type="application/pdf" />
                                   </object>  
                                     </div>
                                    <div class="tab-pane fade" id="hotel-reviews">
                                        <div class="intro table-wrapper full-width hidden-table-sms">
                                            <div class="rating table-cell col-sm-4">
                                                
                                                <a href="<?=Yii::$app->homeUrl?>uploads/<?=$model->file_toanvan?>">
                                                    Click vào đây để tải file
                                                </a>
                                            </div>
                                 
                                        </div>
                                       
                                    </div>
                                  
                             
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                  <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                                                                
                                                                </div>
                                                            </div>
                                                        </section>   

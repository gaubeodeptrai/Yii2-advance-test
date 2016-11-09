<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\models\Congnghe */

$this->title = $model->ten_congnghe;
$this->params['breadcrumbs'][] = ['label' => 'Công nghệ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Chi tiết công nghệ
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
                                                            <label>Tên công nghệ:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ten_congnghe)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Chủ nhiệm đề tài:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->chunhiem_detai)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Thuộc đề tài:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->thuoc_detai)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Cơ quan quản lý đề tài:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->cq_quanly_detai)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tên sản phẩm:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ten_sanpham)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Công suất - Sản lượng: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->congsuat)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Mức độ triển khai</label>
                                                        </td>
                                                        <td><?=Html::encode($model->muc_do_trien_khai)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Số liệu kinh tế:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->so_lieu_kinh_te)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Hình thức chuyển giao: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->hinh_thuc_chuyen_giao)?></td>
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

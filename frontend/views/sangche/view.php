<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Sangche */

$this->title = Html::encode($model->ten_sang_che);
$this->params['breadcrumbs'][] = ['label' => 'Sáng chế', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Chi tiết sáng chế
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
                                                            <label>Tên sáng chế:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ten_sang_che)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Số đơn:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->so_don)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Số đơn ưu tiên:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->so_don_uu_tien)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày công bố:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngay_cong_bo)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày nộp đơn:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngay_nop_don)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Số bằng:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->so_bang)?></td>
                                                    </tr>
													<tr>
                                                        <td>
                                                            <label>Ngày cấp bằng:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngay_cap_bang)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>IPC:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->IPC)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tác giả:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->tacgia)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Chủ sở hữu:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->chu_so_huu)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tên/Địa chỉ chủ bằng:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->chu_bang)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Tên đại diện:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ten_dai_dien)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày nộp và số đơn PCT:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngay_nop_don)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày và số công bố PCT:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->so_congbo_ptc)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Bảo hộ tại Việt Nam:</label>
                                                        </td>
                                                        <td>
                                                            <?php
                                                              if ($model->baohotaivietnam == 0)
                                                              {
                                                                echo "Chưa được bảo hộ tại Việt Nam";  
                                                              }
                                                              else
                                                              if($model->baohotaivietnam == 1 )
                                                              {
                                                                echo "Đã được bảo hộ tại Việt Nam";   
                                                              }
                                                              else
                                                              {
                                                                 echo "Chưa có thông tin"; 
                                                              }
                                                              
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                           
                                        </div>
                                        <div class="long-description">
                                            <div class="box entry-content">
                                                <h2>Tóm tắt sáng chế</h2>
                                                   <?=strip_tags($model->tomtat)?>
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
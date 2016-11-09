<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\models\Chuyengia */

$this->title = $model->fullname;
$this->params['breadcrumbs'][] = ['label' => 'Chuyên gia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--************************ SITE MAP********************************** -->
<div class="page-title-container">
    <div class="container">
	<div class="page-title pull-left">
			<h2 class="entry-title">
				Chi tiết chuyên gia
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
                            <a href="#hotel-description" data-toggle="tab">Thông tin chi tiết chuyên gia : <?=Html::encode($model->fullname)?></a>
                        </li>
                      
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="hotel-availability">
                            <div class="intro table-wrapper full-width hidden-table-sms">
                                
                            </div>
                              
                        </div>
                                    <div class="tab-pane fade in active" id="hotel-description">
                                        <div class="intro table-wrapper full-width hidden-table-sms">
                                            <div class="col-sm-3">
                                                 <?php
                                                  if ($model->hinhanh !='')
                                                  {
                                                   echo Html::a(Html::img('@web/uploads/'.$model->hinhanh, ['alt'=>'', 'class'=>'','width'=>'150px']),['chuyengia/view', 'id' => $model->id]);  
                                                  }
                                                  else 
                                                  {
                                                   echo Html::a(Html::img('@web/uploads/noimage/noimage.png', ['alt'=>'', 'class'=>'','width'=>'150px']),['chuyengia/view', 'id' => $model->id]);   
                                                  }
                                                  ?>
                                            </div>    
                                            <div class="col-sm-9">
                                                <table style="width:100%; border: none">
                                                    <tr>
                                                        <td style="width: 35%">
                                                            <label>Họ tên chuyên gia:</label>
                                                        </td>
                                                        <td><?=  Html::encode($model->fullname)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngày sinh:</label>
                                                        </td>
                                                        <td><?=  Html::encode($model->birthdate)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Giới tính:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->sex)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Quốc tịch:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->nationality)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Điện thoại:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->tel)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Fax: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->fax)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Email: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->email)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Địa chỉ:</label>
                                                        </td>
                                                        <td><?=Html::encode($model->address)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Chức vụ hoặc chuyên môn: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->chuyenmon)?></td>
                                                    </tr>
                                                   <tr>
                                                        <td>
                                                            <label>Học vị: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->hoc_vi)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Học hàm: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->hoc_ham)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Ngoại ngữ: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->ngoai_ngu)?></td>
                                                    </tr>
                                                   <tr>
                                                        <td>
                                                            <label>Lĩnh vực tư vấn: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->linhvuc_tuvan)?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Loại hình tư vấn: </label>
                                                        </td>
                                                        <td><?=Html::encode($model->loaihinh_tuvan)?></td>
                                                    </tr>
                                                 
                                                </table>
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

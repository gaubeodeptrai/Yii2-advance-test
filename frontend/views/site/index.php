<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use app\models\SangcheSearch;
$model_sangche = new SangcheSearch;
$model_tailieu = new app\models\TailieuSearch;
$model_chuyengia = new app\models\ChuyengiaSearch;
$model_congnghe = new app\models\CongngheSearch;

$this->title = 'CSDL Niptex';

?>

<iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://bim.com.vn/database/milia/banner.php" width='100%' height="600"></iframe>
     
   <section id="content" class="no-padding">
     <div class="search-box-wrapper">
        <div class="search-box container">
	    <ul class="search-tabs clearfix">
		<li class="active" ><a href="#sangche-tab" data-toggle="tab">Sáng chế</a></li>
		<li><a href="#tailieu-tab" data-toggle="tab">Tài liệu</a></li>
                <li><a href="#chuyengia-tab" data-toggle="tab">Chuyên gia</a></li>
                <li><a href="#congnghe-tab" data-toggle="tab">Công nghệ</a></li>
            </ul>
        <div class="visible-mobile">
	    <ul id="mobile-search-tabs" class="search-tabs clearfix">
	        <li class="active" ><a href="#sangche-tab" data-toggle="tab">Sáng chế</a></li>
		<li><a href="#tailieu-tab" data-toggle="tab">Tài liệu</a></li>
                <li><a href="#chuyengia-tab" data-toggle="tab">Chuyên gia</a></li>
                <li><a href="#congnghe-tab" data-toggle="tab">Công nghệ</a></li>
	    </ul>
	</div>
        <div class="search-tab-content">
        <div class="tab-pane fade active in" id="sangche-tab">
            <?php $form = ActiveForm::begin([
             'action' => ['sangche/index'],
             'method' => 'get',
           ]); ?>
          <div class="form-group col-sm-12 col-md-10">
             <?php  echo $form->field($model_sangche, 'ten_sang_che',['options' => ['class' => 'input-text full-width']])->label(FALSE) ?>
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
          </div> 
            <?php ActiveForm::end(); ?>
        </div>
            
        <div class="tab-pane fade" id="tailieu-tab">
            <?php $form = ActiveForm::begin([
             'action' => ['tailieu/index'],
             'method' => 'get',
           ]); ?>
          <div class="form-group col-sm-12 col-md-10">
             <?php  echo $form->field($model_tailieu, 'tentailieu',['options' => ['class' => 'input-text full-width']])->label(FALSE) ?>
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
          </div>    
            <?php ActiveForm::end(); ?>
        </div>
        
        <div class="tab-pane fade" id="chuyengia-tab">
            <?php $form = ActiveForm::begin([
             'action' => ['chuyengia/index'],
             'method' => 'get',
           ]); ?>
          <div class="form-group col-sm-12 col-md-10">
             <?php  echo $form->field($model_chuyengia, 'fullname',['options' => ['class' => 'input-text full-width']])->label(FALSE) ?>
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
          </div>    
            <?php ActiveForm::end(); ?>
        </div>   
        
        <div class="tab-pane fade" id="congnghe-tab">
              <?php $form = ActiveForm::begin([
             'action' => ['congnghe/index'],
             'method' => 'get',
           ]); ?>
          <div class="form-group col-sm-12 col-md-10">
             <?php  echo $form->field($model_congnghe, 'ten_congnghe',['options' => ['class' => 'input-text full-width']])->label(FALSE) ?>
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
          </div>    
            <?php ActiveForm::end(); ?>
        </div>    
													
																					
        </div>
	</div>
     </div>
         
   <div class="entry-content">
    <div class="section destinations">
        <div class="container">
            <h2>Danh mục Cơ sở dữ liệu</h2>
            <div class="row hotel image-box listing-style2">
                                <div class='col-sm-6 col-sms-6 col-md-3'>
                    <article class="box">
                        <figure >
                            <a href="sangche">
                                <img width="300" height="200" src="images/banner/img_55b4f168e9e0a.jpg" />
                            </a>
                        </figure>
                        <div class="details">
                            <a title="View all" href="sangche" class="pull-right button uppercase">chi tiết ..</a>
                            <h4 class="box-title">
                                <a href="sangche">Cơ sở dữ liệu Sáng Chế</a>
                            </h4>    
                        </div>
                    </article>
                </div> 
                                <div class='col-sm-6 col-sms-6 col-md-3'>
                    <article class="box">
                        <figure >
                            <a href="tailieu">
                                <img width="300" height="200" src="images/banner/img_55b4f17d0524f.jpg" />
                            </a>
                        </figure>
                        <div class="details">
                            <a title="View all" href="tailieu" class="pull-right button uppercase">chi tiết ..</a>
                            <h4 class="box-title">
                                <a href="tailieu">Cơ sở dữ liệu Tài Liệu Khoa Học</a>
                            </h4>    
                        </div>
                    </article>
                </div> 
                                <div class='col-sm-6 col-sms-6 col-md-3'>
                    <article class="box">
                        <figure >
                            <a href="chuyengia">
                                <img width="300" height="200" src="images/banner/img_55b4f1905f8e9.jpg" />
                            </a>
                        </figure>
                        <div class="details">
                            <a title="View all" href="chuyengia" class="pull-right button uppercase">chi tiết ..</a>
                            <h4 class="box-title">
                                <a href="chuyengia">Cơ sở dữ liệu Chuyên Gia</a>
                            </h4>    
                        </div>
                    </article>
                </div> 
                                <div class='col-sm-6 col-sms-6 col-md-3'>
                    <article class="box">
                        <figure >
                            <a href="congnghe">
                                <img width="300" height="200" src="images/banner/img_55b4f1c094ea2.jpg" />
                            </a>
                        </figure>
                        <div class="details">
                            <a title="View all" href="congnghe" class="pull-right button uppercase">chi tiết ..</a>
                            <h4 class="box-title">
                                <a href="congnghe">Cơ sở dữ liệu Công Nghệ</a>
                            </h4>    
                        </div>
                    </article>
                </div> 
                            </div>
        </div>
    </div>
  
         <div class="section offer">
                    <div class="container">
                        <h1 class="text-center">Tin tức khoa học</h1>
                        
                        <div class="image-box style2">
                            <div class="row">
                                                                
                                <?= ListView::widget([
                                  'dataProvider' => $dataProvider,
                                  'summary'=>'',  
                                  'itemView' =>  '_news-list.php',
                                  ]) ?>
                      
                            </div>
                        </div>
                    </div>
           </div>       
                             
        </div>
		
	
  

	
<div class="opacity-overlay opacity-ajax-overlay"><i class="fa fa-spinner fa-spin spinner"></i></div>
  




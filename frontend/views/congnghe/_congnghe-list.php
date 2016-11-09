<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
?>

 
 <article class="box">
                <figure class="col-sm-5 col-md-4">
                     <?php
                       if ($model->file !='')
                       {
                         echo Html::a(Html::img('@web/uploads/'.$model->file, ['alt'=>'', 'class'=>'','width'=>'250px']),['congnghe/view', 'id' => $model->id]);  
                       }
                      else 
                       {
                         echo Html::a(Html::img('@web/uploads/noimage/noimage.png', ['alt'=>'', 'class'=>'']),['congnghe/view', 'id' => $model->id]);   
                       }
                     ?>
                     
                </figure>
                <div class="details col-sm-7 col-md-8">
                    <div>
                        <div>
                            <h4 class="box-title">
                                 <?php
                                   echo Html::a(Html::encode($model->ten_congnghe), ['congnghe/view', 'id' => $model->id]);
                                 ?>
                                <small>
                                    <i class="soap-icon-departure yellow-color"></i> <?=$model->thuoc_detai?>
                                </small>
                            </h4>
                           
                        </div>
                       
                    </div>
                    <div>
                        <ul>
                             <li>Tên sản phẩm : <?=HTML::encode($model->ten_sanpham)?></li>
                            <li>Chủ nhiệm đề tài : <?=HTML::encode($model->chunhiem_detai)?></li>
                        </ul>
                    </div>
                </div>
            </article>
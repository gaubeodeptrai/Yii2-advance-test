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
                       if ($model->hinhanh !='')
                       {
                         echo Html::a(Html::img('@web/uploads/'.$model->hinhanh, ['alt'=>'', 'class'=>'','width'=>'200px']),['chuyengia/view', 'id' => $model->id]);  
                       }
                      else 
                       {
                         echo Html::a(Html::img('@web/uploads/noimage/noimage.png', ['alt'=>'', 'class'=>'']),['chuyengia/view', 'id' => $model->id]);   
                       }
                     ?>
                     
                </figure>
                <div class="details col-sm-7 col-md-8">
                    <div>
                        <div>
                            <h4 class="box-title">
                                 <?php
                                   echo Html::a(Html::encode($model->fullname), ['chuyengia/view', 'id' => $model->id]);
                                 ?>
                                <small>
                                    <i class="soap-icon-departure yellow-color"></i> <?=$model->linhvuc_tuvan?>
                                </small>
                            </h4>
                           
                        </div>
                       
                    </div>
                    <div>
                        <ul>
                            <li>Học vị : <?=HTML::encode($model->hoc_vi)?></li>
			    <li>Học hàm : <?=HTML::encode($model->hoc_ham)?></li>
                            
                        </ul>
                    </div>
                </div>
            </article>
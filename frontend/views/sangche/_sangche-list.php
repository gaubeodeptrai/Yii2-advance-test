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
                         echo Html::a(Html::img('@web/uploads/'.$model->file, ['alt'=>'', 'class'=>'','width'=>'250px']),['sangche/view', 'id' => $model->id]);  
                       }
                      else 
                       {
                         echo Html::a(Html::img('@web/uploads/noimage/noimage.png', ['alt'=>'', 'class'=>'']),['sangche/view', 'id' => $model->id]);   
                       }
                     ?>
                     
                </figure>
                <div class="details col-sm-7 col-md-8">
                    <div>
                        <div>
                            <h4 class="box-title">
                                 <?php
                                   echo Html::a(Html::encode($model->ten_sang_che), ['sangche/view', 'id' => $model->id]);
                                 ?>
                                <small>
                                    <i class="soap-icon-departure yellow-color"></i> <?=$model->tacgia?>
                                </small>
                            </h4>
                           
                        </div>
                       
                    </div>
                    <div>
                        <ul>
                            <li>Chủ bằng : <?=HTML::encode($model->chu_bang)?></li>
			    <li>Chủ sở hữu : <?=HTML::encode($model->chu_so_huu)?></li>
                            <li>Tên đại diện : <?=HTML::encode($model->ten_dai_dien)?></li>
                        </ul>
                    </div>
                </div>
            </article>
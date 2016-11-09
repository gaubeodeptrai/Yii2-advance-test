<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
?>

 <div class="col-md-6">
    <article class="box">
        <figure>
           
            <?= Html::a(Html::img('uploads/'.$model->news_image, ['alt'=>'', 'class'=>'', 'height'=>'192px', 'width'=>'270px']),['news/view', 'id' => $model->id])?>
        </figure>
        <div class="details">
            <h4>
                <?php
                  echo Html::a(Html::encode($model->news_title), ['news/view', 'id' => $model->id]);
                ?>
            </h4>
                <p>
                 <?=  Html::encode($model->news_short)?>     
                </p>
                    
                    <?php
                     echo Html::a(Html::encode('Chi tiết'), ['news/view', 'id' => $model->id],['class'=>'button']);
                    ?>
                    
                <br />
        </div>
    </article>
 </div>
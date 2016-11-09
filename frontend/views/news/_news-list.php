<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
?>
<p>
   <?php
    echo Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
   ?>
</p>

<p>
   <?=$model->content?> 
</p>
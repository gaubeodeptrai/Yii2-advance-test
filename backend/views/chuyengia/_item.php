<?php
use yii\helpers\Html;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo Html::a(Html::encode($model->fullname), ['view', 'id' => $model->id]);
echo "<p>";
echo $model->chuyenmon;
echo "</p>";
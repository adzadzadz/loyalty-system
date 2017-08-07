<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\History */

$this->title = 'Update History: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="points-update">
    
    <h3>This feature has been disabled for security purposes.</h3>
    <?php /* $this->render('_form', [
        'points' => $model,
    ]) */ ?>

</div>

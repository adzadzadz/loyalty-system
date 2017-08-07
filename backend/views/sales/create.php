<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sales */

$this->title = 'Create Sales';
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-create">

    <?= $this->render('_form', [
        'sales' => $sales,
        'points' => $points,
        'user_id' => $user_id
    ]) ?>

</div>

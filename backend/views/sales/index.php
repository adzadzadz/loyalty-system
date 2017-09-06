<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?php // Html::a('Create Sales', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'user_id',
            ['class' => 'yii\grid\SerialColumn'],

            ['label'=>'Username', 'value'=>function ($model, $index, $widget) { 
                return ($model->user->username) . " " . $model->user->firstname . " " . $model->user->lastname; 
            }],
            'amount',
            ['label'=>'Created At', 'value'=>function ($model, $index, $widget) { 
                return date('m-d-Y (h:m:s)', $model->created_at); 
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
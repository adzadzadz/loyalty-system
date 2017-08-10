<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PointsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Points';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="points-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!-- 
    <p>
        <?php // Html::a('Create Points', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'user_id',
            
            ['label'=>'Username', 'value'=>function ($model, $index, $widget) { 
                return "(" . $model->user->username . ") " . $model->user->firstname . " " . $model->user->lastname;
            }],

            'points',

            ['label'=>'Created At', 'value'=>function ($model, $index, $widget) { 
                return date('m-d-Y (h:m:s)', $model->created_at); 
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

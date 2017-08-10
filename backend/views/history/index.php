<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['label'=>'Provider', 'value'=>function ($model, $index, $widget) { 
                if (isset($model->provider)) {
                    return "(" . $model->provider->username . ") " . $model->provider->firstname . " " . $model->provider->lastname;
                }
                return "Admin";
            }],

            ['label'=>'Username', 'value'=>function ($model, $index, $widget) { 
                return "(" . $model->user->username . ") " . $model->user->firstname . " " . $model->user->lastname;
            }],

            'type',
            'value',
            ['label'=>'Created At', 'value'=>function ($model, $index, $widget) { 
                return date('m-d-Y (h:m:s)', $model->created_at); 
            }],
            ['label'=>'Updated At', 'value'=>function ($model, $index, $widget) { 
                return date('m-d-Y (h:m:s)', $model->updated_at); 
            }],
            ['label'=>'Created By', 'value'=>function ($model, $index, $widget) { 
                return User::findOne($model->created_by)->username;
            }],
            ['label'=>'Updated By', 'value'=>function ($model, $index, $widget) { 
                return  User::findOne($model->updated_by)->username; 
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

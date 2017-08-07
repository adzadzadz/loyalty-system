<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?php //Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            ['label'=> 'Points', 'value'=>function ($model, $index, $widget) { 
                return isset($model->points->points) ? $model->points->points : 0; 
            }],
            ['label'=> 'Action', 'format' => 'raw', 'value' => function ($model, $index, $widget) { 
                $output = Html::a('Sales', Url::toRoute(['/sales/create', 'id' => $model->id]), ['class' => 'btn btn-sm btn-primary']);
                $output .= " ";
                $output .= Html::a('Create Downline', Url::toRoute(['/userc/create', 'upline_id' => $model->id]), ['class' => 'btn btn-sm btn-default']);
                return $output;
            }],
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            // 'email:email',
            'firstname',
            // 'middlename',
            'lastname',
            'direct_upline',
            'last_level_given',
            'last_user_given',
            // 'birthdate',
            // 'gender',
            // 'civilstatus',
            // 'citizenship',
            // 'homeaddress',
            // 'telephonenumber',
            // 'faxnumber',
            // 'mobilenumber',
            // 'status',
            // 'created_at',
            // 'updated_at',
            ['label'=>'Created At', 'value'=>function ($model, $index, $widget) { 
                return date('m-d-Y (h:m:s)', $model->created_at); 
            }],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

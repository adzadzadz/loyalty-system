<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Points */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="points-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Go Back to Tree', ['/userc/tree', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'points',
        ],
    ]) ?>

</div>
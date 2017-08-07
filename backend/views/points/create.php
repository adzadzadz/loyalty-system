<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Points */

$this->title = 'Create Points';
$this->params['breadcrumbs'][] = ['label' => 'Points', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="points-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'points' => $model,
    ]) ?>

</div>

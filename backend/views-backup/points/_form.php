<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Points */
/* @var $form yii\widgets\ActiveForm */

    // $users = \common\models\User::find()->all();
    // $userList = [];
    // foreach ($users as $user) {
    //     $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
    // }

    $user = $points->isNewRecord ? User::findOne($user_id) : User::findOne($points->user_id);
?>

<div class="row">
    <div class="col-md-12">
        <h1><?= $points->isNewRecord ? 'Create' : 'Update' ?> sales and points for <small><?= $user->firstname . ' ' . $user->lastname . ' (' . $user->username . ')' ?></small></h1>
    </div>
</div>

<div class="col-md-6">
    <div class="points-form">

        <?php $form = ActiveForm::begin(['action' => ['/points/create']]); ?>
        
        <?= $form->field($points, 'user_id')->textInput(['type' => 'hidden', 'value' => $user->id])->label(false) ?>
        
        <?= $form->field($points, 'points')->textInput(['type' => 'number', 'id' => 'points']) ?>

        <div class="form-group">
            <?= Html::submitButton($points->isNewRecord ? 'Submit Points' : 'Update', ['class' => $points->isNewRecord ? 'btn btn-success btn-block btn-lg' : 'btn btn-primary btn-block btn-lg']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
<div class="col-md-6">
    <div class="jumbotron" style="background: #f2f2f2;">
        <h1><span id="pointsTotal">0</span><small>points</small></h1>
    </div>
</div>
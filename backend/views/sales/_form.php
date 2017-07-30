<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sales */
/* @var $form yii\widgets\ActiveForm */

    $users = \common\models\User::find()->all();
    $userList = [];
    foreach ($users as $user) {
        $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
    }
?>

<div class="col-sm-6">
    <div class="sales-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->dropdownList($userList) ?>

        <?= $form->field($model, 'amount')->textInput(['type' => 'number', 'id' => 'amount']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
<div class="col-sm-6">
    <div class="jumbotron" style="background: #f2f2f2;">
        <h1><span id="pointsTotal">0</span><small>pts</small></h1>
    </div>
</div>
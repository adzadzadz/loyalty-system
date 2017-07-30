<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Points */
/* @var $form yii\widgets\ActiveForm */

    $users = \common\models\User::find()->all();
    $userList = [];
    foreach ($users as $user) {
        $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
    }
?>

<div class="col-sm-6">
    <div class="points-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->dropdownList($userList) ?>
        
        <div class="col-sm-6" style="padding: 0 !important;">
            <label for="">Amount</label>
            <?= Html::input('text', 'none', $value = null, ['type' => 'number', 'id' => 'amount', 'class' => 'form-control']); ?>
        </div>        
        <div class="col-sm-6" style="padding: 0 !important;">
            <?= $form->field($model, 'points')->textInput(['id' => 'pointsOutput', 'disabled' => true]) ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
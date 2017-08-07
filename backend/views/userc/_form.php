<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */

    $branches = \common\models\Branch::find()->all();
    $branchList = [];
    foreach ($branches as $each) {
        $branchList[$each->branch_code] = $each->name;
    }
    $users = \common\models\User::find()->all();
    // $userList = [];
    // foreach ($users as $user) {
    //     $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
    // }
    $user = $model->isNewRecord ? \common\models\User::findOne($upline_id) : \common\models\User::findOne($model->direct_upline);
?>

<div class="col-sm-12">
<?php if ($model->isNewRecord): ?>
    <h1>Create user downline for <small>(<?= $user->username ?>) <?= $user->firstname?> <?= $user->lastname ?></small></h1>
<?php endif ?>
    
</div>
<div class="col-sm-6">
    <div class="user-form">

        <?php $form = ActiveForm::begin(); ?>
        
        <?php if ($model->isNewRecord): ?>

            <?= $form->field($model, 'branch')->dropdownList($branchList) ?>

            <?php // $form->field($model, 'direct_upline')->dropdownList($userList) ?>

            <?= $form->field($model, 'direct_upline')->textInput(['type' => 'hidden', 'value' => $upline_id])->label(false) ?>

        <?php endif ?>
        
        <?php if (!$model->isNewRecord): ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?php endif ?>

        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
        
        <?php if (!$model->isNewRecord): ?>

            <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'civilstatus')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'citizenship')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'homeaddress')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'telephonenumber')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'faxnumber')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mobilenumber')->textInput(['maxlength' => true]) ?>

            <?php // $form->field($model, 'status')->textInput() ?>
            
        <?php endif ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
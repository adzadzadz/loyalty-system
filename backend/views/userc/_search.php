<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'middlename') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'direct_upline') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'civilstatus') ?>

    <?php // echo $form->field($model, 'citizenship') ?>

    <?php // echo $form->field($model, 'homeaddress') ?>

    <?php // echo $form->field($model, 'telephonenumber') ?>

    <?php // echo $form->field($model, 'faxnumber') ?>

    <?php // echo $form->field($model, 'mobilenumber') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Sales */
/* @var $form yii\widgets\ActiveForm */

    // $users = \common\models\User::find()->all();
    // $userList = [];
    // foreach ($users as $user) {
    //     $userList[$user->id] = "$user->username - $user->firstname $user->middlename $user->lastname";
    // }
    $user = $sales->isNewRecord ? User::findOne($user_id) : User::findOne($sales->user_id);
?>

<div class="row">
    <div class="col-md-12">
        <h1><?= $sales->isNewRecord ? 'Create' : 'Update' ?> sales and points for <small><?= $user->firstname . ' ' . $user->lastname . ' (' . $user->username . ')' ?></small></h1>
    </div>
</div>

<div class="col-md-12 well">
  <h3>Regular Transactions</h3>

  <?php if ($type == 'sales' || $type == null): ?>
    <div class="row">
        <div class="col-md-6">
            <div class="sales-form">

                <?php $form = ActiveForm::begin(); ?>
                
                <?php if ($sales->isNewRecord): ?>
                    <?= $form->field($sales, 'user_id')->textInput(['type' => 'hidden', 'value' => $user->id])->label(false) ?>                
                <?php endif ?>

                <?= $form->field($sales, 'amount')->textInput(['type' => 'number', 'id' => 'amount'])->label('Sales') ?>

                <?= $form->field($sales, 'description')->textInput(['type' => 'text', 'id' => 'amount']) ?>

                <div class="form-group">
                    <?= Html::submitButton($sales->isNewRecord ? 'Submit Sales' : 'Update', ['class' => $sales->isNewRecord ? 'btn btn-primary btn-block btn-md' : 'btn btn-primary btn-block btn-lg']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron" style="background: #474747; color: #fff;">
                <h1 style="color: #fff;"><span id="salesTotal">0</span><small>php</small></h1>
            </div>
        </div>
    </div>
  <?php endif ?>

  <?php if ($type == 'points' || $type == null): ?>
    <?php if ($sales->isNewRecord): ?>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="points-form">
                    
                    <?php $form = ActiveForm::begin(['action' => ['/points/create']]); ?>
                    
                    <?= $form->field($points, 'user_id')->textInput(['type' => 'hidden', 'value' => $user->id])->label(false) ?>

                    <?= $form->field($points, 'points')->textInput(['type' => 'number', 'id' => 'points']) ?>
                    <h5><b>Note: Points submitted will be shared across uplines.</b></h5>

                    <div class="form-group">
                        <?= Html::submitButton($points->isNewRecord ? 'Submit Points' : 'Update', ['class' => $points->isNewRecord ? 'btn btn-primary btn-block btn-md' : 'btn btn-primary btn-block btn-lg']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron" style="background: #474747;">
                    <h1 style="color: #fff;"><span id="pointsTotal">0</span><small>points</small></h1>
                </div>
            </div>
        </div>
    <?php endif ?>
  <?php endif ?>
</div>

<?php if ($type == 'bonusPoints' || $type == null): ?>
  <div class="col-md-12 well">
    <h3>Bonus</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="points-form">

                <?php $form = ActiveForm::begin(['action' => ['/points/create-solo']]); ?>
                
                <?= $form->field($points, 'user_id')->textInput(['type' => 'hidden', 'value' => $user->id])->label(false) ?>
                
                <?= $form->field($points, 'points')->textInput(['type' => 'number', 'id' => 'bonusPoints']) ?>
                <h5><b>Note: Points submitted ignores the sharing system.</b></h5>

                <div class="form-group">
                    <?= Html::submitButton($points->isNewRecord ? 'Submit Points' : 'Update', ['class' => $points->isNewRecord ? 'btn btn-primary btn-block btn-md' : 'btn btn-primary btn-block btn-lg']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron" style="background: #474747;">
                <h1 style="color: #fff;"><span id="bonusPointsTotal">0</span><small>points</small></h1>
            </div>
        </div>
    </div>
  </div>
<?php endif ?>
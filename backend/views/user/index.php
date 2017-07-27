<?php 

use yii\helpers\Html;
use yii\bootstrap\Alert;
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?= Alert::widget([
          'options' => [
              'class' => 'alert-success',
          ],
          'body' => \Yii::$app->getSession()->getFlash('signupResult'),
      ]) ?>
    </div>
    <div class="col-md-6">
      <?= Html::beginForm(['user/signup'], 'post', ['enctype' => 'multipart/form-data']) ?>
        <div class="form-group">
          <label for="">Branch</label>
          <?= Html::dropDownList('User[branch]', $selection = null, $branches, ['class' => 'form-control']); ?>        
        </div>
        <div class="form-group">
          <label for="">First Name</label>
          <?= Html::input('text', 'User[firstname]', $value = null, ['class' => 'form-control']); ?>
        </div>
        <div class="form-group">
          <label for="">Middle Name</label>
          <?= Html::input('text', 'User[middlename]', $value = null, ['class' => 'form-control']); ?>
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <?= Html::input('text', 'User[lastname]', $value = null, ['class' => 'form-control']); ?>
        </div>
        <div class="form-group">
          <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
        </div>
      <?= Html::endForm() ?>
    </div>
    <div class="col-md-6">
      <?php foreach ($users as $user): ?>
        <?= "$user->username - $user->firstname $user->middlename $user->lastname" ?> <br>
      <?php endforeach ?>
    </div>
  </div>
</div>
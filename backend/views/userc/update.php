<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Update User: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>
	
	<div class="col-md-6">
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
	</div>
	
	<div class="col-md-6 well">
		<h3>Update Password</h3>
	    <?= Html::beginForm(['/userc/update-password'], 'post', ['enctype' => 'multipart/form-data']) ?>
			
			<?= Html::hiddenInput ( 'user_id', $model->user_id ) ?>

			<div class="form-group">
				<?= Html::label('Password', 'password', ['class' => '']) ?>
				<?= Html::input('password', 'password', null, ['class' => 'form-control']) ?>
			</div>
			<div class="form-group">
				<?= Html::label('Confirm Password', 'confirmpassword', ['class' => '']) ?>
				<?= Html::input('password', 'confirmpassword', null, ['class' => 'form-control']) ?>
			</div>
			<div class="form-group">
				<?= Html::submitButton('Update', ['class' => 'btn btn-danger btn-sm']) ?>
			</div>
	    <?= Html::endForm() ?>
	</div>

</div>
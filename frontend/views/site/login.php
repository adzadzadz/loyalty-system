<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Page Heading Section Start --> 
<div class="pagehding-sec" style="background-image:url(<?= \Yii::getAlias("@web/imgs/login-banner.jpg"); ?>);">
    <div class="images-overlay"></div>      
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="page-heading">
                    <h1>Login</h1>
                </div>
            </div>              
            <div class="col-md-6 col-sm-5">
                <div class="page-heading">
                    <ul>
                        <li><a href="<?= Url::toRoute(['/site/index']) ?>">Home</a></li>
                        <li><a href="">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Heading Section End -->

<!-- Contact Section Start -->
<section class="contact-form-sec pt-50 pb-50">
    <div class="container">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>
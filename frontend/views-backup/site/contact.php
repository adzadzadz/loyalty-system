<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Page Heading Section Start --> 
<div class="pagehding-sec" style="background-image:url(<?= \Yii::getAlias("@web/imgs/contact-strip.jpg"); ?>);">
    <div class="images-overlay"></div>      
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="page-heading">
                    <h1>Contact Us</h1>
                </div>
            </div>              
            <div class="col-md-6 col-sm-5">
                <div class="page-heading">
                    <ul>
                        <li><a href="<?= Url::toRoute(['/site/index']) ?>">Home</a></li>
                        <li><a href="">Contact Us</a></li>
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
        <?php if (Yii::$app->session->getFlash ( 'success', $defaultValue = null, $delete = false )): ?>
            <div class="alert alert-success"><?= Yii::$app->session->getFlash ( 'success', $defaultValue = null, $delete = false ) ?></div>    
        <?php endif ?>
        
        <div class="row">
            <div class="col-md-4">
                <div class="contact-person">
                    <h1>main office</h1>        
                    <div class="single-info">
                        <h2>Address</h2>
                        <p>Lorem ipsum dolor sit amet, eros rem dui sollicitudin eros sapien, volutpat mattis a, tempus etiam ut nostra non, eu vestibulum mi purus justo fringilla nulla, amet et volutpat. In morbi fusce facilisis, turpis et lorem in vitae odio.</p>
                    </div>                      
                    <div class="single-info">
                        <h2>Email: </h2>
                        <p>yourdomain@gmail.com</p>
                    </div>                          
                    <div class="single-info">
                        <h2>Phone:</h2>
                        <p>(+45) 123 456 789</p>
                    </div>                              
                    <div class="single-info">
                        <h2>Skype:</h2>
                        <p>your_skype</p>
                    </div>  
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-field">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <h2>send us a message</h2>  
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-input-field">
                                <h4>Your name * <small><span style="color: red"><?= Html::error($model, 'name') ?></span></small></h4>
                                <?= Html::activeInput ( 'text', $model, 'name', $options = [] ) ?>
                            </div>
                        </div>                          
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-input-field">
                                <h4>Your Email * <small><span style="color: red"><?= Html::error($model, 'email') ?></span></small></h4>
                                <?= Html::activeInput ( 'email', $model, 'email', $options = [] ) ?>
                            </div>
                        </div>                                      
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-input-field">
                                <h4>Subject * <small><span style="color: red"><?= Html::error($model, 'subject') ?></span></small></h4>
                                <?= Html::activeInput ( 'text', $model, 'subject', $options = [] ) ?>
                            </div>
                        </div>                          
                        <div class="col-md-12 message-input">
                            <div class="single-input-field">
                                <h4>Messages * <small><span style="color: red"><?= Html::error($model, 'body') ?></span></small></h4>
                                <?= Html::activeTextarea ( $model, 'body', $options = [] ) ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-input-field">
                                <h4>Verification Code * <small><span style="color: red"><?= Html::error($model, 'verifyCode') ?></span></small></h4>
                                <?= \yii\captcha\Captcha::widget([
                                    'model' => $model,
                                    'attribute' => 'verifyCode',
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]); ?>
                            </div>
                        </div>   
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-input-fieldsbtn">
                                <input type="submit" value="send "/>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>              
        </div>  
        <!-- Google Map Section Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="map-heading">
                    <h2>Find Us on Google Map</h2>
                </div>
                <div class="map-sec">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d503103.25504622894!2d-118.94592338887756!3d34.065964560335836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1497798250780" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- Google Map Section End --> 
    </div>
</section>
<!-- Contact Section End -->
<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>


<div class="slider">
    <div class="all-slide owl-item">                    
        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/banner-1.jpg"); ?>);">
            <div class="slider-overlay"></div>
            <div class="slider-text">   
                <h1>Welcome To D'Loyalty Opportunity</h1>
                <!-- <h1>Buy... earn... save!</h1> -->
                 <ul>
                    <li><a href="<?= Url::toRoute(['/site/about']) ?>">Read More</a></li>
                    <li><a href="<?= Url::toRoute(['/site/contact']) ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>          
        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/banner-2v2.jpg"); ?>);">
            <div class="slider-overlay"></div>
            <div class="slider-text">
                <!-- <h2>Welcome To Our Company</h2>              -->
                <h1>COME AND JOIN OUR GROWING COMMUNITY</h1>
                <ul>
                    <li><a href="<?= Url::toRoute(['/site/about']) ?>">Read More</a></li>
                    <li><a href="<?= Url::toRoute(['/site/contact']) ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>                                                              
    </div>
</div>

<!-- Service Section Start -->  
<div class="service pt-50 pb-20" style="background-image:url(<?= \Yii::getAlias("@web/imgs/services-bg.jpg"); ?>);">
    <div class="service-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title">
                    <h1>Our Service/Product</h1>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                </div>
            </div>
        </div>      
        <div class="row">           
            <div class="service-item">
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Coffee</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                          
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-mobile"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Water</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                          
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Rice</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                          
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-sort-amount-asc"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Flour</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                          
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-camera"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Sugar</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                          
                <div class="col-md-4 col-sm-6 inner">
                    <div class="media">
                        <div class="service-icon">
                            <i class="fa fa-wordpress"></i>
                        </div>          
                        <div class="media-body">
                            <h2><a href="service-details.html">Chocolate</a></h2>
                            <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet.</p>
                        </div>
                    </div>
                </div>                                          
            </div>                          
        </div>
    </div>      
</div>      
<!-- Service Section End -->
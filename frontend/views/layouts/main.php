<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Preloader Start -->
<div id="preloader">
    <div id="preloader-status"></div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<header>
    <!-- Header Top Start -->
    <div class="hd-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="hd-lft">
                        <ul>
                            <li><i class="fa fa-comment-o"></i> 24x7 live Support</li>
                            <li><i class="fa fa-phone"></i>(888) 010203-4567</li>
                            <li><i class="fa fa-comment"></i>Live Chat</li>
                        </ul>
                    </div>  
                </div>  
                <div class="col-md-4 col-sm-4"> 
                    <div class="hd-rgt">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>              
                </div>                  
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Main Menu Start -->
    <div class="mnmenu-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt=""/></a>
                    </div>
                </div>
                <div class="col-md-9">      
                    <div class="menu">
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li  class="active"><a href="index.html">Home</a></li> 
                                <li><a href="project.html">Project</a></li> 
                                <li><a href="service.html">Service<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>                       
                                <li><a href="about.html">About</a></li>                             
                                <li><a href="team.html">Team</a></li>                               
                                <li><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>                               
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>          
                    </div>                      
                </div>                  
            </div>
        </div>  
    </div>
    <!-- Main Menu End -->
</header>
<!-- Header End --> 

<?= $content ?>

<footer>    
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
        <div class="container">
            <div class="row">               
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wedget-one">
                        <h2>About Us</h2>                           
                        <p>Lorem ipsum dolor sit amet, vel molestie nec imperdiet auctor sociosqu tellus. Nulla sed vestibulum in nulla etiam euismod, ac lectus ut.</p>                            
                        <p>Lorem ipsum dolor sit amet, vel molestie nec imperdiet auctor sociosqu tellus.</p>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google"></i></a></li>
                            <li><a href=""><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>              
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wedget-newsletter">
                        <h2>Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, vel molestie nec imperdiet auctor sociosqu tellus.</p>                       
                        <p>Lorem ipsum dolor sit amet, vel molestie nec imperdiet auctor sociosqu tellus.</p>                               
                        <form action="#">
                            <input placeholder="email address" type="email">
                            <input value="Go" type="submit">
                        </form>
                    </div>
                </div>          
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wedget-two">
                        <h2>Tag links</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Blog</a></li>    
                            <li><a href="">Service Details</a></li>                             
                            <li><a href="">Home</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">About Us</a></li>                                
                            <li><a href="">Contact us</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Service</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Blog</a></li>    
                            <li><a href="">Service Details</a></li>                             
                        </ul>
                    </div>
                </div>                  
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wedget-three">
                        <h2>Contact us</h2>
                        <div class="contact-field">
                            <div class="single-input-field">
                                <input type="text" placeholder="Your Name"/>
                            </div>                      
                            <div class="single-input-field">
                                <input type="email" placeholder="Your Email"/>
                            </div>                                                          
                            <div class="single-input-field">
                                <textarea placeholder="Your Message"></textarea>
                            </div>
                            <div class="single-input-fieldsbtn">
                                <input type="submit" value="send "/>
                            </div>                          
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copy-right">
                        <p>&copy; 2017 All Right Reserved.</p>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

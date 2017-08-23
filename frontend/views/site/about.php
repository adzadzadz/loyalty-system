<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- Page Heading Section Start -->	
<div class="pagehding-sec" style="background-image:url(<?= \Yii::getAlias("@web/imgs/about-banner.jpg"); ?>);">
	<div class="images-overlay"></div>		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7">
				<div class="page-heading">
					<h1>About Us</h1>
				</div>
			</div>				
			<div class="col-md-6 col-sm-5">
				<div class="page-heading">
					<ul>
						<li><a href="<?= Url::toRoute(['/site/index']) ?>">Home</a></li>
						<li><a href="">About Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Heading Section End -->

<!-- About Us Section Start -->	
<div class="about-us-sec">				
	<div class="container">							
		<div class="row">					
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="abt-lft">
					<!-- <h2>How to start</h2> -->
					<h2>Activation and Benefit</h2>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> FREE upon purchase of worth P1000 products</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> FREE Medical Doctor home visit</li>
						<li>
							<i class="fa fa-check" aria-hidden="true"></i> 
							PURIFIED WATER and LAUNDRY
							<ul style="margin-left: 15px;">
								<li><i class="fa fa-check" aria-hidden="true"></i>FREE PICK-UP and DELIVERY</li>
							</ul>
						</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> 5% Discount on TRANSFER FACTOR</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Cash Assistance</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Earn Reward Points!</li>
					</ul>
					<br><br>
					<h2 style="color: red;">***Refer a friend and earn ash rewards***</h2>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="abt-img">
					<img src="<?= \Yii::getAlias("@web/imgs/about-side.jpg"); ?>" alt=""/>
				</div>
			</div>					
		</div>	
	</div>	
</div>			

<!-- About Us Section End -->

<!-- About Us Section Start -->	
<div class="about-us-sec">				
	<div class="container">							
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-lg-8 col-md-8 col-sm-8">
				<h1>How it works <small>(<a style="color: blue;" href="<?= \Yii::getAlias("@web/imgs/about/guide.pdf"); ?>">Click me to see guide in pdf.</a>)</small></h1>
				<div class="slider">
				    <div class="all-slide owl-item">                    
				        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/about/guide-1.jpg"); ?>);"></div>          
				        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/about/guide-2.jpg"); ?>);"></div>
				        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/about/guide-3.jpg"); ?>);"></div>
				        <div class="single-slide" style="background-image:url(<?= \Yii::getAlias("@web/imgs/about/guide-4.jpg"); ?>);"></div>                                                         
				    </div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>	
</div>			
<!-- About Us Section End -->	
<!-- Count Up Section Start -->	
<div class="count-up-sec">
	<div class="container">
		<div class="row">	
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="counting_sl">
				<i class="fa fa-globe"></i>
				<h2 class="counter">150</h2>
				<h4>Affiliated companies</h4>	
				</div>
			</div>			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="counting_sl">
				<i class="fa fa-users"></i>
				<h2 class="counter">250</h2>
				<h4>happy client</h4>	
				</div>
			</div>			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="counting_sl">
				<i class="fa fa-pencil"></i>
				<h2 class="counter">24</h2>
				<h4>branches</h4>
				</div>
			</div>			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="counting_sl">
				<i class="fa fa-reorder"></i>
				<h2 class="counter">260</h2>
				<h4>Awards Win</h4>	
				</div>
			</div>										
		</div>					
	</div>
</div>
<!-- Count Up Section End -->	
<!-- Team Section Start -->		
<div class="team-sec pt-50 pb-20">					
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<div class="sec-title">
					<h1>Our Team</h1>
					<p>Lorem ipsum dolor sit amet, pellentesque enim lorem quis vivamus amet, lectus nullam sint, risus quis accumsan duis lacinia, quam eleifend ut amet pede. </p>
				</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="team-member">
					<img src="img/tm.jpg" alt=""/>
					<h2>Jehphteh Dorio</h2>
					<h3>Founder</h3>
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
						<li><a href=""><i class="fa fa-skype"></i></a></li>
					</ul>						
					<div class="team-overlay">
						<img src="img/tm.jpg" alt=""/>
						<h2>Jehphteh Dorio</h2>
						<h3>Founder</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
						</ul>						
					</div>
				</div>
			</div>					
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="team-member">
					<img src="img/tm2.jpg" alt=""/>
					<h2>Amellia</h2>
					<h3>Sales Manager</h3>
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
						<li><a href=""><i class="fa fa-skype"></i></a></li>
					</ul>
					<div class="team-overlay">
						<img src="img/tm2.jpg" alt=""/>
						<h2>Amellia</h2>
						<h3>Sales Manager</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
						</ul>						
					</div>						
				</div>
			</div>				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="team-member">
					<img src="img/tm3.jpg" alt=""/>
					<h2>Brianna</h2>
					<h3>Customer Satisfaction</h3>
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
						<li><a href=""><i class="fa fa-skype"></i></a></li>
					</ul>
					<div class="team-overlay">
						<img src="img/tm3.jpg" alt=""/>
						<h2>Brianna</h2>
						<h3>Customer Satisfaction</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
						</ul>						
					</div>						
				</div>
			</div>				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="team-member">
					<img src="img/tm4.jpg" alt=""/>
					<h2>Gabriella</h2>
					<h3>Operations Manager</h3>
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
						<li><a href=""><i class="fa fa-skype"></i></a></li>
					</ul>
					<div class="team-overlay">
						<img src="img/tm4.jpg" alt=""/>
						<h2>Gabriella</h2>
						<h3>Operations Manager</h3>
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
						</ul>						
					</div>						
				</div>
			</div>						
															
		</div>			     
	</div>	
</div>	
<!-- Team Section End -->
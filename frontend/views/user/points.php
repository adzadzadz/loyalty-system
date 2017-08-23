<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<!-- Page Heading Section Start -->	
<div class="pagehding-sec" style="background-image:url(<?= \Yii::getAlias("@web/imgs/points-banner.jpg"); ?>);">
	<div class="images-overlay"></div>		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7">
				<div class="page-heading">
					<h1>Points</h1>
				</div>
			</div>				
			<div class="col-md-6 col-sm-5">
				<div class="page-heading">
					<ul>
						<li><a href="<?= Url::toRoute(['/site/index']) ?>">Home</a></li>
						<li><a href="">Points</a></li>
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
		<!-- Service Details Section Start -->	
		<div class="about-us-sec">				
			<div class="container">						
				<div class="row">			
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="about-img">
							<img src="<?= \Yii::getAlias("@web/imgs/points-page-1.jpg") ?>" alt=""/>
						</div>
					</div>				
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="abt-lft">
							<h2>Current Points</h2>
							<h3>Personal</h3>
							<table class="table table-striped">
								<tr>
									<td><?= isset($user->points) ? $user->points->points : 0; ?>pts</td>
								</tr>
							</table>
							<h3>Shared</h3>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Name</th>
										<th>Points</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>----</td>
										<td>----</td>
									</tr>
								</tbody>
							</table>				
						</div>
					</div>					
				</div>	
			</div>	
		</div>			
		<!-- Service Details Section End -->	
	</div>
</div>
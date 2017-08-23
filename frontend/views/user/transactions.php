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
						<div class="abt-lft">
							<h2>Recent Transactions</h2>
							<h3>Purchases</h3>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Description</th>
										<th>Amount</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
									<?php if (isset($sales->salesHistory)): ?>
										<?php foreach ($sales->salesHistory as $sale): ?>
											<tr>
												<td><?= $sale->description ?></td>
												<td>P <strong><?= $sale->amount ?></strong></td>
												<td><?= date('Y-m-d (h:m:s)', $sale->created_at) ?></td>
											</tr>
										<?php endforeach ?>
									<?php else: ?>
										<tr>
											<td>No recent transactions</td>
											<td>0</td>
											<td>---</td>
										</tr>
									<?php endif ?>        
								</tbody>
							</table>				
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="about-img">
							<img src="<?= \Yii::getAlias("@web/imgs/transactions-page-1.jpg") ?>" alt=""/>
						</div>
					</div>					
				</div>	
			</div>	
		</div>			
		<!-- Service Details Section End -->	
	</div>
</div>
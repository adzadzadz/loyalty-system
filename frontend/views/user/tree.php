<?php 

use yii\helpers\Url;
use yii\helpers\Html;

	// $max = max(
	// 	isset($users[1]) ? count($users[1]) : 0, 
	// 	isset($users[2]) ? count($users[2]) : 0, 
	// 	isset($users[3]) ? count($users[3]) : 0
	// );
	
	$u1 = isset($users[1]) ? count($users[1]) : 0;
	$u2 = isset($users[2]) ? count($users[2]) : 0;
	$u3 = isset($users[3]) ? count($users[3]) : 0;
	$treeWidth = ($u1 + $u2 + $u3) * 100;
?>

<!-- Page Heading Section Start -->	
<div class="pagehding-sec" style="background-image:url(<?= \Yii::getAlias("@web/imgs/points-banner.jpg"); ?>);">
	<div class="images-overlay"></div>		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7">
				<div class="page-heading">
					<h1>Genealogy</h1>
				</div>
			</div>				
			<div class="col-md-6 col-sm-5">
				<div class="page-heading">
					<ul>
						<li><a href="<?= Url::toRoute(['/site/index']) ?>">Home</a></li>
						<li><a href="">Genealogy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Heading Section End -->
	
<div class="container">
	<div class="tree-wrap">
	  <div class="tree" style="width: <?= $treeWidth ?>px;">
	    <ul>
	      <li>
	        <a href="">
	          <div><strong><?= $users[0][0]->firstname ?> <?= $users[0][0]->lastname ?></strong></div>
	          <div><?= $users[0][0]->username ?></div>
	          <div style="color: red;">Points: <?= isset($users[0][0]->points->points) ? $users[0][0]->points->points : 0 ?></div>
	        </a>
	        <?php if (isset($users[1])): ?>
	          <ul>
	            <?php foreach ($users[1] as $user1): ?>
	              <li>
	                <a href="<?= Url::toRoute(['/user/tree', 'id' => $user1->user_id]) ?>">
	                  <div><?= $user1->firstname ?> <?= $user1->lastname ?></div>
	                  <div><?= $user1->username ?></div>
	                  <div style="color: red;">Points: <?= isset($user1->points->points) ? $user1->points->points : 0 ?></div>
	                </a>
	                <?php if (isset($users[2])): ?>
	                  <ul>
	                    <?php foreach ($users[2] as $user2): ?>
	                      <?php if ($user2->direct_upline == $user1->user_id): ?>
	                        <li>
	                          <a href="<?= Url::toRoute(['/user/tree', 'id' => $user2->user_id]) ?>">
	                            <div><?= $user2->firstname ?> <?= $user2->lastname ?></div>
	                            <div><?= $user2->username ?></div>
	                            <div style="color: red;">Points: <?= isset($user2->points->points) ? $user2->points->points : 0 ?></div>
	                          </a>
	                          <?php if (isset($users[3])): ?>
	                            <ul>
	                              <?php foreach ($users[3] as $user3): ?>
	                                <?php if ($user3->direct_upline == $user2->user_id): ?>
	                                  <li>
	                                      <a href="<?= Url::toRoute(['/user/tree', 'id' => $user3->user_id]) ?>">
	                                        <div><?= $user3->firstname ?> <?= $user3->lastname ?></div>
	                                        <div><?= $user3->username ?></div>
	                                        <div style="color: red;">Points: <?= isset($user3->points->points) ? $user3->points->points : 0 ?></div>
	                                      </a>
	                                  </li>
	                                <?php endif ?>
	                              <?php endforeach ?>
	                            </ul>
	                          <?php endif ?>
	                        </li>
	                      <?php endif ?>
	                    <?php endforeach ?>
	                  </ul>
	                <?php endif ?>
	              </li>
	            <?php endforeach ?>
	          </ul>
	        <?php endif ?>
	      </li>
	    </ul>
	  </div>
	</div>
	<div>
		<p><b>We are still improving our pages.</b></p>
	</div>
</div>
<!-- <div style="height: 800px;"></div> -->
<?php 

use yii\helpers\Url;
$upline = \common\models\User::findOne($users[0][0]->direct_upline);

$u1 = isset($users[1]) ? count($users[1]) : 0;
$u2 = isset($users[2]) ? count($users[2]) : 0;
$u3 = isset($users[3]) ? count($users[3]) : 0;
$treeWidth = ($u1 + $u2 + $u3) * 100;

?>

<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->

<h3>Genealogy of (<?= $users[0][0]->username ?>) <?= $users[0][0]->firstname ?> <?= $users[0][0]->lastname ?></h3>

<div class="col-md-2">
  <div class="col-md-12">
    <h2>Actions</h2>
    <a href="<?= Url::toRoute(['/sales/create', 'id' => $users[0][0]->user_id, 'type' => 'points']) ?>" class="btn btn-sm btn-block btn-primary">Add Points</a>
    <a href="<?= Url::toRoute(['/sales/create', 'id' => $users[0][0]->user_id, 'type' => 'bonusPoints']) ?>" class="btn btn-sm btn-block btn-primary">Add Bonus Points</a>
    <a href="<?= Url::toRoute(['/sales/create', 'id' => $users[0][0]->user_id, 'type' => 'sales']) ?>" class="btn btn-sm btn-block btn-primary">Add Sales</a>
    <a href="<?= Url::toRoute(['/userc/create', 'upline_id' => $users[0][0]->user_id]) ?>" class="btn btn-sm btn-block btn-primary">Create Downline</a>
    
    <?php if (isset($upline)): ?>
      <div class="tree">
        <ul>
          <li>
            <a href="<?= Url::toRoute(['/userc/tree', 'id' => $upline->user_id]) ?>">
              <div><strong>Direct Upline</strong></div>
              <div><?= $upline->firstname . " " . $upline->lastname ?></div>
              <div><?= $upline->username ?></div>
              <div style="color: red;">Points: <?= isset($upline->points->points) ? $upline->points->points : 0 ?></div> 
            </a>
          </li>
        </ul>
      </div>
    <?php endif ?>
        
  </div>
</div>
<div class="col-md-10 tree-wrap">
  <div class="tree" style="width: <?= $treeWidth ?>px">
    <ul>
      <li>
        <a href="">
          <div><?= $users[0][0]->firstname ?> <?= $users[0][0]->lastname ?></div>
          <div><?= $users[0][0]->username ?></div>
          <div style="color: red;">Points: <?= isset($users[0][0]->points->points) ? $users[0][0]->points->points : 0 ?></div>
        </a>
        <?php if (isset($users[1])): ?>
          <ul>
            <?php foreach ($users[1] as $user1): ?>
              <li>
                <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user1->user_id]) ?>">
                  <div><?= $user1->firstname ?> <?= $user1->lastname ?></div>
                  <div><?= $user1->username ?></div>
                  <div style="color: red;">Points: <?= isset($user1->points->points) ? $user1->points->points : 0 ?></div>
                </a>
                <?php if (isset($users[2])): ?>
                  <ul>
                    <?php foreach ($users[2] as $user2): ?>
                      <?php if ($user2->direct_upline == $user1->user_id): ?>
                        <li>
                          <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user2->user_id]) ?>">
                            <div><?= $user2->firstname ?> <?= $user2->lastname ?></div>
                            <div><?= $user2->username ?></div>
                            <div style="color: red;">Points: <?= isset($user2->points->points) ? $user2->points->points : 0 ?></div>
                          </a>
                          <?php if (isset($users[3])): ?>
                            <ul>
                              <?php foreach ($users[3] as $user3): ?>
                                <?php if ($user3->direct_upline == $user2->user_id): ?>
                                  <li>
                                      <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user3->user_id]) ?>">
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
<div class="row">
    <div class="col-md-12 well" style="margin-top: 50px;">
      <h3>Sales History <small>(Total Spent: <?= isset($sales->amount) ? $sales->amount : 0 ?> )</small></h3>
      <?php if (isset($sales->salesHistory)): ?>
        <?php foreach ($sales->salesHistory as $eachSale): ?>
          <div>> <strong><i><?= $eachSale->description ?></i> (Php <?= $eachSale->amount ?>) </strong></div>
        <?php endforeach ?>
      <?php else: ?>
        <h4>No Purchases</h4>
      <?php endif ?>        
    </div>
</div>
<?php 

use yii\helpers\Url;
    
?>

<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->

<h3>Genealogy of (<?= $users[0][0]->username ?>) <?= $users[0][0]->firstname ?> <?= $users[0][0]->lastname ?></h3>

<div class="col-md-12">
  <div class="tree">
    <ul>
      <li>
        <a href="">
          <?= $users[0][0]->firstname ?> <?= $users[0][0]->lastname ?> <br>
          <?= $users[0][0]->username ?>
        </a>
        <?php if (isset($users[1])): ?>
          <ul>
            <?php foreach ($users[1] as $user1): ?>
              <li>
                <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user1->user_id]) ?>">
                  <?= $user1->firstname ?> <?= $user1->lastname ?> <br>
                  <?= $user1->username ?>
                </a>
                <?php if (isset($users[2])): ?>
                  <ul>
                    <?php foreach ($users[2] as $user2): ?>
                      <?php if ($user2->direct_upline == $user1->user_id): ?>
                        <li>
                          <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user2->user_id]) ?>">
                            <?= $user2->firstname ?> <?= $user2->lastname ?> <br>
                            <?= $user2->username ?>
                          </a>
                          <?php if (isset($users[3])): ?>
                            <ul>
                              <?php foreach ($users[3] as $user3): ?>
                                <?php if ($user3->direct_upline == $user2->user_id): ?>
                                  <li>
                                      <a href="<?= Url::toRoute(['/userc/tree', 'id' => $user3->user_id]) ?>">
                                        <?= $user3->firstname ?> <?= $user3->lastname ?> <br>
                                        <?= $user3->username ?>
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
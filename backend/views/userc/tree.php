<?php 

    
    $lvlCount1 = count($users[1]);

?>


<div >
    <?= $users[0][0]->username ?>
</div>
<br>

<?php foreach ($users[1] as $user1): ?>
    <?= $user1->username ?>        
<?php endforeach ?>
<br>
<?php foreach ($users[2] as $user2): ?>
    <?= $user2->username ?> | 
<?php endforeach ?>
<br>
<?php foreach ($users[3] as $user3): ?>
    <?= $user3->username ?> | 
<?php endforeach ?>
<?php 

use yii\helpers\Url;

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
    
        <!-- H -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Main Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'home', 'url' => ['/site/index']],
                    ['label' => 'Users', 'icon' => 'user-o', 'url' => ['/userc/index']],
                    ['label' => 'Sales', 'icon' => 'dollar', 'items' => [
                        ['label' => 'By User', 'icon' => 'user-o', 'url' => ['/sales/index'],],
                        ['label' => 'History', 'icon' => 'history', 'url' => ['/sales/history'],],
                    ]],
                    ['label' => 'Points', 'icon' => 'line-chart', 'url' => ['/points/index']],
                    ['label' => 'Redemption', 'icon' => 'mail-reply', 'url' => 'nan'],
                    ['label' => 'History', 'icon' => 'history', 'url' => ['/history/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>

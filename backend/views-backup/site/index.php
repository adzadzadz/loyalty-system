<?php

/* @var $this yii\web\View */

$this->title = "D' Loyalty System Rewards";
?>

<div class="row">
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'list-alt',
                'header' => 'Orders',
                'text' => 'All orders list',
                'number' => '7084',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'pie-chart',
                'header' => 'Conversion',
                'text' => 'Users to orders',
                'number' => '1.5%',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'users',
                'header' => 'Users',
                'text' => 'Count of registered users',
                'number' => '1807',
            ]
        )
        ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?=
        \yiister\gentelella\widgets\StatsTile::widget(
            [
                'icon' => 'comments-o',
                'header' => 'Reviews',
                'text' => 'The next reviews are not approved',
                'number' => '31',
            ]
        )
        ?>
    </div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-3" style="background-color: #fff; padding: 10px;">
		<?=
		\yiister\gentelella\widgets\Timeline::widget(
		    [
		        'items' => [
		            [
		                'title' => 'The first item',
		                'content' => 'This is a content block here. It contains just a text but you can show any content here.',
		            ],
		            [
		                'title' => 'The second item',
		                'byline' => '<span>13 hours ago</span> by <a>John Doe</a>',
		                'content' => 'It is a same block but with a <code>byline</code> string.',
		            ],
		            [
		                'title' => 'The third item without content block',
		                'byline' => '<span>14 hours ago</span> by <a>John Doe</a>',
		            ],
		            [
		                'title' => 'The fourth item. Just a title',
		            ],
		        ]
		    ]
		)
		?>
	</div>
</div>
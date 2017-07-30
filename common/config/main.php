<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'appConfig' => [
            'class' => 'common\components\Config',
            'pointValue' => 500,
            'pointPerLevel' => 2,
            'levelLimit' => 15
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
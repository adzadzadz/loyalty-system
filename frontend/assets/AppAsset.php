<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700',
        // 'css/bootstrap.min.css',
        // 'css/font-awesome.min.css',
        // 'css/magnific-popup.css',
        // 'css/owl.carousel.min.css',
        // 'css/animate.css',
        // 'css/main.css',
        // 'css/style.css',
        // 'css/meanmenu.min.css',
        // 'css/responsive.css',
        'css/dloyalty.css',
    ];
    public $js = [
        // 'js/jquery-2.2.4.min.js',
        // 'js/bootstrap.min.js',
        // 'js/jquery.magnific-popup.min.js',
        // 'js/owl.carousel.min.js',
        // 'js/owl.animate.js',
        // 'js/jquery.scrollUp.min.js',
        // 'js/jquery.counterup.min.js',
        // 'js/modernizr.min.js',
        // 'js/waypoints.min.js',
        // 'js/jquery.meanmenu.min.js',
        // 'js/custom.js',
        // 'upsideDownText.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        // 'yiister\gentelella\assets\Asset'
        'dmstr\web\AdminLteAsset'
    ];
}

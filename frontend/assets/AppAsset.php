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
        'css/stylesheet.css',
        'css/responsive.css',
        'css/bootstrap.min.css',
        'css/fonts/awesome/css/font-awesome.css',
        'css/animate.css',
        'css/slick.css',
        'css/slick-theme.css',
    ];
    public $js = [
        'js/jquery-min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/grayscale.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

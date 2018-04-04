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
	    
		'css/style.css',
        'css/media.css',
		'js/fancybox/jquery.fancybox.css',
		'js/assets/owl.carousel.css',
		'css/font-awesome.css',
		'js/assets/owl.theme.default.css',
		'css/site.css',
    ];
    public $js = [
	'js/fancybox/jquery.fancybox.js',
    'js/owl.carousel.js',
	'js/slider.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

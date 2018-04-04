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
        'css/site.css',
    ];
    public $js = [
	/* 'js/jquery.js',
	'js/fancybox/jquery.fancybox.js',
	'js/owl.carousel.js',
	'js/main.js', 
	'js/bootstrap.js',*/
    ];
/* 	public $jsOptions = [
	    
		'position' => \yii\web\View::EVENT_END_BODY,
	    
	]; */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

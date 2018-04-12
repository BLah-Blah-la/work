<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
		'@advantages' => 'images/Advantages/',
    ],

	'modules' => [
    'user' => [
        'class' => 'dektrium\user\Module',
		'admins' => ['Superadmin', 'Superadmin']
        // you will configure your module inside this file
        // or if need different configuration for frontend and backend you may
        // configure in needed configs
      ],
	  'rbac' => 'dektrium\rbac\RbacWebModule',
	  
	  'partner' => [
            'class' => 'vendor\landing\partner\Module',
        ],
       'noty' => [
            'class' => 'lo\modules\noty\Module',
    ],
	
    ],
	'controllerMap' => [
        'images' => [
            'class' => 'phpnt\cropper\controllers\ImagesController',
        ],
    ],
	'language' => 'Ru-ru',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	'authManager' => [
		'class' => 'dektrium\rbac\components\DbManager',
		],
	'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
	/* 'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ], */	

    ],
];

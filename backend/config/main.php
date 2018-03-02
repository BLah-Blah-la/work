<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
    'user' => [
	   
	   'modelMap' => [
	   'RegistrationForm' => 'backend\models\RegistrationForm'
	   ],
       //'as backend' => 'dektrium\user\filters\BackendFilter',
       ],
    ],
	
	'defaultRoute' => 'clients',
	
    'components' => [
        'request' => [
		    'baseUrl' => '/admin',
            'csrfParam' => '_csrf-backend',
        ],
		'view'=>[
            'theme'=>[
                'pathMap'=>[
                  '@dektrium/user/views' => '@backend/views/user',
                ],
            ],
        ],
       'session' => [
        'name' => 'BACKENDSESSID',
        'cookieParams' => [
            'httpOnly' => true,
            'path'     => '/admin',
          ],
         ],  
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
             'rules' => [
			 'clients/<id:\d+>' => 'clients/view',
            ], 
			
        ],
    ],
    'params' => $params,
];
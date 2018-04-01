<?php

namespace backend\controllers;

use Yii;
use backend\models\Clients;
use backend\models\ClientPhone;
use backend\models\ClientsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\RegistrationForm;
use frontend\models\SomeAccessories;
use yii\filters\AccessControl;
use dektrium\user\filters\AccessRule;
use backend\models\landing\Advantages;
use yii\helpers\ArrayHelper;
use backend\models\lopez;
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\get;
use backend\traits\EventTrait;


class PanelController extends Controller
{
    /**
     * @inheritdoc
     */
/* 	public $layout = 'main'; */
	
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['switch'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['Superadmin'],
                    ],
                ],
            ],
        ];
    }
	
	public function actionIndex(){
		

		
        return $this->render('index',['items'=>$items]); 
		
	}
	
	}









?>
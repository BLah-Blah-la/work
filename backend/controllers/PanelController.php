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

class PanelController extends Controller
{
    /**
     * @inheritdoc
     */
	
	
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
		
		return $this->redirect('/admin/user/1');
		
		
	}
	
	public function actionTest(){
		
		return $this->render('edit');
		
	}
	public function actionTet(){
		
		return $this->render('mo');
		
	}
	
	public function actionAjax(){
		
/* 		Yii::$app->session->setFlash('error',   'noty error');
		Yii::$app->session->setFlash('info',    'noty info');
		Yii::$app->session->setFlash('success', 'noty success');
		Yii::$app->session->setFlash('warning', 'noty warning'); */
		return $this->render('notication');
	
 }
	
}
?>
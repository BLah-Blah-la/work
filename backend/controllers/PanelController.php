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
		
		$model = new lopez();
		$categories = Advantages::find()->select(['id', 'description'])->all(); 
        $data = ArrayHelper::map($categories, 'id', 'description');
		
		return $this->render('img', ['model' => $model, 'data' => $data]);   
		
	}
	
}
?>
<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

use frontend\models\RegistrationForm;
use frontend\models\RestForm;
use frontend\models\SomeAccessories;
use frontend\models\Clients;
/**
 * Site controller
 */
class RegistrationController extends Controller
{
	/**
     * @inheritdoc
     */
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['add-phone', 'regist'],
                'rules' => [
                    [
                        'actions' => ['add-phone'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

					[
                        'actions' => ['regist'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionRegist(){

	   $registration = Yii::createObject(RegistrationForm::className());
	   $some = \Yii::createObject(SomeAccessories::className());

	   if($some->postExist('RegistrationForm')){

		   $registration->attributes = $some->postExist('RegistrationForm');

		   if($registration->validate() && $registration->registration() && $registration->addPhone($registration->phone_digital)){

				   $this->goHome();
			 }
		   }

		return $this->render('registration', ['registration' => $registration]);
	}


	public function actionAddPhone(){

		$add = Yii::createObject(RestForm::className());

	    $some = Yii::createObject(SomeAccessories::className());

		if($some->postExist('RestForm')){


			$add->attributes = $some->postExist('RestForm');


			if($add->validate() && $add->updatePhone(Yii::$app->user->getId())){


				$this->goHome();
		   }

	}
	return $this->render('add', ['add' => $add]);

	}
	public function actionSuper(){

		/* $str = '+7992 4205 1 43';
		$ro = Yii::createObject(SomeAccessories::className());
		$id = $ro->NumberUser($str); */
     
        $model = Yii::createObject(Clients::className());
        
		return $this->render('super', ['model' => $model]);
	}

    public function actionMerge(){
		
		$array = ['1', '3', '10', '12'];
		$massiv = [1, 3, 31, 21, 78];
		$super_massiv = ArrayHelper::isIndexed($array);
		echo var_dump($super_massiv);
		
		$super_massiv = ArrayHelper::isAssociative($massiv);
	
		echo var_dump($super_massiv);

	    //$echo = ArrayHelper::multisort($array, DESC);
		
		
		
		/*for($i = 0; $i<=count($super_massiv); $i++){
			
			echo $super_massiv[$i] . "<br/>";
			
		}
		var_dump($super_massiv); */
		/* print_r($super_massiv); */
		
    }
    

}
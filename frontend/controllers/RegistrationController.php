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
use frontend\models\Advantages;
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
        
		$model = new Advantages();
		
		$images = $model->getImages();
        foreach($images as $img) {
        //retun url to full image
        echo $img->getUrl();

        //return url to proportionally resized image by width
        echo $img->getUrl('300x');

        //return url to proportionally resized image by height
        echo $img->getUrl('x300');

        //return url to resized and cropped (center) image by width and height
        echo $img->getUrl('200x300');
    
        //return description image
       $img->description;
}
		
		return $this->render('super', ['model' => $model]);
	}

    public function actionMerge(){
		
		$array = ['1', '3', '10', '12'];
		$massiv = [1, 3, 31, 21, 78];
		$super_massiv = ArrayHelper::isIndexed($array);
		echo $super_massiv;
		
/* 		for($i = 0; $i<=count($super_massiv); $i++){
			
			echo $super_massiv[$i] . "<br/>";
			
		}
		var_dump($super_massiv); */
		/* print_r($super_massiv); */
		
    }
	
	public function actionImages(){
		
		$model = Advantages::findOne(1);
		
		$model->attachImage('../../image.png');
		
		
		
	}
    

}
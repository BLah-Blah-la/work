<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Model;
use yii\helpers\Html;
use frontend\models\Customers;
use frontend\models\Customers1;
/**
 * Site controller
 */
class SiteController extends Controller
{
	/**
     * @inheritdoc
     */     
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'login'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    
					[
                        'actions' => ['login'],
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
    public function actionIndex(){
		
        $model = Yii::createObject(Model::className());
		$cus = new Customers();
		
		$cus1 = new Customers1();

		$menager = $model->all();
		if (Html::encode($cus->load(Yii::$app->request->post())) && $cus->save() || Html::encode($cus1->load(Yii::$app->request->post())) && $cus1->save() ) {
			
            return $this->redirect('/');  
        }
		return $this->render('index', ['cus' => $cus, 'cus1' => $cus1, 'menager' => $menager]); 
		
	}
	public function actionLogin(){
		
        if (!\Yii::$app->user->isGuest) {
            $this->goHome();
        }
		
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', ['model' => $model]);
    }
    public function actionSome(){
		$model = new Review();
		return $this->render('some', ['model'=>$model]);
	}
	public function actionLogout()
    {

        Yii::$app->user->logout();

        return $this->goHome();
    }

}
<?php

namespace backend\module\controllers;

use yii\web\Controller;
use Yii;
use backend\module\models\Mis;
/**
 * Default controller for the `backend` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

		
		/* $id = Mis::findOne(12); */
		
		return $this->render('index', ['ss' => $ss, 'id' => $id]);
		}
	}

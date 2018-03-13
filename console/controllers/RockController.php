<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RockController extends Controller
{
	public function actionInit(){
		
	$auth = \Yii::$app->authManager;	
		
	$auth->removeAll();	
		
	$admin = $auth->createRole('Superadmin');	

    
    $auth->add($admin);
    
	$viewAdminPage = $auth->createPermission('viewAdminPage');
	$viewAdminPage->description = 'Просмотр админки';
	
	$auth->add($viewAdminPage);
	
	$auth->assign($admin, 1);
	

	
	
	}	
}
?>
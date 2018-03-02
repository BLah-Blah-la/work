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
	$editor = $auth->createRole('editor');
    
    $auth->add($admin);
    $auth->add($editor);
    
	$viewAdminPage = $auth->createPermission('viewAdminPage');
	$viewAdminPage->description = 'Просмотр админки';
	
	$updateNews = $auth->createPermission('updateNews');
	$updateNews->description = 'Редакитрование новости';
	
	$auth->add($viewAdminPage);
	$auth->add($updateNews);
	
	$auth->addChild($editor, $updateNews);
	
	$auth->addChild($admin, $editor);
	
	$auth->assign($admin, 1);
	
	$auth->assign($editor, 2);
	
	
	}	
}
?>
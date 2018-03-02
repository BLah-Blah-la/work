<?php
namespace frontend\models;

use yii\base\Model;

class SomeAccessories extends Model
{

	public $_rand;
	
	public function generate()
	{
		return $this->_rand = mt_rand(111111111,999999999);
		
	}
	
	public function postExist($post){
		
		return \Yii::$app->request->post($post);
		
	}
	
	public function getExist($get){
		
		return \Yii::$app->request->get($get);
	}
	
	public function renderId(){
		
		return $id = \Yii::$app->session['id'] = self::generate();
	}

	public function NumberUser($number){
			
		$filter = preg_replace('#[^\d]#', '', $number);
		$strlen = strlen($filter);
		
		$seven = pow(10, $strlen - 1) * 7;
		
		$result = $filter - $seven;

		return $result;

		}
		
	}
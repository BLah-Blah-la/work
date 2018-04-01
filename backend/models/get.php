<?php
namespace backend\models;

use yii\base\Model;


class get extends Model{
	
	const EVENT_INDEX = 'index';
	
	public function get_hello(){
		
		return 'Hello';
	}
	
}

?>
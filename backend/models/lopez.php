<?php
namespace backend\models;

use yii\base\Model;

class lopez extends Model{
	
	public $lop;
	
	public function rules(){
		
	return [
	
	[['lop'], 'string', 'max' => 50],

	];
			
	}
}
?>
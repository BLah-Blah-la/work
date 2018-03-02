<?php
namespace backend\models;

use dektrium\user\models\RegistrationForm as BaseModel;

class RegistrationForm extends BaseModel
{
	public function rules(){
		
		$rules = parent::rules();
		$rules['usernameLength'] = ['username', 'string', 'min' => 3, 'max' => 555];
		return $rules;
		
	}
	
	
	
	
	
	
}


?>
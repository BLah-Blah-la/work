<?php 

namespace frontend\models;

use Yii;
use frontend\models\Clients;
use yii\db\ActiveRecord;
use dektrium\user\models\User;
use frontend\models\SomeAccessories;
use frontend\models\ClinetPhone;
use yii\base\Model;

class RestForm extends Model 
{
	public $phone_digital;

public function rules()
    {
    return [
	[['phone_digital'], 'required'],
	
	[['phone_digital'], 'string'],

];
	}
	
	public function updatePhone($id){
		
		$some = Yii::createObject(SomeAccessories::className());
		$addPhone = ClinetPhone::find()
		->where(['id' => $id])
		->all();
		
		foreach($addPhone as $phone){
			
			$phone->phone_digital = $some->NumberUser($this->phone_digital);
			$phone->update(false);
			
		}
}
}

?>
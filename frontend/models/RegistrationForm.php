<?php
namespace frontend\models;

use Yii;
use frontend\models\Clients;
use yii\db\ActiveRecord;
use dektrium\user\models\User;
use frontend\models\SomeAccessories;
use frontend\models\ClinetPhone;
use yii\base\Model;

class RegistrationForm extends Model 
{

    public $first_name;
    public $last_name;
    public $age;
	public $phone_digital;
	
	public function rules()
    {
        return [
		
	    [['first_name', 'last_name'], 'string', 'min'=> 3, 'max' => 50],
		
		[['first_name','last_name'], 'trim'],
		
		[['first_name', 'last_name'], 'required'],
		
		[
		[
	    'first_name',
		'last_name'],
		'unique',
		'targetClass' => Clients::className(),
		'message' => \Yii::t('app', 'OMG'),
		],
		
        [['age'], 'integer'],
 		[['phone_digital'], 'string'],
		
		];
    }

	public function registration(){
		
	   $registration = Yii::createObject(Clients::className());
	   $registration->first_name = $this->first_name;
	   $registration->last_name = $this->last_name;
       $registration->age = $this->age;
	   
	   return $registration->save();
	}
	
	public function maximum(){
		
		$clients = Yii::createObject(Clients::className());
        $hone = $clients->find()
		->select('max(id)')
		->scalar();
		
		$id = Clients::findOne($hone);
		
		return $id;
	}
	
    public function addPhone($number = NULL){
		
		$addPhone = Yii::createObject(ClinetPhone::className());
	    $hone = self::maximum();
		$addPhone->phone_digital = $number;
		$addPhone->link('client', $hone);

	}
	
}
?>
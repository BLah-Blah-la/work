<?php

namespace ...\Notifications; 
use Yii;
use yii\db\ActiveRecord;

class Notifications extends ActiveRecord
{
	const NEW_USER = 'new user';
	
	public static function tableName()
    {
        return 'notifications';
    }
    
	public static function getDb()
    {
		return Yii::$app->get('db2');
	}
	
	public function rules()
	{
		return[
		    [['id_item'], 'integer'],
			[['title', 'body'], 'string']
		];
		
	}
	
	public function maximum(){
		
		$customers = Yii::createObject(Customers::className());
        $get = $customers->find()
		->select('max(id)')
		->scalar();
		
		$id = Clients::findOne($get);
		return $id;
	}
	
	public function addCustomers($id)
	{		
		$this->tableName();
		
	}
	public function newCustomer($id){
		
		$this->addCustomer($id);
		return true;
	}
	public function addPhone($number = NULL){
		
		$addPhone = Yii::createObject(ClinetPhone::className());
	    $hone = self::maximum();
		$addPhone->phone_digital = $number;
		$addPhone->link('client', $hone);

	}
	}
?>
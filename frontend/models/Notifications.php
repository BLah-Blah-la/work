<?php

namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;
use frontend\models\Customers;
use frontend\models\Callback;
use frontend\models\Notifications;
use yii\behaviors\TimestampBehavior;

class Notifications extends ActiveRecord
{
	const NEW_USER = 'new user';
	public function behaviors(){
		return [
		TimestampBehavior::className(),
		];
		}
	public static function tableName()
    {
        return 'notification_customers';
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
		
		$id = Customers::findOne($get);
		return $id;
	}
	
	public function maximumCallback(){
		
		$customers = Yii::createObject(Callback::className());
        $get = $customers->find()
		->select('max(id)')
		->scalar();
		
		$id = Callback::findOne($get);
		return $id;
	}
	
	public function issetNotification(){
		
		$this->addCustomer($id);
		return true;
	}
	
	public function beforeSave($insert){
		
		if(parent::beforeSave($insert)){
			
		    $get = $this->maximum();
			
		    $this->id_item = $get->id;
			
			return true;
		} else {
			
			return false;
		}
	}
	
	
	
	
	}
?>
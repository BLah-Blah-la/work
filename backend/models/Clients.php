<?php

namespace backend\models;

use Yii;
use backend\models\ClientPhone;
use backend\models\Clients;
use frontend\models\RegistrationForm;
/**
 * This is the model class for table "client_client".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $age
 *
 * @property ClientPhone[] $clientPhones
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	 
	public function attributes()
    {
		// делаем поле зависимости доступным для поиска
		return array_merge(parent::attributes(), ['phones.phone_digital']);
    }
	
    public static function tableName()
    {
        return 'client_client';
    }
    
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
		
		];
    }
	
	
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'age' => 'Age',
			
        ];
    }
    public function getPhones()
    {
        return $this->hasOne(ClientPhone::className(), ['client_id' => 'id']);
    }
	
	public function getNumber(){
		
		return $this->phones->phone_digital;
		
	}
	
	public function beforeDelete(){
    
	if (!parent::beforeDelete()) {
        return false;
    }
    $get = Yii::$app->request->get('id');
	
	$delite = ClientPhone::findOne($get);
	
	$delite->delete();

    return true;
}
    public function getCount(){
		
		return count($this->phones->id);
	
	}
}

<?php

namespace backend\models;

use Yii;
use backend\models\Clients;
use frontend\models\SomeAccessories;

/**
 * This is the model class for table "client_phone".
 *
 * @property int $id
 * @property int $client_id
 * @property string $phone_digital
 *
 * @property ClientClient $client
 */
class ClientPhone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
	 
     */
    public function rules()
    {
    return [
	[['id'], 'integer'],
	[['client_id'], 'safe'],
	[['phone_digital'], 'required'],
	
	[['phone_digital'], 'string'],

];
	}
	
	public static function tableName()
    {
        return 'client_phone';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'phone_digital' => 'Phone Digital',
        ];
    }
    public function maximuId(){
		
		$clients = Yii::createObject(Clients::className());
        $hone = $clients->find()
		->select('max(id)')
		->scalar();
		
		$id = Clients::findOne($hone);
		
		return $id;
	}
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
	
 	public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
	    $some = Yii::createObject(SomeAccessories::className());
		$a = $this->maximuId()->id;
		
		$this->phone_digital = $some->NumberUser($this->phone_digital);
		$this->client_id = $a;
		
            return true;
        } else {
            return false;
        }
    }

	public function getClientName(){
		
		$last_name = $this->client;
		
		return $last_name ? $last_name->last_name : '';
		
	}
	
	
}

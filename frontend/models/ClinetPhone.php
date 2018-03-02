<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "clinet_phone".
 *
 * @property int $id
 * @property int $client_id
 * @property string $phone_digital
 *
 * @property ClientClient $client
 */
class ClinetPhone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_phone';
    }

    /**
     * @inheritdoc
     */
/*     public function rules()
    {
        return [
            [['id', 'client_id', 'phone_digital'], 'required'],
            [['id', 'client_id'], 'integer'],
            [['phone_digital'], 'string', 'max' => 10],
            [['id'], 'unique'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    } */

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'phone_digital' => 'Phone Digital',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
	
	public function getClientName(){
		
		$last_name = $this->client;
		
		return $last_name ? $last_name->last_name : '';
		
		
	}
}

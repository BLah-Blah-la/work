<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use frontend\models\Customers;
/**
 * This is the model class for table "callback".
 *
 * @property int $id
 * @property string $name
 * @property string $phone_digital
 * @property string $email
 * @property int $created_at
 * @property int $updated_at
 * @property string $status
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callback';
    }
    public function behaviors()
	{
		return [
		TimestampBehavior::className(),
	];
	}
		
    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'status'], 'string', 'max' => 255],
            [['phone_digital'], 'string'],
			[['phone_digital', 'email'], 'required' , 'message' => 'Поле должно быть заполнено'],
			[['phone_digital'], 'unique', 'targetAttribute' => ['phone_digital'],  'message' => 'Вы уже оставили заявку'],
			[['email'], 'email', 'message' => 'Не правильно введен адрес почты'],
			[['email'], 'unique', 'targetAttribute' => ['email'], 'message' => 'Вы уже оставили заявку'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone_digital' => 'Телефон',
            'email' => 'Адрес почты',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Статус',
        ];
    }
	
}

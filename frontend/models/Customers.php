<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;
use vendor\landing\partner\models\PriceList;
use yii\behaviors\TimestampBehavior;
use frontend\models\Notifications; 
/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property int $price_name
 * @property string $name
 * @property string $email
 * @property string $phone_digital
 * @property int $declared_in
 * @property string $name_company
 * @property string $status
 * @property string $avatar
 *
 * @property PriceList $priceName
 * @property Portfolio[] $portfolios
 * @property Reviews[] $reviews
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public $ava;
	
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['price_name', 'created_at', 'updated_at'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 255],
            [['phone_digital'], 'string'],
			[['phone_digital'], 'required', 'message' => 'Поле должно быть заполнено'],
			[['phone_digital'], 'unique', 'targetAttribute' => ['phone_digital'], 'message' => 'Вы уже оставили заявку'],
            [['price_name'], 'exist', 'skipOnError' => true, 'targetClass' => PriceList::className(), 'targetAttribute' => ['price_name' => 'id']],

        ];
    }

    /**
     * @inheritdoc
     */
	public function behaviors(){
		return [
		TimestampBehavior::className(),
		];
		}
		
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_name' => 'Price Name',
            'name' => 'Name',
            'email' => 'Email',
            'phone_digital' => 'Phone Digital',
            'declared_in' => 'Declared In',
            'name_company' => 'Name Company',
            'status' => 'Status',
            'avatar' => 'Avatar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasOne(Notifications::className(), ['id_item' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
	public function priceList(){
		
		$price_list = 
		PriceList::find()
		->select(['id', 'name'])
		->all();
		
		$data = ArrayHelper::map($price_list, 'id', 'name');
		
		return $data;
		
	}
	
	/* public function beforeSave($insert){
		if(parent::beforeSave($insert)){
			
			$this->declared_in = time();
			
			return true;
			
		} else {
			
			return false;
		}
	} */
	public function upload($path)
	{
		$this->avatar = $path;
		return true;
		
		}
	
	
}

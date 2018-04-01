<?php

namespace backend\models\landing;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\landing\PriceList;
/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $price_name
 * @property string $name
 * @property string $phone_digital
 *
 * @property PriceList $priceName
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_name'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['phone_digital'], 'string', 'max' => 10],
            [['price_name'], 'exist', 'skipOnError' => true, 'targetClass' => PriceList::className(), 'targetAttribute' => ['price_name' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_name' => 'Price Name',
            'name' => 'Name',
            'phone_digital' => 'Phone Digital',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrice()
    {
        return $this->hasOne(PriceList::className(), ['id' => 'price_name']);
    }
	
	public function priceList(){
		
		$price_list = 
		PriceList::find()
		->select(['id', 'name'])
		->all();
		
		$data = ArrayHelper::map($price_list, 'id', 'name');
		
		return $data;
		
	}
	
	public function asd(){
		
		$post = Yii::$app->request->post('Orders');
		$id = (int)$post['price_name'];
		return $id;
	}
	
	public function beforeSave($insert){
		
		if(parent::beforeSave($insert)){
			
			$this->price_name = $this->asd();
			
			return true;
		} else {
			
			return false;
			
		}
		
		
	}
	
	
	
}

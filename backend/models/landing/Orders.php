<?php

namespace backend\models\landing;

use Yii;

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
    public function getPriceName()
    {
        return $this->hasOne(PriceList::className(), ['id' => 'price_name']);
    }
}

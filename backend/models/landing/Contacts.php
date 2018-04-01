<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $image_item
 * @property string $dynamic_string
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_item', 'dynamic_string'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_item' => 'Image Item',
            'dynamic_string' => 'Dynamic String',
        ];
    }
}

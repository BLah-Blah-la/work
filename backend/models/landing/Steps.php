<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "steps".
 *
 * @property int $id
 * @property string $title_item
 * @property string $description
 * @property string $image
 */
class Steps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'steps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title_item'], 'string', 'max' => 30],
            [['image'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_item' => 'Title Item',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}

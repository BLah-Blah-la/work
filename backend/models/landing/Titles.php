<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "titles".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $section
 */
class Titles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'titles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string'],
            [['section'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'section' => 'Section',
        ];
    }
}

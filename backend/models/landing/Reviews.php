<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $status
 * @property string $text
 * @property string $avatar
 * @property string $image_result
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'text'], 'string'],
            [['name', 'surname'], 'string', 'max' => 30],
            [['avatar', 'image_result'], 'string', 'max' => 50],
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
            'surname' => 'Surname',
            'status' => 'Status',
            'text' => 'Text',
            'avatar' => 'Avatar',
            'image_result' => 'Image Result',
        ];
    }
}

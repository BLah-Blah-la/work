<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "advantages".
 *
 * @property int $id
 * @property string $logo
 * @property string $description
 */
class Advantages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advantages';
    }

    /**
     * @inheritdocS
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['logo'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'description' => 'Description',
        ];
    }
}

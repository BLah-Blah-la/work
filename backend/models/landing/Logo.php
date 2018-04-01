<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "logo".
 *
 * @property int $id
 * @property string $logo_image
 * @property string $description
 */
class Logo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['logo_image'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo_image' => 'Logo Image',
            'description' => 'Description',
        ];
    }
}

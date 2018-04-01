<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $name_company
 * @property string $image_result
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_company'], 'string', 'max' => 30],
            [['image_result'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_company' => 'Name Company',
            'image_result' => 'Image Result',
        ];
    }
}

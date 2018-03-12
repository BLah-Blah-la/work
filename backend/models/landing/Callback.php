<?php

namespace backend\models\landing;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property int $id
 * @property string $title_section
 * @property string $name
 * @property string $phone_digital
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_section'], 'string'],
            [['name'], 'string', 'max' => 30],
            [['phone_digital'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_section' => 'Title Section',
            'name' => 'Name',
            'phone_digital' => 'Phone Digital',
        ];
    }
}

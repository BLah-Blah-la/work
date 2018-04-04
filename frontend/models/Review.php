<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $text
 * @property string $date
 * @property string $active
 * @property int $item_id
 * @property string $pluses
 * @property string $minuses
 * @property int $vote
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
	public static function getDb()
    {
        return Yii::$app->get('db2');
    }
    public static function tableName()
    {
        return 'review';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'item_id', 'vote'], 'integer'],
            [['text', 'item_id', 'pluses', 'minuses'], 'required'],
            [['text', 'active', 'pluses', 'minuses'], 'string'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'text' => 'Text',
            'date' => 'Date',
            'active' => 'Active',
            'item_id' => 'Item ID',
            'pluses' => 'Pluses',
            'minuses' => 'Minuses',
            'vote' => 'Vote',
        ];
    }
}

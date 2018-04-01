<?php

namespace backend\module\models;

use Yii;

/**
 * This is the model class for table "mis".
 *
 * @property int $id
 * @property string $varior
 */
class Mis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['varior'], 'string', 'max' => 40],
        ];
    }
    public $dbConnection = 'db2'; 

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'varior' => 'Varior',
        ];
    }
	
	public function getaDb(){
		
		$getDb = parent::getDb();
		
		return \Yii::$app->get($this->dbConnection);

		
	}
}
<?php

namespace frontend\models;

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
        return 'image';
    }
    
	 function behaviors()
    {
        return [
            'images' => [
                'class' => 'pistol88\gallery\behaviors\AttachImages',
                'mode' => 'gallery',
                'quality' => 60,
                'galleryId' => 'picture'
            ],
        ];
    }
    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['logo'], 'string', 'max' => 255],
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
	
	public function upload($path)
    {
		$this->logo = $path;
		return true;
		}
}

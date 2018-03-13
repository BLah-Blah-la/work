<?php

namespace backend\models\landing;

use Yii;
use yii\web\UploadedFile;
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
        public $logs;

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
			[['logs'], 'file', 'extensions' => 'png, jpg'],
            [['logo'], 'string', 'max' => 60],
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

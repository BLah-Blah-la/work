<?php

namespace backend\module;

/**
 * backend module definition class
 */
class module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'backend\module\controllers';
    
	public $dbConnection = 'db2'; 
	
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
	public $urlPrefix = 'go';
	
	public function getDb()
    {
        return \Yii::$app->get($this->dbConnection);
    }
}

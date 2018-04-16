<?php
namespace common\models;

use Yii;
use webzop\notifications\Notification;

class AccountNotification extends Notification
{
    const KEY_NEW_ACCOUNT = 'new_account';
    const KEY_RESET_PASSWORD = 'reset_password';
    /**
     * @var \yii\web\User the user object
     */
    public $user;
	public $string;
    /**
     * @inheritdoc
     */
	public function stringUs(){
		
		if($this->user->email !== NULL)
		{
			
			$this->string = Yii::t('modules/notifications', 'New callback created');
			
		} else {
			
			$this->string = Yii::t('modules/notifications', 'New customer created');
		}
	return $this->string;
	}
	
    public function getTitle(){
		
        switch($this->key){
            case self::KEY_NEW_ACCOUNT:
                return Yii::t('app', '{user} <br/> {string}', ['user' => $this->user->name, 'string' => $this->stringUs()]);
            case self::KEY_RESET_PASSWORD:
                return Yii::t('app', 'Instructions to reset the password');
        }
    }

    /**
     * @inheritdoc
     */

	public function shouldSend($channel)
    {
    if($channel->id == 'screen'){
        if(!in_array($this->key, [self::KEY_NEW_ACCOUNT])){
            return false;
        }
    }
    return true;
    }
	
    public function getRoute(){
        return ['partner/customers/view', 'id' => $this->user->id];
    }
	
	public function getRoute2(){
        return ['partner/callback/view', 'id' => $this->user->id];
    }
}
?>
<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use vendor\landing\partner\models\Customers;
use vendor\landing\partner\models\Callback;

class figaro extends Model
{
	
	public function showCustomers(){
		
		$customers = Customers::find()->all();
		foreach($customers as $var):
		
		echo $var['name'];
		
		endforeach;
	}
	
	public function showCallback()
	{
		$customers = Callback::find()->all();
		foreach($customers as $var):
		
		echo $var['name'];
		
		endforeach;	
	}
	
	public function showTime()
	{
		$callback = Customers::find()->all();
		foreach($callback as $var):
		
		$str = Yii::$app->formatter->asDate($var['created_at'], 'long')  . "<br/>";
		$is = explode(" ", $str);
		echo $is[1] . " ";
		
		endforeach;	
	}	
}
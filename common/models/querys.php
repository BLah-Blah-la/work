<?php
namespace common\models;
use backend\models\landing\Advantages;
use yii\base\Model;
use yii\helpers\Html;
use yii\helpers\Url;

class querys extends Model{

public function advantagesLogo(){
	
	$query = Advantages::find()
	->select(['logo'])
	->all();
	
	foreach($query as $var):
		
		echo $var->logo;
		
	endforeach;
}

public function routeImg(){
	
	
	return Html::img(Url::toRoute($this->advantagesLogo()));
	
}
}
?>
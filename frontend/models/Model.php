<?php
namespace frontend\models;

use Yii;
use vendor\landing\partner\find\Finder;
use yii\base\Model as BaseModel;

class Model extends BaseModel
{
	public $tables = [];
	
	public function all(){
	
	    $model = Yii::createObject(Finder::className());
		
		$logo = $model->findLogo();
		
		$advantages = $model->findAdvantages();
		
		$contacts = $model->findContacts();
		
		$steps = $model->findSteps();
		
		$PriceList = $model->findPriceList();
		
		$Portfolio = $model->findPortfolio();
		
		$reviews = $model->findReviews();
		
		return $this->tables = ['logo' => $logo, 'advantages' => $advantages, 
		                        'contacts' => $contacts, 'steps' => $steps, 
								'PriceList' => $PriceList, 'Portfolio' => $Portfolio,
								'reviews' => $reviews];
	
	}
}
?>
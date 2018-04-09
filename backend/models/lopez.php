<?php
namespace frontend\models;

use yii\base\Model;

class lopez extends Model{
	
	public function chunk_split_unicode($str, $len = 76, $end = "\n"){
		
    $pattern = '~.{1,' . $len . '}~u'; // like "~.{1,76}~u"
    $str = preg_replace($pattern, '$0' . $end, $str);
    return rtrim($str, $end);
		
	}
}
?>
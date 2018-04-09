<?php
namespace frontend\models;

use yii\base\Model;

class lopez extends Model{
	
	public function chunk_split_unicode($str, $l = 76, $e = "\r\n"){
		
		$tmp = array_chunk(
			preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
			$str = "";
			foreach ($tmp as $t) {
				$str .= join("", $t) . $e;
				}
				return $str;
		
	}
}
?>
<?php
use yii\bootstrap\Nav;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\querys;
use timurmelnikov\widgets\LoadingOverlayPjax;
?>

<?php

Modal::begin([
'header' => '<h2>Hello world</h2>',
'options' => ['id'=>'exampleModal'],

'footer' => 'Низ окна',

]);
echo 'Say hello...';

echo Carousel::widget([
 'items' => $items,
 'options' => ['class' => 'carousel slide', 'data-interval' => ''],
 'controls' => [
 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
 ]
]);


Modal::end();

?>
		


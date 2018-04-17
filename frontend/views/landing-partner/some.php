<?php
use dvizh\review\widgets\ReviewList;
use dvizh\review\widgets\ReviewForm;
?>

Выведет список отзывов о переданном продукте:
<?=ReviewList::widget(['itemId' => $model->id]);?>

Выведет форму добавления отзыва о продукте:
<?=ReviewForm::widget(['model' => $model]);?>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\landing\Orders;
/* @var $this yii\web\View */
/* @var $model backend\models\landing\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'price_name')->dropDownList(Orders::priceList())?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_digital')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

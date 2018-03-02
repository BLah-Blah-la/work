<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\MaskedInput;

?>
 
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
<?php $form = ActiveForm::begin(); ?>	

      <h3>Привязать телефон</h3>
   
	    <?= $form->field($add, 'phone_digital')->widget(\yii\widgets\MaskedInput::className(), [
       'mask' => '+7(999) 999 99 99',
        ])->label(false) ?>
        <?= Html::submitButton('Add', ['class' => 'btn btn-primary']) ?>

		<?php ActiveForm::end(); ?>
</div>
		

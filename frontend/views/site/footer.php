<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use frontend\models\Customers;
use yii\widgets\Pjax;
?>
<!-- Модальное окно -->

<?php
\yii\bootstrap\Modal::begin([

        ]);?>
<?php Modal::end();?>


<div class="modal fade" id="modal" role="dialog" tabindex="-1" href = "#">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Оставить заявку</h4>
            </div>
			
            <div class="modal-body">
                <?php $form = ActiveForm::begin(['options'=>['class' => 'text-center', 'data-pjax' => true, 'enctype' => 'multipart/form-data']]); ?>
                    <div class="form-group">
                    
					
					<?= $form->field($customers, 'price_name')->dropDownList(Customers::priceList(), 
					[
					'prompt' => 'Укажите тариф',
	                //'options' => ['1' => ['Selected' => true]]
                    ])->label(false) ?>
                    </div>
					
                    <div class="form-group">
                    <?= $form->field($customers, 'name')->textInput(['maxlength' => true])->label(false)  ?>
                    </div>
                    <div class="form-group">
                    <?= $form->field($customers, 'phone_digital')->widget(\yii\widgets\MaskedInput::className(), [
			'mask' => '+7(999) 999 99 99',
			'clientOptions' => [
			   'removeMaskOnSubmit' => true,
			],
			'options' => ['placeholder'=>'Введите Ваш Телефон', 'class'=> 'form-control'],
        ])->label(false)?>
                    </div>
                      <?= Html::submitButton('Отправить заявку', ['class' => 'bttn']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
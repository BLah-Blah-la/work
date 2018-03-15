<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<?php Pjax::begin(['enablePushState' => false, 'timeout' => 5000]);?>

<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal col-lg-11']]); ?>

<?php    $items = [
        '0' => 'Активный',
        '1' => 'Отключен',
        '2'=>'Удален'
        ];

?>
    <?=$form->field($model, 'lop')->dropDownList($data)->label(false)?>
    <?php $ss =  Yii::$app->request->post('lopez');
	$new = (int)$ss['lop'];
	echo var_Dump($new);
	
	?>

<?php
    
    /* $params = [
        'prompt' => 'Выберите статус...'
    ];
    echo $form->field($model, 'lop')->dropDownList($items,$params); */

	?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	
	<?php Pjax::end();?>
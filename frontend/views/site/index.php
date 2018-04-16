<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use frontend\models\Customers;
?>
        <?php include 'head.php'; ?>
		<?php include 'top-panel.php'; ?>

        <section class="left-line" id="advantages">
            <div class="container">
                <h2><b>Преимущества</b> работы с нами</h2>
                <div class="row">
				<? foreach($menager[advantages] as $var):?>
                    <div class="col-sm-4">
                        <?= Html::img(Url::toRoute('/admin/partner/' . $var->logo, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                        <p><?=$var->description?></p>
                    </div>
					<?endforeach;?>
                </div>
            </div>
        </section>
		
        <section class="right-line" id="portfolio">
            <div class="container">
                <h2 class="text-right">Наше <b>портфолио</b></h2>
                <div class="row">
				    <? foreach($menager[Portfolio] as $var):?>
                    <div class="col-sm-4">
                        <a href="#">
                        <?= Html::img(Url::toRoute('/admin/partner/' . $var->image_site, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                            <span><?=$var->name_company?></span>
                        </a>
                    </div>
					<? endforeach;?>
                </div>
				
                <!--<div class="text-center">
                    <a class="bttn" data-toggle="collapse" href="#portfolioMore"> Показать больше работ</a>
                </div>
                <div id="portfolioMore" class="panel-collapse collapse">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="image/portfolio/2.png" alt="">
                                <span>Name of Company</span>
                            </a>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
	   

        <? Pjax::begin(['enablePushState' => false, 'timeout' => 5000]);?>
		<section class="left-line" id="price-list">
            
			<div class="container">
                <h2><b>Тарифы</b> на создание landing page</h2>
                <div class="row">
				
				    <? foreach($menager[PriceList] as $var):?>
                    <div class="col-sm-6 col-md-4">
                        <div class="box">
                            <div class="box-header">
                                <p><b><?=$var->name?></b></p>
                                <p class="price"><b><?=$var->value?></b> руб.</p>
                                <p class="small"><?=$var->terms?></p>
                                <ul>
                                    <li><?=nl2br($var->description)?></li>
                                </ul>
                                <a href="#" id = "<?=$var->id?>" class="bttn" data-toggle="modal" data-target="#modal" data-idi = "<?=$var->id?>">Заказать тариф</a>
				
                            </div>
                        </div>
                    </div>
					<? endforeach; ?>
				
                </div>
            </div>
        </section>
			<? Pjax::end()?>
        <section class="cant-chuse">
            <div class="container">
                <p class="h1">Не получилось выбрать нужный тариф?</p>
                <p class="h2">Оставьте заявку, и мы свяжемся с Вами в течении 15 минут</p>
				
                <?php $form = ActiveForm::begin(['id' => 'callback']); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                 <?= $form->field($callback, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Ваше имя', 'class' => 'form-control'])->label(false)?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
								<?= $form->field($callback, 'phone_digital')->widget(\yii\widgets\MaskedInput::className(), [
		                            'mask' => '+7(999) 999 99 99',
			                        'clientOptions' => [
			                        'removeMaskOnSubmit' => true,
			                    ],
								'options' => ['placeholder'=>'Введите Ваш Телефон', 'class'=> 'form-control'],
                                ])->label(false)?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
							<?= $form->field($callback, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Введите Ваш e-mail', 'class' => 'form-control'])->label(false)?>
                            </div>
                        </div>
                    </div>
				<?= Html::submitButton('Отправить заявку', ['class' => 'bttn', 'name' => 'callback']) ?>
                <?php ActiveForm::end(); ?>
				
            </div>
        </section>
		
        <section class="left-line" id="reviews">
            <div class="container">
                <h2>Наши <b>отзывы</b></h2>
                <div class="review-slider">
				  <? foreach($menager[reviews] as $var):?>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                        <?= Html::img(Url::toRoute('/admin/partner/' . $var->image, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                            </div>
                            <div class="col-sm-7">
                                <div class="user clearfix">
                        <?= Html::img(Url::toRoute('/admin/partner/' . $var->image, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                                    <p class="upper"><?=$var->name . " " . $var->surname?></p>
                                    <p><em><?=$var->status?></em></p>
                                </div>
                                <p><?=$var->text?></p>
                            </div>
                        </div>
                    </div>
				 <? endforeach;?>
                </div>
            </div>
        </section>

		  <section class="right-line" id="steps">
            <div class="container">
                <h2 class="text-right"><b>Этапы</b> работы</h2>
                <div class="step-slider">
                   <? foreach($menager[steps] as $var):?>
				   <div class="item">
					
                        <div class="row">
						
                            <div class="col-sm-5">
                             <?= Html::img(Url::toRoute('/admin/partner/' . $var->image, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>   
                            </div>
                            <div class="col-sm-7">
							
                                <p><b><?=$var->title_item?></b></p>
                                <p><?=$var->description?></p>
                            </div>
                        </div>
                    </div>
                  <?endforeach;?>
                   
                   
                    
                </div>
            </div>
        </section>
        
        <?php include 'footer.php'; ?>

<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use frontend\models\Customers;
?>
        <?php include 'top-panel.php'; ?>
        
        <section class="left-line" id="advantages">
            <div class="container">
                <h2><b>Преимущества</b> работы с нами</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="image/advantages/1.png" alt="">
                        <p>Ответственность и четкие сроки разработки сайта</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/advantages/2.png" alt="">
                        <p>Мы предлагаем полный комплекс услуг: <br>дизайн, верстка, натяжка готового сайта на CMS</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/advantages/3.png" alt="">
                        <p>Стильный дизайн, удобство навигации, оригинальная подача информации</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/advantages/4.png" alt="">
                        <p>Поэтапная оплата</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/advantages/5.png" alt="">
                        <p>Над проектом работает команда</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="image/advantages/6.png" alt="">
                        <p>Корректное отображение сайта при различных расширениях экрана</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="right-line" id="portfolio">
            <div class="container">
                <h2 class="text-right">Наше <b>портфолио</b></h2>
                <div class="row">

                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/1.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/2.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/3.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/4.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/5.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <img src="image/portfolio/6.png" alt="">
                            <span>Name of Company</span>
                        </a>
                    </div>
                </div>
				
                <div class="text-center">
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
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="image/portfolio/3.png" alt="">
                                <span>Name of Company</span>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="image/portfolio/4.png" alt="">
                                <span>Name of Company</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    <li><?=$var->description?></li>
                                   <?=$var->id?>
                                </ul>
                                <a href="" class="bttn" data-toggle="modal" data-target="#modal" data-idi = "<?=$var->id?>">Заказать тариф "Экономный"</a>
                            </div>
                        </div>
                    </div>
					<? endforeach; ?>
                </div>
            </div>
        </section>

        <section class="cant-chuse">
            <div class="container">
                <p class="h1">Не получилось выбрать нужный тариф?</p>
                <p class="h2">Оставьте заявку, и мы свяжемся с Вами в течении 15 минут</p>
				
                <?php $form = ActiveForm::begin(['id' => 'callback']); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                 <?= $form->field($cus1, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Ваше имя', 'class' => 'form-control'])->label(false)?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
								<?= $form->field($cus1, 'phone_digital')->widget(\yii\widgets\MaskedInput::className(), [
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
							<?= $form->field($cus1, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Введите Ваш e-mail', 'class' => 'form-control'])->label(false)?>
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
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/portfolio/1.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <div class="user clearfix">
                                    <img src="image/ava.png" alt="">
                                    <p class="upper">Евгений Иванов</p>
                                    <p><em>Генеральный директор компании</em></p>
                                </div>
                                <p>Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/portfolio/2.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <div class="user clearfix">
                                    <img src="image/ava.png" alt="">
                                    <p class="upper">Евгений Иванов</p>
                                    <p><em>Генеральный директор компании</em></p>
                                </div>
                                <p>Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. Тут будет отзыв. </p>
                            </div>
                        </div>
                    </div>
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

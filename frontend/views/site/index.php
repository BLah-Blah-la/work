<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>

<?php include 'head.php'; ?>
<?php include 'top-panel.php'; ?>

<section class="left-line" id="advantages">
            <div class="container">
                <h2><b>Преимущества</b> работы с нами</h2>
                <div class="row">
                   
					<? foreach($advantages as $var):?>
					    <div class="col-sm-4">
                         <?= Html::img(Url::toRoute('/admin/partner/' . $var->logo, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                        <p><?= $var->description;?></p>
						</div>
						<? endforeach;?>
                    
                </div>
            </div>
        </section>
	<section class="cant-chuse">
            <div class="container">
                <p class="h1">Не получилось выбрать нужный тариф?</p>
                <p class="h2">Оставьте заявку, и мы свяжемся с Вами в течении 15 минут</p>
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Введите Ваше имя">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Введите Ваш телефон">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Введите Ваш e-mail">
                            </div>
                        </div>
                    </div>
                    <button class="bttn" data-toggle="modal" data-target="#modal">Отправить заявку</button>
                </form>
            </div>
        </section>	
	 <section class="right-line" id="contacts">
            <div class="container">
                <h2 class="text-right">Наши <b>контакты</b></h2>
                <div class="row">
				<? foreach($contacts as $var):?>
                    <div class="col-sm-4">
                          <?= Html::img(Url::toRoute('/admin/partner/' . $var->image_item, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                        ])) ?>
                        <p><b><?= $var->dynamic_string;?></b></p>
                    </div>
                <? endforeach;?>
				</div>
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
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/steps/1.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <p><b>Сбор информации о продукте</b></p>
                                <p>Любое действие начинается с процесса понимания этого действия. Собирается доступная текстовая, мультимидийная информация по сайту. Происходит анализ аудитории, на которую должен быть рассчитан сайт. Результатом работы данного этапа должна быть четкая картина структуры сайта, принципы его работы и цели.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/steps/2.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <p><b>Разработка структуры и прототипа макета</b></p>
                                <p>Составление структуры сайта на основе полученной информации и прорисовка каркаса сайта (layout) схема расположения элементов на сайте. По прототипу будет отрисован будущий дизайн.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/steps/3.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <p><b>Разработка дизайна</b></p>
                                <p>Дизайн - один из основных этапов в разработке сайта. Потому что это то - что в первую очередь видит Ваш клиент. Дизайн создается на основе технического задания и прототипа.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/steps/4.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <p><b>Верстка</b></p>
                                <p>На этой стадии происходит создание структуры html-кода, размещающего элементы веб-страницы (изображения, текст и т.д.) в окне браузера согласно разработанному макету, таким образом, чтобы элементы дизайна выглядели аналогично макету.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="image/steps/5.png" alt="">
                            </div>
                            <div class="col-sm-7">
                                <p><b>Утверждение верстки и перенос сайта</b></p>
                                <p>Я отправляю Вам сайт, готовый к работе, который размещен на моем хостинге. Если нужно, делаем правки и после, переносим сайт на Ваш хостинг и домен, который Вы покупаете самостоятельно. При необходимости сайт устанавливается на CMS-систему.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
<?php include 'footer.php';?>

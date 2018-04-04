<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>

<?php include 'top-panel.php'; ?>
<?php $this->title = 'Landing Page для вас'; ?>

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
		  
	   <section class="right-line" id="steps">
            <div class="container">
                <h2 class="text-right"><b>Этапы</b> работы</h2>
                <div class="step-slider">
                    <?foreach($steps as $var):?>
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
		
<?php include 'footer.php';?>

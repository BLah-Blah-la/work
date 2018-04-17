<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Model;
?>
<header>
    <div class="sticky">
        <div class="container">
            <div class="row">
                <? foreach($menager[logo] as $var):?>
                <div class="col-sm-3">
                    <a class="logo" href="/">
                        <?= Html::img(Url::toRoute('/admin/partner/' . $var->logo_image, [
                        'class' => 'img-rounded img-responsive',
                        'alt' => '',
                ])) ?>
                    </a>
                </div>
				<? endforeach;?>
                <div class="col-sm-9">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="collapse navbar-collapse" id="menu">
                        <li><a href="#advantages">Преимущества</a></li>
                        <li><a href="#portfolio">Портфолио</a></li>
                        <li><a href="#price-list">Тарифы</a></li>
                        <li><a href="#steps">Этапы работы</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="big-text">
            <p><span class="upper">Лучшее у нас</span> <span class="small">дизайн, <br> который приносит деньги</span></p>
            <h1><b class="upper">Landing page</b> <br><span class="price">от 12 000 рублей</span></h1>
            <a href="#" class="bttn" data-toggle="modal" data-target="#modal">Заказать сайт <i class="fa fa-caret-right"></i></a>
			
        </div>
    </div>

</header>
	  
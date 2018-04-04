<?php
use yii\bootstrap\Nav;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\querys;
use timurmelnikov\widgets\LoadingOverlayPjax;
?>

<?php include 'head.php'; ?>

<?php include 'top-panel.php'; ?>
<head>
	
    <link rel="icon" type="image/png" href="image/favicon.png">

    <link rel="stylesheet" href="js/assets/owl.carousel.css">
    <link rel="stylesheet" href="js/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

</head>
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

<footer class="container-fluid">
    <ul>
        <li>© 2018 KOPOLOVEC</li>
        <li>+380 (95)-47-02-317</li>
        <li>brukba123@gmail.com</li>
    </ul>
</footer>

<!-- Модальное окно -->



<!-- Скрипты -->

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<script type="text/javascript">
    $('*[data-toggle=tooltip]').tooltip();
    
    $('.step-slider').owlCarousel({
        navSpeed:1500,
        dragEndSpeed:1500,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    });

    $('.review-slider').owlCarousel({
        navSpeed:1500,
        dragEndSpeed:1500,
        nav:true,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    });
</script>

<div class="modal fade" id="modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Оставить заявку</h4>
            </div>
            <div class="modal-body">
                <form class="text-center">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Выберите тариф</option>
                            <option>Не могу определиться</option>
                            <option>Экономный</option>
                            <option>Стандартный</option>
                            <option>Бизнес</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваше Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваш Телефон">
                    </div>
                    <button class="bttn">Отправить заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

/* Modal::begin([
'header' => '<h2>Hello world</h2>',
'options' => ['id'=>'modal'],

'footer' => 'Низ окна',

]);
echo 'Say hello...';

echo Carousel::widget([
 'items' => $items,
 'options' => ['class' => 'carousel slide', 'data-interval' => ''],
 'controls' => [
 '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
 '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
 ]
]);


Modal::end(); */

?>



<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>


<footer class="container-fluid">
    <ul>
        <li>© 2018 KOPOLOVEC</li>
        <li>+380 (95)-47-02-317</li>
        <li>brukba123@gmail.com</li>
    </ul>
</footer>


<!-- Модальное окно -->
<?php
Modal::begin([
'header' => '',
'options' => ['id'=>'123'],
'class' => 'modal fade',])?>
<?php Modal::end();?>

<div class="modal fade" id="modal" role="dialog" tabindex="-1">
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
<!-- Скрипты -->
<script src="js/jquery.js" type="text/javascript"></script>
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
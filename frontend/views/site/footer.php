<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>
<!-- Модальное окно -->
<?php
Modal::begin([
'header' => '',
'options' => ['id'=>'mal'],
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
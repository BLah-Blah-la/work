<?php
use phpnt\cropper\ImageLoadWidget;
?>

<div class="col-md-12">
        <?= ImageLoadWidget::widget([
            'id' => 'load-user-avatar',                                     // суффикс ID
            'object_id' => $user->id,                                       // ID объекта
            'imagesObject' => $user->photos,                                // уже загруженные изображения
            'images_num' => 1,                                              // максимальное количество изображений
            'images_label' => $user->avatar_label,                          // метка для изображения
            'imageSmallWidth' => 750,                                       // ширина миниатюры
            'imageSmallHeight' => 750,                                      // высота миниатюры
            'imagePath' => '/partner/images/Logo',                             // путь, куда будут записыватся изображения относительно алиаса
            'noImage' => 2,                                                 // 1 - no-logo, 2 - no-avatar, 3 - no-img или путь к другой картинке
            'buttonClass'=> 'btm btn-info',                                 // класс кнопки "обновить аватар"/"загрузить аватар" / по умолчанию btm btn-info
            'previewSize'=> 'file',                                         // размер изображения для превью(либо file_small, либо просто file)
            'pluginOptions' => [                                            // настройки плагина
                'aspectRatio' => 1/1,                                       // установите соотношение сторон рамки обрезки. По умолчанию свободное отношение.
                'strict' => false,                                          // true - рамка не может вызодить за холст, false - может
                'guides' => true,                                           // показывать пунктирные линии в рамке
                'center' => true,                                           // показывать центр в рамке изображения изображения
                'autoCrop' => true,                                         // показывать рамку обрезки при загрузке
                'autoCropArea' => 0.5,                                      // площидь рамки на холсте изображения при autoCrop (1 = 100% - 0 - 0%)
                'dragCrop' => true,                                         // создание новой рамки при клики в свободное место хоста (false - нельзя)
                'movable' => true,                                          // перемещать изображение холста (false - нельзя)
                'rotatable' => true,                                        // позволяет вращать изображение
                'scalable' => true,                                         // мастабирование изображения
                'zoomable' => false,
            ]]);
        ?>
    </div>

<div class="col-md-12">
        <?= ImageLoadWidget::widget([
            'id' => 'load-user-photos',                                     // суффикс ID
            'object_id' => $user->id,                                       // ID объекта
            'imagesObject' => $user->photos,                                // уже загруженные изображения
            'images_num' => 3,                                              // максимальное количество изображений
            'images_label' => 'userPhotos',                                 // метка для изображения
            'imageSmallWidth' => 750,                                       // ширина миниатюры
            'imageSmallHeight' => 750,                                      // высота миниатюры
            'imagePath' => '/uploads/avatars/',                             // путь, куда будут записыватся изображения относительно алиаса
            'noImage' => 3,                                                 // 1 - no-logo, 2 - no-avatar или путь к другой картинке
            'pluginOptions' => [                                            // настройки плагина
                'aspectRatio' => 16/9,                                      // установите соотношение сторон рамки обрезки. По умолчанию свободное отношение.
                'strict' => false,                                          // true - рамка не может вызодить за холст, false - может
                'guides' => true,                                           // показывать пунктирные линии в рамке
                'center' => true,                                           // показывать центр в рамке изображения изображения
                'autoCrop' => true,                                         // показывать рамку обрезки при загрузке
                'autoCropArea' => 0.5,                                      // площидь рамки на холсте изображения при autoCrop (1 = 100% - 0 - 0%)
                'dragCrop' => true,                                         // создание новой рамки при клики в свободное место хоста (false - нельзя)
                'movable' => true,                                          // перемещать изображение холста (false - нельзя)
                'rotatable' => true,                                        // позволяет вращать изображение
                'scalable' => true,                                         // мастабирование изображения
                'zoomable' => false,
            ]]);
        ?>
</div>
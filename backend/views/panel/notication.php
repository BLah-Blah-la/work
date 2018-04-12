<?php

use lo\modules\noty\Wrapper;
use yii\widgets\Pjax;
use yii\helpers\Html;
echo Wrapper::widget([
    'layerClass' => 'lo\modules\noty\layers\Noty',
    'layerOptions'=>[
        // for every layer (by default)
        'layerId' => 'noty-layer',
        'customTitleDelimiter' => '|',
        'overrideSystemConfirm' => true,
        'showTitle' => true,

        // for custom layer
        'registerAnimateCss' => true,
        'registerButtonsCss' => true
    ],

    // clientOptions
    'options' => [
        'dismissQueue' => true,
        'layout' => 'topRight',
        'timeout' => 3000,
        'theme' => 'relax',

        // and more for this library...
    ],
]);

    echo  Wrapper::widget([
        'layerClass' => '',
        'layerOptions' => [
            'customTitleDelimiter' => '|', // by default
        ],
    ]);
?>


<?php Pjax::begin(); ?>
<?= Html::a("Обновить", ['panel/ajax'], ['class' => 'btn btn-lg btn-primary']) ?>
<h1>Сейчас: <?= time() ?></h1>
<?php Pjax::end(); ?>

<!--<a href="https://github.com" data-confirm="Are you sure?">Go!</a>
-->
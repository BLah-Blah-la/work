<?php

use yii\widgets\DetailView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use backend\models\Clients;
?>

<?=\pistol88\gallery\widgets\Gallery::widget(
    [
        /* 'model' => $model, */
        'previewSize' => '50x50',
        'fileInputPluginLoading' => true,
        'fileInputPluginOptions' => []
    ]
); ?>
<?php

use yii\widgets\DetailView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use backend\models\Clients;
?>

<?php
$dataProvider = new ActiveDataProvider([
    'query' => Clients::find(),
    'pagination' => [
        'pageSize' => 1,
    ],
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
    'viewParams' => [
        'fullView' => true,
        'context' => 'main-page',
    ],
]);
?>
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<link rel="icon" type="image/png" href="image/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

        <?/* = Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])  */?>
        <?/* = Alert::widget()  */?>
		
        <?= $content ?>
		
<footer class="container-fluid">
    <ul>
        <li>© 2018 KOPOLOVEC</li>
        <li>+380 (95)-47-02-317</li>
        <li>brukba123@gmail.com</li>
    </ul>
</footer>

<?php $this->endBody() ?>
</body>
</html>


<?php $this->endPage() ?>


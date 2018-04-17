<?php
/**
 * @var string $content
 * @var \yii\web\View $this
 */
use yii\widgets\Menu;
use yii\helpers\Html;
use  backend\assets\AppAsset;
use nirvana\showloading\ShowLoadingAsset;
use lo\modules\noty\Wrapper;

/* ShowLoadingAsset::register($this); */

$bundle = yiister\gentelella\assets\Asset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="icon" type="image/png" href="/admin/images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<?php
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
?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><span>Partner</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="//gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=230" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span><?= Yii::t('modules/notifications', 'Welcome') ?></span>
                        <h2><?=Yii::$app->user->identity->username?></h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3><?= Yii::t('modules/notifications', 'General') ?></h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => Yii::t('modules/notifications', 'Home page'), "url" => "/admin", "icon" => "home", 'id' => ''],
                                   /*  ["label" => "Layout", "url" => ["site/layout"], "icon" => "files-o"],
                                    ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"], */
                                    [
                                        "label" => Yii::t('modules/notifications', 'Widgets'),
                                        "icon" => "th",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Panel", "url" => ["panel/Panel"]],
                                            ["label" => "Menu", "url" => ["panel/Menu"]],
                                        ],
                                    ],
                                    [
                                        "label" => Yii::t('modules/notifications', 'Categories'),
                                        "url" => "#",
                                        "icon" => "table",
                                        "items" => [
											
											[
                                                'label' => Yii::t('modules/notifications', 'Logo'),
												'url' => ['/partner/logo'],
                                            ],

											[
                                               'label' => Yii::t('modules/notifications', 'Titles'), 
											   'url' => ['/partner/titles'],
                                            ],
											
											
											[
                                                'label' => Yii::t('modules/notifications', 'Advantages'), 
												'url' => ['/partner/advantages'],
                                            ],
											
											[
                                                'label' => Yii::t('modules/notifications', 'Portfolio'),
	
												'url' => ['/partner/portfolio'],
                                            ],
											
											[
                                                'label' => Yii::t('modules/notifications', 'Price-list'), 
												'url' => ['/partner/price-list'],
                                            ],
											
											[
                                                'label' => Yii::t('modules/notifications', 'Steps'),
												'url' => ['/partner/steps'],
                                            ],
											
											[
                                                'label' => Yii::t('modules/notifications', 'Reviews'), 
												'url' => ['/partner/reviews'],
                                            ],
											
											[
                                                "label" => Yii::t('modules/notifications', 'Contacts'),
                                                "url" => ['/partner/contacts'],
                                            ],
										    
                                            [
                                               'label' => Yii::t('modules/notifications', 'Customers'), 
											   'url' => ['/partner/customers'],
                                            ],
											
											[
                                                'label' => Yii::t('modules/notifications', 'Callbacks'),
												'url' => ['/partner/callback'],
                                            ],
                                        ],
		
                                    ],
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu --><?php $options = ['class' => 'glyphicon glyphicon-off']?>
                                    
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <!--<a href = "/user/logout" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>-->
           
				</div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="//gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=230" alt=""><span><?= Yii::$app->user->identity->username?></span>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="/admin/user/profile">  <?= Yii::t('modules/notifications', 'Profile')?> </a>
                                </li>
                                <li>
                                    <a href="/admin/user/settings">
                                        <span><?=Yii::t('modules/notifications', 'Settings')?></span>
                                    </a>
                                </li>
                
								<?php $options = ['class' => 'fa fa-sign-out pull-right']; 
								        
								
								?>
								
								<li> <?= Html::beginForm(['/user/logout'], 'post')?>
                                <?= Html::submitButton('', ['class' => 'fa fa-sign-out pull-right'])?>
                                <?= Html::endForm()?>
                                <!--<li><a href="/admin/user/security/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>-->
                                </li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                          <div class="header">
                            <?php echo \webzop\notifications\widgets\Notifications::widget() ?>
                            </div>
							
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span><?= Yii::$app->user->identity->username?></span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a href="/">
                                            <strong>Показать все оповещения</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
	
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
        
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
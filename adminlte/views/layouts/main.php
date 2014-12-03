<?php
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use thedollarsign\themes\adminlte\assets\ThemeAsset;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html class="bg-black" lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<?php $bundles = $this->assetBundles['thedollarsign\themes\adminlte\assets\ThemeAsset']; ?>
<body class="skin-blue">
    <?php $this->beginBody(); ?>
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="/" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <?= Yii::$app->name ?>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?= ucwords(Yii::$app->user->identity->username) ?> <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?= $bundles->baseUrl?>/img/avatar5.png" class="img-circle" alt="User Image" />
                                <p>
                                    <?= ucwords(Yii::$app->user->identity->username) ?> - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= Url::to(array('site/logout')) ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= $bundles->baseUrl?>/img/avatar5.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Hello, <?= ucwords(Yii::$app->user->identity->username) ?></p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <?= $this->render('//layouts/left-menu')?>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= $this->title ?>
                    <small>Control panel</small>
                </h1>
                <?= Breadcrumbs::widget(
                    [
                        'homeLink' => [
                            'label' => '<i class="fa fa-dashboard"></i> Home',
                            'url' => '/'
                        ],
                        'encodeLabels' => false,
                        'tag' => 'ol',
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                    ]
                ) ?>
            </section>

            <!-- Main content -->
            <section class="content">
                <?= $content?>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

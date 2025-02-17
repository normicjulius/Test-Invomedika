<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;

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
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Home", "url" => ["/site/index"], "icon" => "home"],
                                    ["label" => "Wilayah", "url" => ["wilayah/index"], "icon" => "files-o"],
                                    ["label" => "Tindakan", "url" => ["tindakan/index"], "icon" => "files-o"],
                                    ["label" => "Obat", "url" => ["obat/index"], "icon" => "files-o"],
                                    ["label" => "Pegawai", "url" => ["pegawai/index"], "icon" => "files-o"],
                                    // ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"],
                                    [
                                        "label" => "Transaksi",
                                        "icon" => "th",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Pendaftaran Pasien", "url" => ["pendaftaran/index"]],
                                            ["label" => "Tindakan & Obat Pasien", "url" => ["riwayat/index"]],
                                        ],
                                    ],
                                    // [
                                    //     "label" => "Badges",
                                    //     "url" => "#",
                                    //     "icon" => "table",
                                    //     "items" => [
                                    //         [
                                    //             "label" => "Default",
                                    //             "url" => "#",
                                    //             "badge" => "123",
                                    //         ],
                                    //         [
                                    //             "label" => "Success",
                                    //             "url" => "#",
                                    //             "badge" => "new",
                                    //             "badgeOptions" => ["class" => "label-success"],
                                    //         ],
                                    //         [
                                    //             "label" => "Danger",
                                    //             "url" => "#",
                                    //             "badge" => "!",
                                    //             "badgeOptions" => ["class" => "label-danger"],
                                    //         ],
                                    //     ],
                                    // ],
                                    // [
                                    //     "label" => "Multilevel",
                                    //     "url" => "#",
                                    //     "icon" => "table",
                                    //     "items" => [
                                    //         [
                                    //             "label" => "Second level 1",
                                    //             "url" => "#",
                                    //         ],
                                    //         [
                                    //             "label" => "Second level 2",
                                    //             "url" => "#",
                                    //             "items" => [
                                    //                 [
                                    //                     "label" => "Third level 1",
                                    //                     "url" => "#",
                                    //                 ],
                                    //                 [
                                    //                     "label" => "Third level 2",
                                    //                     "url" => "#",
                                    //                 ],
                                    //             ],
                                    //         ],
                                    //     ],
                                    // ],
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <?php
                $this->beginContent('@app/views/layouts/production/sidebar_menu.php');
                $this->endContent();
                ?>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <?php
                $this->beginContent('@app/views/layouts/production/header.php');
                $this->endContent();
                ?>
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
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />
                Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>
            </div>
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

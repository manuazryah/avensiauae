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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <title>Avensia Group</title>
        <link rel="shortcut icon" href="<?= yii::$app->homeUrl; ?>images/favicon.png">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id ?>
        <header class="header"><!--header--> 
            <!--head-top-section-->
            <section class="top-section"><!--top-section-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-cont-left">Welcome to Avensia Group</div>
                        </div>
                        <div class="col-md-8">
                            <div class="top-right-section">
                                <div class="top-link">
                                    <ul>
                                        <li>
                                            <?= Html::a('Blog', ['/site/blog']) ?>
                                        </li>
                                        <li><span>|</span></li>
                                        <li>
                                            <?= Html::a('Sitemap', ['/site/sitemap']) ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="follows-top">
                                    <ul>
                                        <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                        <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                        <li> <a href="#" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                                        <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--top-section-->
            <section class="head-middle-section"><!--head-top-section-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="logo">
                                <?= Html::a('<img src="' . yii::$app->homeUrl . 'images/logo.png" alt="Avensia Group" title="Avensia Group" class="img-fluid">', ['/site/index']) ?>
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <div class="top-contat">
                                <div class="phone"> <small class="small">Facility Management</small>
                                    <h2 class="head-text">0509962388</h2>
                                </div>
                                <div class="phone"> <small class="small">IT</small>
                                    <h2 class="head-text">0509962388</h2>
                                </div>
                                <div class="phone border-left"> <small class="small">General Trading</small>
                                    <h2 class="head-text">0509962388</h2>
                                </div>
                                <div class="mail"> <small class="small">Email:</small>
                                    <h2 class="head-text">info@avensiauae.com</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="nav-section"><!--nav-section-->
                <div class="container">
                    <div class="main-nav-section">
                        <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="nav_titel">Menu</span>
                                <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li>
                                        <?= Html::a('Home', ['/site/index'], ['class' => $action == 'site/index' ? 'active' : '']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('About Us', ['/site/about'], ['class' => $action == 'site/about' ? 'active' : '']) ?>
                                    </li>
                                    <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/general-trading' ? 'active' : '' ?>">General trading</a>
                                        <ul class="dropdown-menu animated2 fadeInUp">
                                            <li>
                                                <?= Html::a('Medical Consumables', ['/site/general-trading', 'page' => 'medical-consumables'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Stationery Products', ['/site/general-trading', 'page' => 'stationery-products'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('General Disposables', ['/site/general-trading', 'page' => 'general-disposables'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Industrial spare parts', ['/site/general-trading', 'page' => 'industrial-spare-parts'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Safety Products', ['/site/general-trading', 'page' => 'safety-products'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/it' ? 'active' : '' ?>">IT</a>
                                        <ul class="dropdown-menu animated2 fadeInUp">
                                            <li>
                                                <?= Html::a('Networking', ['/site/it', 'page' => 'networking'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('IP Telephonic System - pbx or pabx ', ['/site/it', 'page' => 'ip-telephonic-system'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Network switches', ['/site/it', 'page' => 'network-switches'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Wifi or network access point', ['/site/it', 'page' => 'wifi-network-access-point'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Office IT equipments', ['/site/it', 'page' => 'office-it-equipments'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('IT equipments in dubai', ['/site/it', 'page' => 'it-equipments-dubai'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('CCTV reference', ['/site/it', 'page' => 'cctv-reference'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/technical-service' ? 'active' : '' ?>">technical service</a>
                                        <ul class="dropdown-menu animated2 fadeInUp">
                                            <li>
                                                <?= Html::a('Steel Fabrication', ['/site/technical-service', 'page' => 'steel-fabrication'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Architectural metal works and Gold plating', ['/site/technical-service', 'page' => 'metal-works-and-gold-plating'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Interior designing', ['/site/technical-service', 'page' => 'interior-designing'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Sealing and partitioning', ['/site/technical-service', 'page' => 'sealing-and-partitioning'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/facility-management' ? 'active' : '' ?>">facility management</a>
                                        <ul class="dropdown-menu animated2 fadeInUp">
                                            <li>
                                                <?= Html::a('Electro Mechanical Services', ['/site/facility-management', 'page' => 'electro-mechanical-services'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('House Keeping Services', ['/site/facility-management', 'page' => 'house-keeping-services'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('General Maintenance', ['/site/facility-management', 'page' => 'general-maintenance'], ['class' => 'dropdown-item']) ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <?= Html::a('gallery', ['/site/gallery'], ['class' => $action == 'site/gallery' ? 'active' : '']) ?>
                                    </li>
                                    <li>
                                        <?= Html::a('Contact', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="main_head navbar-custom fixed-top" role="navigation"><!--fixed-top header-->
                <div class="heder-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-4">
                                <h1 class="logo"><a href="index.html"><img src="<?= yii::$app->homeUrl; ?>images/top-fixed-logo.png" alt="Avensia Group" title="Avensia Group" class="img-fluid"></a></h1>
                            </div>
                            <div class="col-lg-10 col-md-8 col-8">
                                <div class="main-nav-section">
                                    <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
                                            <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                            <ul class="navbar-nav">
                                                <li>
                                                    <?= Html::a('Home', ['/site/index'], ['class' => $action == 'site/index' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('About Us', ['/site/about'], ['class' => $action == 'site/about' ? 'active' : '']) ?>
                                                </li>
                                                <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/general-trading' ? 'active' : '' ?>">General trading</a>
                                                    <ul class="dropdown-menu animated2 fadeInUp">
                                                        <li>
                                                            <?= Html::a('Medical Consumables', ['/site/general-trading', 'page' => 'medical-consumables'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Stationery Products', ['/site/general-trading', 'page' => 'stationery-products'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('General Disposables', ['/site/general-trading', 'page' => 'general-disposables'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Industrial spare parts', ['/site/general-trading', 'page' => 'industrial-spare-parts'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Safety Products', ['/site/general-trading', 'page' => 'safety-products'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a href=""  data-toggle="dropdown" class="<?= $action == 'site/it' ? 'active' : '' ?>">IT</a>
                                                    <ul class="dropdown-menu animated2 fadeInUp">
                                                        <li>
                                                            <?= Html::a('Networking', ['/site/it', 'page' => 'networking'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('IP Telephonic System - pbx or pabx ', ['/site/it', 'page' => 'ip-telephonic-system'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Network switches', ['/site/it', 'page' => 'network-switches'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Wifi or network access point', ['/site/it', 'page' => 'wifi-network-access-point'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Office IT equipments', ['/site/it', 'page' => 'office-it-equipments'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('IT equipments in dubai', ['/site/it', 'page' => 'it-equipments-dubai'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('CCTV reference', ['/site/it', 'page' => 'cctv-reference'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a href="#"  data-toggle="dropdown" class="<?= $action == 'site/technical-service' ? 'active' : '' ?>">technical service</a>
                                                    <ul class="dropdown-menu animated2 fadeInUp">
                                                        <li>
                                                            <?= Html::a('Steel Fabrication', ['/site/technical-service', 'page' => 'steel-fabrication'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Architectural metal works and Gold plating', ['/site/technical-service', 'page' => 'metal-works-and-gold-plating'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Interior designing', ['/site/technical-service', 'page' => 'interior-designing'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Sealing and partitioning', ['/site/technical-service', 'page' => 'sealing-and-partitioning'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a href="#"  data-toggle="dropdown" class="<?= $action == 'site/facility-management' ? 'active' : '' ?>">facility management</a>
                                                    <ul class="dropdown-menu animated2 fadeInUp">
                                                        <li>
                                                            <?= Html::a('Electro Mechanical Services', ['/site/facility-management', 'page' => 'electro-mechanical-services'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('House Keeping Services', ['/site/facility-management', 'page' => 'house-keeping-services'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('General Maintenance', ['/site/facility-management', 'page' => 'general-maintenance'], ['class' => 'dropdown-item']) ?>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <?= Html::a('gallery', ['/site/gallery'], ['class' => $action == 'site/gallery' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Contact', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--fixed-top header--> 
            <!--nav-section--> 
        </header>
        <?= $content ?>

        <footer class="footer"><!--footer-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="f-head">ABOUT US</h2>
                        <div class="f-about">
                            <p>We have started with its full operations in Dubai -United Arab Emirates in various commodities serving customers in UAE, Middle East, Africa, Indian sub continent Far East and Europe. The major focus of the company is in Industrial Products supplying outstanding products and services </p>
                            <div class="f-follows">
                                <ul>
                                    <li> <span>follow us on  - </span></li>
                                    <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                    <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                    <li> <a href="#" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                                    <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i> </a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h2 class="f-head">useful links</h2>
                        <ul class="f-list">
                            <li>
                                <?= Html::a('HOME', ['/site/index']) ?>
                            </li>
                            <li>
                                <?= Html::a('ABOUT', ['/site/about']) ?>
                            </li>
                            <li>
                                <?= Html::a('GALLERY', ['/site/gallery']) ?>
                            </li>
                            <li>
                                <?= Html::a('CONTACT', ['/site/contact']) ?>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-3">
                        <h2 class="f-head">Our Services</h2>
                        <ul class="f-list">
                            <li>
                                <?= Html::a('General trading', ['/site/general-trading']) ?>
                            </li>
                            <li>
                                <?= Html::a('IT', ['/site/it']) ?>
                            </li>
                            <li>
                                <?= Html::a('Technical Service', ['/site/technical-service']) ?>
                            </li>
                            <li>
                                <?= Html::a('Facility Management', ['/site/facility-management']) ?>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-3">
                        <h2 class="f-head">Address</h2>
                        <div class="f-address">Dubai Mall located in Downtown Burj Khalifa & Dubai Fountain</div>
                        <div class="f-address f-phone"><small>General Trading</small>0509962388</div>
                        <div class="f-address f-phone"><small>IT</small>0509962388</div>
                        <div class="f-address f-phone"><small>Facility Management</small>0509962388</div>
                        <div class="f-address f-mail">info@avensiauae.com</div>

                    </div>
                </div>
            </div>
        </footer><!--footer--> 
        <section class="copyright"><!--copyright-->
            <div class="container">
                <p>Copyright © <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <b>Avensiauae.</b> All Rights Reserved</p>
            </div>
        </section>

        <?php $this->endBody() ?>
        <script type="text/javascript">
            $(document).ready(function () {

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function () {
                    $("html, body").animate({scrollTop: 0}, 1000);
                    return false;
                });

            });
        </script>
    </body>
</html>
<?php $this->endPage() ?>

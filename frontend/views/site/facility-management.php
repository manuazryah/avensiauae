<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'IT';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>Facility Management</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>facility management</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-service-section"><!--in-service-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-categories">
                    <h2 class="head active"><a data-toggle="collapse"  href="#facility-management" role="button">facility management</a></h2>
                    <ul class="list-box collapse" id="facility-management">
                        <li><a href="#">Electro  Mechanical Services</a></li>
                        <li><a href="#">House Keeping Services</a></li>
                        <li><a href="#">General Maintenance </a></li>
                    </ul>
                </div>
                <div class="service-categories">
                    <h2 class="head"><a data-toggle="collapse"  href="#technical-services" role="button">technical services</a></h2>
                    <ul class="list-box collapse" id="technical-services">
                        <li><a href="#">Steel Fabrication</a></li>
                        <li><a href="#">Architectural metal works and Gold plating</a></li>
                        <li><a href="#">Interior designing</a></li>
                        <li><a href="#">Sealing and partitioning</a></li>
                    </ul>
                </div>
                <div class="service-categories">
                    <h2 class="head"><a data-toggle="collapse"  href="#general-trading" role="button">general trading</a></h2>
                    <ul class="list-box collapse" id="general-trading">
                        <li><a href="#">Medical   Consumables</a></li>
                        <li><a href="#">Stationery Products </a></li>
                        <li><a href="#">General disposables</a></li>
                        <li><a href="#">Industrial spare parts</a></li>
                        <li><a href="#">Safety Products</a></li>
                    </ul>
                </div>
                <div class="service-categories">
                    <h2 class="head"><a data-toggle="collapse"  href="#IT-Services" role="button">IT Services</a></h2>
                    <ul class="list-box collapse" id="IT-Services">
                        <li><a href="#">Networking </a></li>
                        <li><a href="#">IP Telephonic System - pbx or pabx</a></li> 
                        <li><a href="#">Network switches </a></li>
                        <li><a href="#">Wifi or network access point </a></li>
                        <li><a href="#">Office IT equipments </a></li>
                        <li><a href="#">IT equipments in dubai</a></li> 
                        <li><a href="#">CCTV reference </a></li>
                    </ul>
                </div>


            </div>
            <div class="col-lg-8">
                <div class="service-cont-box">
                    <h3 class="service-head">Electro  Mechanical Services</h3>
                    <div class="cont"><p>Quality Assured Support and AMC - AVENSIA Tech Solutions Integrator, focused in LAN, MAN, WAN, WIRELESS, NETWORK MANAGEMENT, STORAGE, SECURITY AND CONVERGEDVOICE– DATA-VIDEO, SERVERS, DEKTOP and PHYSICAL SECURITY & SURVEILLANCE Solutions domains. Our highly committed and skilled set of professionals will add value by proposing technically superior and commercially competitive solutions.</p></div>
                    <div class="img-box"><img src="<?= yii::$app->homeUrl; ?>images/in-it-img2.jpg" class="img-fluid"></div>
                    <h3 class="service-head">Network- Office IT Equipments</h3>
                    <div class="cont"><p>Quality Assured Support and AMC - AVENSIA Tech Solutions Integrator, focused in LAN, MAN, WAN, WIRELESS, NETWORK MANAGEMENT, STORAGE, SECURITY AND CONVERGEDVOICE– DATA-VIDEO, SERVERS, DEKTOP and PHYSICAL SECURITY & SURVEILLANCE Solutions domains. Our highly committed and skilled set of professionals will add value by proposing technically superior and commercially competitive solutions.</p></div>
                    <div class="list-box">
                        <ul>
                            <li><span>Laptops</span></li>
                            <li><span>Desktop</span></li>
                            <li><span>Printers and tonners </span></li>
                            <li><span>Office headset </span></li>
                            <li><span>Access control/time attendence</span></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <h3 class="service-head">Our Brands</h3>
                    <div class="brands"><img src="<?= yii::$app->homeUrl; ?>images/brands/b1.jpg" class="img-fluid"></div>
                    <h3 class="service-head">Our Project Gallery </h3>
                    <div class="gallery-main gallery">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery-box ">
                                    <img src="<?= yii::$app->homeUrl; ?>images/gallery/s-g1.jpg" class="img-fluid">
                                    <div class="title-box">
                                        <h3> Project Name</h3>
                                        <a href="<?= yii::$app->homeUrl; ?>images/gallery/s-g1.jpg" rel="prettyPhoto[gallery1]" class="zoom-icon"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gallery-box ">
                                    <img src="<?= yii::$app->homeUrl; ?>images/gallery/s-g2.jpg" class="img-fluid">
                                    <div class="title-box">
                                        <h3> Project Name</h3>
                                        <a href="<?= yii::$app->homeUrl; ?>images/gallery/s-g2.jpg" rel="prettyPhoto[gallery1]" class="zoom-icon"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gallery-box ">
                                    <img src="<?= yii::$app->homeUrl; ?>images/gallery/s-g2.jpg" class="img-fluid">
                                    <div class="title-box">
                                        <h3> Project Name</h3>
                                        <a href="<?= yii::$app->homeUrl; ?>images/gallery/s-g2.jpg" rel="prettyPhoto[gallery1]" class="zoom-icon"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gallery-box">
                                    <img src="<?= yii::$app->homeUrl; ?>images/gallery/s-g1.jpg" class="img-fluid">
                                    <div class="title-box">
                                        <h3> Project Name</h3>
                                        <a href="<?= yii::$app->homeUrl; ?>images/gallery/s-g1.jpg" rel="prettyPhoto[gallery1]" class="zoom-icon"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--in-service-section-->

<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'General Trading';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>General Trading</h2>
        </div>
        <div class="main-breadcrumb"><?= Html::a('Home', ['/site/index']) ?><i>|</i><span>general trading</span> </div>
    </div>
</section>
<!--in-banner-->
<section class="in-service-section"><!--in-service-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-categories">
                    <div class="service-categories">
                        <h2 class="head active"><a data-toggle="collapse"  href="#general-trading" role="button">general trading</a></h2>
                        <ul class="list-box collapse" id="general-trading">
                            <li><a href="#">Medical   Consumables</a></li>
                            <li><a href="#">Stationery Products </a></li>
                            <li><a href="#">General disposables</a></li>
                            <li><a href="#">Industrial spare parts</a></li>
                            <li><a href="#">Safety Products</a></li>
                        </ul>
                    </div>
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
                    <h2 class="head"><a data-toggle="collapse"  href="#facility-management" role="button">facility management</a></h2>
                    <ul class="list-box collapse" id="facility-management">
                        <li><a href="#">Electro  Mechanical Services</a></li>
                        <li><a href="#">House Keeping Services</a></li>
                        <li><a href="#">General Maintenance </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-cont-box">
                    <?php
                    if (!empty($general_traid)) {
                        ?>
                        <h3 class="service-head"><?= $general_traid->title ?></h3>
                        <div class="cont">
                            <?= $general_traid->description ?>
                        </div>
                        <?php
                        $products = common\models\Product::find()->where(['general_trad_id' => $general_traid->id])->all();
                        ?>
                        <?php
                        if (!empty($products)) {
                            ?>
                            <div class="general-trading-box">
                                <div class="row">
                                    <?php foreach ($products as $product) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tradin-main">
                                                <div class="trading-img-box"><img src="<?= yii::$app->homeUrl; ?>uploads/products/<?= $product->id ?>/<?= $product->id ?>.<?= $product->product_image ?>" class="img-fluid" alt="<?= $product->alt_tag ?>"></div>
                                                <h3 class="trading-head"><?= $product->product_name ?></h3>
                                            </div>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!--in-service-section-->

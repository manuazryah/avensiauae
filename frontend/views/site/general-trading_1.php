<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'General Trading';
}
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
                        <h2 class="head active"><a data-toggle="collapse"  href="" role="button">general trading</a></h2>
                        <ul class="list-box collapse" id="general-trading">
                            <?php
                            if (!empty($general_trading_menus)) {
                                foreach ($general_trading_menus as $general_trading_menu) {
                                    ?>
                                    <li>
                                        <?= Html::a($general_trading_menu->title, ['/site/general-trading', 'page' => $general_trading_menu->canonical_name], ['class' => 'dropdown-item']) ?>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <h2 class="head"><a data-toggle="collapse"  href="" role="button">IT Services</a></h2>
                    <ul class="list-box collapse" id="IT-Services">
                        <?php
                        if (!empty($it_service_menus)) {
                            foreach ($it_service_menus as $it_service_menu) {
                                ?>
                                <li>
                                    <?= Html::a($it_service_menu->service, ['/site/it-service', 'page' => $it_service_menu->canonical_name], ['class' => 'dropdown-item']) ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="service-categories">
                    <h2 class="head"><a data-toggle="collapse"  href="" role="button">technical services</a></h2>
                    <ul class="list-box collapse" id="technical-services">
                        <?php
                        if (!empty($technical_service_menus)) {
                            foreach ($technical_service_menus as $technical_service_menu) {
                                ?>
                                <li>
                                    <?= Html::a($technical_service_menu->service, ['/site/technical-service', 'page' => $technical_service_menu->canonical_name], ['class' => 'dropdown-item']) ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="service-categories">
                    <h2 class="head"><a data-toggle="collapse"  href="" role="button">facility management</a></h2>
                    <ul class="list-box collapse" id="facility-management">
                        <?php
                        if (!empty($facility_service_menus)) {
                            foreach ($facility_service_menus as $facility_service_menu) {
                                ?>
                                <li>
                                    <?= Html::a($facility_service_menu->service, ['/site/facility-management', 'page' => $facility_service_menu->canonical_name], ['class' => 'dropdown-item']) ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
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

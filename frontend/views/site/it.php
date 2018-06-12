<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'IT';
?>
<link rel="stylesheet" href="<?= yii::$app->homeUrl; ?>css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>IT</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>IT</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-service-section"><!--in-service-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-categories">
                    <h2 class="head active"><a data-toggle="collapse"  href="#IT-Services" role="button">IT Services</a></h2>
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
                    <h3 class="service-head"><?= $it_service->service ?></h3>
                    <div class="cont">
                        <?= $it_service->main_content ?>
                    </div>
                        <?php
                        if ($it_service->image != '') {
                            $dirPath = Yii::getAlias(Yii::$app->params['uploadPath']) . '/uploads/it/services/' . $it_service->id . '/' . $it_service->id . '.' . $it_service->image;
                            if (file_exists($dirPath)) {
                                echo '<div class="img-box"><img class="img-responsive" src="' . Yii::$app->homeUrl . 'uploads/it/services/' . $it_service->id . '/' . $it_service->id . '.' . $it_service->image . '"/> </div>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                        ?>
                    <?php if ($it_service->sub_title != '') { ?>
                        <h3 class="service-head"><?= $it_service->sub_title ?></h3>
                    <?php }
                    ?>
                    <?php if ($it_service->sub_title != '') { ?>
                        <div class="cont">
                            <?= $it_service->sub_content ?>
                        </div>
                    <?php }
                    ?>
                    <?php
                    if ($it_service->equipment_list != '') {
                        $it_equipment_lists = explode(",", $it_service->equipment_list);
                        if (!empty($it_equipment_lists)) {
                            ?>
                            <div class="list-box">
                                <ul>
                                    <?php foreach ($it_equipment_lists as $it_equipment_list) { ?>
                                        <li><span><?= $it_equipment_list ?></span></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clear"></div>
                    <h3 class="service-head">Our Brands</h3>
                    <div class="brands"><img src="<?= yii::$app->homeUrl; ?>images/brands/b1.jpg" class="img-fluid"></div>
                    <?php
                    $path = Yii::getAlias('@paths') . '/it/project_gallery/' . $it_service->id;
                    if (count(glob("{$path}/*")) > 0) {
                        ?>
                        <h3 class="service-head">Our Project Gallery </h3>
                        <div class="gallery-main gallery">
                            <div class="row">
                                <?php
                                $k = 0;
                                foreach (glob("{$path}/*") as $file) {
                                    $k++;
                                    $arry = explode('/', $file);
                                    $img_nmee = end($arry);

                                    $img_nmees = explode('.', $img_nmee);
                                    if ($img_nmees['1'] != '') {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="gallery-box ">
                                                <img src="<?= Yii::$app->homeUrl . 'uploads/it/project_gallery/' . $it_service->id . '/' . end($arry) ?>" alt="it-project-gallery" class="img-fluid">
                                                <div class="title-box">
                                                    <h3></h3>
                                                    <a href="<?= Yii::$app->homeUrl . 'uploads/it/project_gallery/' . $it_service->id . '/' . end($arry) ?>" class="zoom-icon"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!--in-service-section-->
<script src="<?= yii::$app->homeUrl; ?>js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?= yii::$app->homeUrl; ?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 2000, autoplay_slideshow: true});

    });
</script>
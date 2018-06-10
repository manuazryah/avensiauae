<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
$arr1 = array(1, 2, 3);
$arr2 = array(4, 5);
$general_trading1 = common\models\GeneralTrading::find()->where(['id' => $arr1])->all();
$general_trading2 = common\models\GeneralTrading::find()->where(['id' => $arr2])->all();
?>
<section class="banner">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- The slide show -->
        <?php if (!empty($sliders)) { ?>
            <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($sliders as $slider) {
                    $i++;
                    ?>
                    <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>"> <img src="<?= yii::$app->homeUrl; ?>uploads/sliders/<?= $slider->id ?>/<?= $slider->id ?>.<?= $slider->image ?>" alt="<?= $slider->alt_tag ?>" class="img-fluid"> </div>
                <?php }
                ?>
            </div>
        <?php }
        ?>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
    </div>
    <!-- close carousel -->
</section>
<section class="home-main-about-section"><!--home-main-about-section-->
    <div class="container">
        <div class="banner-sub-section"><!--banner-sub-section-->
            <div class="row">
                <div class="col-sm-4 boder-right">
                    <div class="cont-box">
                        <div class="icon"></div>
                        <h2 class="head-style">Avensia General</h2>
                        <small class="sub-text">Trading LLC</small> </div>
                </div>
                <div class="col-sm-4 boder-right">
                    <div class="cont-box">
                        <div class="icon icon2"></div>
                        <h2 class="head-style">Avensia Tech </h2>
                        <small class="sub-text">Solutions LLC</small> </div>
                </div>
                <div class="col-sm-4">
                    <div class="cont-box boder-none">
                        <div class="icon icon3"></div>
                        <h2 class="head-style">Avensia Facility </h2>
                        <small class="sub-text">Management PVT LTD (IND)</small> </div>
                </div>
            </div>
        </div>
        <!--banner-sub-section-->
        <div class="sub-section-shadow"></div>
        <!--sub-section-shadow-->
    </div>
    <section class="home-welcome-section"><!--home-welcome-section-->
        <div class="container">
            <div class="welcome-cont-box"> <small class="small">WELCOME TO THE</small>
                <h2 class="head-text">Avensia Group</h2>
                <?= $about_content->about_avensia ?>
            </div>
        </div>
    </section>
    <!--home-welcome-section-->
</section>
<!--home-main-about-section-->
<section class="home-general-trading-section"><!--home-general-trading-section-->
    <div class="container">
        <div class="main-head">
            <h2 class="head">General trading</h2>
            <small class="small-text">what we provide</small> </div>
        <div class="row">
            <?php
            if (!empty($general_trading1)) {
                $j = 0;
                foreach ($general_trading1 as $value1) {
                    $j++;
                    ?>
                    <div class="col-md-4">
                        <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>uploads/general_trading/<?= $value1->id ?>/<?= $value1->id ?>.<?= $value1->image ?>" class="img-fluid" alt="<?= $value1->alt_tag ?>" title="">
                            <div class="head-box">
                                <?php
                                if ($j % 2 == 0) {
                                    $class1 = 'green';
                                } else {
                                    $class1 = 'blue';
                                }
                                ?>
                                <?= Html::a('<div class="' . $class1 . '"><small class="small">' . $value1->title . '</small></div>', ['/site/general-trading', 'page' => 'medical-consumables'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            if (!empty($general_trading2)) {
                $k = 0;
                foreach ($general_trading2 as $value2) {
                    $k++;
                    ?>
                    <div class="col-md-6">
                        <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>uploads/general_trading/<?= $value2->id ?>/<?= $value2->id ?>.<?= $value2->image ?>" class="img-fluid" alt="<?= $value2->alt_tag ?>" title="">
                            <div class="head-box">
                                <?php
                                if ($k % 2 == 0) {
                                    $class2 = 'blue';
                                } else {
                                    $class2 = 'green';
                                }
                                ?>
                                <?= Html::a('<div class="' . $class2 . '"><small class="small">' . $value2->title . '</small></div>', ['/site/general-trading', 'page' => $value2->canonical_name], ['class' => 'dropdown-item']) ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!--home-general-trading-section-->
<section class="home-avensia-tech"><!--home-avensia-tech-->
    <div class="container">
        <div class="main-head">
            <h2 class="head">Avensia Tech</h2>
            <small class="small-text">technology</small> </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="home-it-section">
                <div class="con-box">
                    <h2 class="head-text">information technology</h2>
                    <ul class="list">
                        <li><a href="IT.html">PPBX/Telephone</a></li>
                        <li><a href="#">Security system</a></li>
                        <li><a href="#">Video Conferencing</a></li>
                        <li><a href="#">Commercial IT Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="home-technical-section">
                <div class="con-box">
                    <h2 class="head-text">Technical</h2>
                    <ul class="list">
                        <li><a href="technical-service.html">Steel Fabrication</a></li>
                        <li><a href="#">Architectural metal works and Gold plating</a></li>
                        <li><a href="#">Interior designing</a></li>
                        <li><a href="#">Sealing and partitioning</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-facility-management"><!--home-facility-management-->
    <div class="container">
        <div class="main-head">
            <h2 class="head">Facility Management</h2>
            <small class="small-text">Facility Management</small> </div>
        <div class="row">
            <div class="col-md-4">
                <div class="facility-box"> <img src="<?= yii::$app->homeUrl; ?>images/home-facility-management.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="facility-management.html">
                            <div class="blue"><small class="small">Electro</small>
                                <h3 class="head-text">Mechanical Services</h3>
                            </div>
                        </a> </div>
                </div>
                <p class="text">AVENSIA Facility Management Pvt Ltd is incorporated with a goal to cater to the technology intensive market by offering expertise and innovation in Facility Management and Turnkey Engineering Projects. At AVENSIA we believe in</p>
            </div>
            <div class="col-md-4">
                <div class="facility-box"> <img src="<?= yii::$app->homeUrl; ?>images/home-facility-management2.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="green"><small class="small">House</small>
                                <h3 class="head-text">Keeping Services</h3>
                            </div>
                        </a> </div>
                </div>
                <p class="text">AVENSIA Facility Management Pvt Ltd is incorporated with a goal to cater to the technology intensive market by offering expertise and innovation in Facility Management and Turnkey Engineering Projects. At AVENSIA we believe in</p>
            </div>
            <div class="col-md-4">
                <div class="facility-box"> <img src="<?= yii::$app->homeUrl; ?>images/home-facility-management3.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="blue"><small class="small">General</small>
                                <h3 class="head-text">Maintenance</h3>
                            </div>
                        </a> </div>
                </div>
                <p class="text">AVENSIA Facility Management Pvt Ltd is incorporated with a goal to cater to the technology intensive market by offering expertise and innovation in Facility Management and Turnkey Engineering Projects. At AVENSIA we believe in</p>
            </div>
        </div>
    </div>
</section>
<section class="home-testimonials"><!--home-testimonials-->
    <div class="container">
        <div class="main-head">
            <h2 class="head">Company Testimonial</h2>
            <small class="small-text">our Testimonial</small> </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="Testimonial">
                    <div class="cont-box">
                        <div class="img-box"><img src="<?= yii::$app->homeUrl; ?>images/testimonials-img.jpg" class="img-fluid"></div>
                        <div class="text-box">
                            <p>"When I contemplate my experience with your company three words comes to mind: Quality, Cosnideration and Integrity. I look forward to working with Orio Builders in the future and continu to give my emphatic  any friend "</p>
                        </div>
                        <h3 class="head">LIJIA CHACKO - DUBAI</h3>
                        <small class="small">Genarel customer</small> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Testimonial">
                    <div class="cont-box">
                        <div class="img-box"><img src="<?= yii::$app->homeUrl; ?>images/testimonials-img2.jpg" class="img-fluid"></div>
                        <div class="text-box">
                            <p>"When I contemplate my experience with your company three words comes to mind: Quality, Cosnideration and Integrity. I look forward to working with Orio Builders in the future and continu to give my emphatic  any friend "</p>
                        </div>
                        <h3 class="head">LIJIA CHACKO - DUBAI</h3>
                        <small class="small">Genarel customer</small> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-blog"><!--home-blog-->
    <div class="container">
        <div class="main-head">
            <h2 class="head">Our Blog</h2>
            <small class="small-text">Our Blog</small> </div>
        <div class="row">
            <div class="col-md-4">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <a href="blog.html" class="link">Read More</a> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog2.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <a href="blog.html" class="link">Read More</a> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog3.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <a href="blog.html" class="link">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

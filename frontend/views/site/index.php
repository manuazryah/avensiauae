<?php
/* @var $this yii\web\View */

$this->title = '';
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
                    <div class="carousel-item <?= $i== 1?'active':''?>"> <img src="<?= yii::$app->homeUrl; ?>uploads/sliders/<?= $slider->id ?>/<?= $slider->id ?>.<?= $slider->image ?>" alt="<?= $slider->alt_tag ?>" class="img-fluid"> </div>
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
                <p>Avensia Tech Solutions LLC - Company is based in Dubai and our progress is always fulfilling our customer demands. The company's principal areas of business interests include General Maintenance, facilities management, technical contracting work on buildings and provision of specialized skilled manpower and technical project management.</p>
                <p>Customer satisfaction, Integrity and commitment in all aspects of business are the core values of the organization. Our management team has decades of business experience which forms the innerstrength of Avensia Tech Solutions LLC</p>
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
            <div class="col-md-4">
                <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>images/trading-img1.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="general-trading.html">
                            <div class="blue"><small class="small">Medical</small>
                                <h3 class="head-text">Consumables</h3>
                            </div>
                        </a> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>images/trading-img2.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="green"><small class="small">Stationary </small>
                                <h3 class="head-text">Products</h3>
                            </div>
                        </a> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>images/trading-img3.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="blue"><small class="small">General</small>
                                <h3 class="head-text">disposables</h3>
                            </div>
                        </a> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>images/trading-img4.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="green"><small class="small">Industrial</small>
                                <h3 class="head-text">spare parts</h3>
                            </div>
                        </a> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="trading-box"> <img src="<?= yii::$app->homeUrl; ?>images/trading-img5.jpg" class="img-fluid" alt="" title="">
                    <div class="head-box"> <a href="#">
                            <div class="blue"><small class="small">Safety</small>
                                <h3 class="head-text">Products</h3>
                            </div>
                        </a> </div>
                </div>
            </div>
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

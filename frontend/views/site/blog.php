<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Blog';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>Blog</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>blog</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-blog-section"><!--in-blog-section-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog2.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog3.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog3.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog3.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-box"> <img src="<?= yii::$app->homeUrl; ?>images/blog3.jpg" class="img-fluid">
                    <div class="cont-box">
                        <div class="date-box">
                            <h2 class="d-head">05</h2>
                            <b class="b-text">Mar 2018</b> </div>
                        <h3 class="head-text">Blog Heading</h3>
                        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy </p>
                        <?= Html::a('Read More', ['/site/blog-details'], ['class' => 'link']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--in-blog-section-->

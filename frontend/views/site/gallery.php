<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Project Gallery';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>Project Gallery</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>Project Gallery</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-gallery-section gallery"><!--in-service-section-->
	<div class="row">
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g1.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g1.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g2.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g2.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g3.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g3.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g4.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g4.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g5.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g5.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g6.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g6.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g1.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g1.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Consumables</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g2.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g2.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    	<div class="col-lg-4 col-md-6">
        	<div class="gallery-box">
            <img src="<?= yii::$app->homeUrl; ?>images/gallery/g3.jpg" class="img-fluid">
            <a href="<?= yii::$app->homeUrl; ?>images/gallery/g3.jpg" rel="prettyPhoto[gallery1]" class="icon"></a>
            <div class="head-box"><h3 class="head-text">Stainless Steel Glass Handrails</h3></div>
            </div>
      </div>
    </div>
</section><!--in-service-section-->

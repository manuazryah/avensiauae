<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Project Gallery';
?>
<link rel="stylesheet" href="<?= yii::$app->homeUrl; ?>css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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
        <?php
        if (!empty($gallery_images)) {
            foreach ($gallery_images as $gallery_image) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-box">
                        <img src="<?= yii::$app->homeUrl; ?>uploads/project_gallery/<?= $gallery_image->id ?>/<?= $gallery_image->id ?>.<?= $gallery_image->image ?>" class="img-fluid" alt="<?= $gallery_image->alt_tag ?>">
                        <a href="<?= yii::$app->homeUrl; ?>uploads/project_gallery/<?= $gallery_image->id ?>/<?= $gallery_image->id ?>.<?= $gallery_image->image ?>" rel="prettyPhoto[gallery1]" class="icon"></a>
                        <div class="head-box"><h3 class="head-text"><?= $gallery_image->project_title ?></h3></div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section><!--in-service-section-->
<script src="<?= yii::$app->homeUrl; ?>js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?= yii::$app->homeUrl; ?>js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 2000, autoplay_slideshow: true});

    });
</script>
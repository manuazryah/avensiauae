<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Blog';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>Blog Details</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>blog details</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-blog-section"><!--in-blog-section-->
    <div class="container">

        <div class="blog-details-box">
            <div class="row">
                <div class="col-lg-8"><!--col-md-8-->

                    <div class="img-box"><img src="<?= yii::$app->homeUrl; ?>uploads/blog/<?= $blog_detail->id ?>/<?= $blog_detail->id ?>.<?= $blog_detail->image ?>" alt="<?= $blog_detail->blog_heading ?>" class="img-fluid"></div>
                    <div class="date">Post By: <?= $blog_detail->author ?> <span>| </span> <?= date("F d Y", strtotime($blog_detail->blog_date)); ?></div>
                    <?= $blog_detail->detailed_description ?>
                    <div class="share-box">
                        <h3>Share This Article:</h3>
                        <div class="follows-Share">
                            <ul>
                                <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                <li> <a href="#" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                                <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i> </a></li>
                            </ul>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="blog-contact-form">
                        <h2>ADD A COMMENT</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form class="in-main-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="" type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="" type="text" class="form-control" placeholder="Website URL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="" type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="" type="text" class="form-control" placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" cols="" rows="" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="" type="submit" value="Send Request!" class="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--col-md-8-->
                <div class="col-lg-4">


                    <div class="blog-category-box">

                        <h2>Recent Posts</h2>
                        <div class=" blog-recent-posts">
                            <?php
                            if (!empty($blogs)) {
                                foreach ($blogs as $blog) {
                                    if (!empty($blog)) {
                                        ?>
                                        <div class="posts"><!--posts-->
                                            <div class="row">
                                                <div class="col-sm-5"><img src="<?= yii::$app->homeUrl; ?>uploads/blog/<?= $blog->id ?>/small.<?= $blog->image ?>" alt="<?= $blog->blog_heading ?>" class="img-fluid"> </div>
                                                <div class="col-sm-7">
                                                    <?= Html::a('<h3>' . $blog->blog_heading . '</h3>', ['/site/blog-details', 'id' => $blog->id], ['class' => 'link']) ?>
                                                    <small><?= date("F d Y", strtotime($blog->blog_date)); ?></small>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>


    </div>
</section><!--in-blog-section-->

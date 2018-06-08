<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Contact Us';
?>
<section class="in-banner"><!--in-banner-->
    <div class="container">
        <div class="banner-cont">
            <h2>Contact Us</h2>
        </div>
        <div class="main-breadcrumb">
            <?= Html::a('Home', ['/site/index']) ?><i>|</i><span>Contact</span> </div>
    </div>
</section>
<!--in-banner-->

<section class="in-contact-section"><!--in-about-section-->
	<div class="container">
    	<div class="contact-box">
        	<div class="main-head">
      <h2 class="head">Avensia Group</h2>
      <small class="small-text">Get in touch with us</small> </div>
    	<div class="row">
        	<div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="location">
                	<h2 class="head">Dubai - UAE</h2>
                    <div class="sub-box"><p><b>TEL:</b> +9714-2636886</p>
                    <p><b>FAX:</b> +9714-2636883</p>
                    <p>P. O. Box: 87334</p>
                    </div>
                    <h2 class="head">Contact Person</h2>
                    <p><span>Tech Solutions LLC:</span><br> + 971526456607</p>
                    <p><span>General Trading: </span><br> + 971509962388</p>
                </div>	
            </div>
        	<div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="location">
                	<h2 class="head">Salwa Road, Doha - Qatar</h2>
                    <div class="sub-box"><p><b>TEL:</b>TEL: +974-44719424</p>
                    <p>P. O. Box: 35174</p>
                    </div>
                    <h2 class="head">Contact Person</h2>
                    <p><span>Tech Solutions LLC:</span><br> + 974 - 31237915</p>
                    <p><span>General Trading: </span><br> + 974 - 31309595</p>
                </div>	
            </div>
        	<div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="location">
                	<h2 class="head">Cochin Office</h2>
                    <div class="sub-box"><p><b>TEL:</b>+91 484 4019726</p>
                    <p>Erix Enclave, Opp. Juma Masjid Kakkanadu, Cochin - 682030, Kerala India</p>
                    </div>
                    
                </div>	
            </div>
        	<div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="location">
                	<h2 class="head">Representative Office</h2>
                    <div class="sub-box"><p><b>TEL:</b> +91 9895 10 6959</p>
                    <p>TC24/1085-2, Ground Floor, KP's Building, Thycaud P. O, Trivandrum - 695014 Kerala India</p>
                    </div>
                    
                </div>	
            </div>
            
            </div>
      </div>
    </div>
</section><!--in-about-section-->
<section class="in-contact-form"><!--in-contact-form-->
	<div class="container">
    	<div class="main-head">
      <h2 class="head">online enquiry</h2>
      <small class="small-text">contact form</small> </div>
      <div class="row">
      	<div class="col-md-6">
                <div class="form-group">
                	<label>Full Name <sup>*</sup></label>
                  <input name="" type="text" class="form-control" >
                </div>
                <div class="form-group">
                	<label>Place<sup>*</sup></label>
                  <input name="" type="text" class="form-control" >
                </div>
                <div class="form-group">
                	<label>Telephone: (with country code)<sup>*</sup></label>
                  <input name="" type="text" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <label>Place<sup>*</sup></label>
                  <textarea name="" cols="" rows="" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <input name="" type="submit" value="Send Request!" class="submit">
                </div>
              </div>
      </div>
    </div>
</section><!--in-contact-form-->
<section class="in-location-map"><!--in-contact-form-->
	<div class="container">
    	<div class="main-head">
      <h2 class="head">LOCATION MAP</h2>
      <small class="small-text">LOCATION MAP</small> </div>
      <div class="row">
      	<div class="col-md-6">
        	<div class="map-box">
            	<h3>Dubai - UAE</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=12WSllz1pue8_NxNItCL9wl20QXg" width="100%" height="350"></iframe>
            </div>
        </div>
        <div class="col-md-6">
        	<div class="map-box">
            	<h3>Salwa Road, Doha - Qatar</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=12WSllz1pue8_NxNItCL9wl20QXg" width="100%" height="350"></iframe>
            </div>
        </div>
        <div class="col-md-6">
        	<div class="map-box">
            	<h3>Cochin Office</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=12WSllz1pue8_NxNItCL9wl20QXg" width="100%" height="350"></iframe>
            </div>
        </div>
        <div class="col-md-6">
        	<div class="map-box">
            	<h3>Representative Office:</h3>
                <iframe src="https://www.google.com/maps/d/embed?mid=12WSllz1pue8_NxNItCL9wl20QXg" width="100%" height="350"></iframe>
            </div>
        </div>
      </div>
      
    </div>
</section><!--in-contact-form-->

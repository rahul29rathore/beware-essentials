
<?php $__env->startSection('stylesheet'); ?>
    <style>
        .header-banner {
            background: center/cover no-repeat url('/assets/images/landing/main-bg.jpg');
            position: relative;
            display: block;
            padding: 15px 15px 50px;
            height: 450px;
        }

        .baby-monitoring {
            position: relative;
            top: 50px;
            display: block;
            margin: auto;
            width: 385px;
        }

        .main-title {
            font-weight: 600;
            color: #fff
        }

        .main-content {
            position: relative;
            display: block;
            max-width: 500px;
        }

        .main-content p {
            position: relative;
            display: block;
            font-size: 16px;
            color: #fff
        }

        .baby-monitoring-features img {
            border-radius: 20px;
            background: #f7f7f7;
            width: 340px;
            margin: auto
        }

        .video-thumb {
            position: relative;
            display: block;
            cursor: pointer;
        }

        .video-thumb img {
            position: relative;
            display: block;
            width: 100%;
            height: 315px;
            object-fit: cover;
            border-radius: 20px;
        }

        .video-thumb img.btn-play {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.5));
            transition: 0.3s;
        }

        .video-thumb:hover img.btn-play {
            transition: 0.3s;
            transform: translate(-50%, -50%) scale(1.2)
        }

        @media(max-width:535px) {
            .header-banner {
                height: initial;
            }

            .baby-monitoring {
                top: 0;
            }

            .main-title {
                font-size: 28px
            }

            .video-thumb img {
                height: 149px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="p-0 mb-5">
    <div class="container-fluid">
        <div class="slider main-slider">
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-4.jpg')); ?>" class="w-100">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-5.jpg')); ?>" class="w-100">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-6.jpg')); ?>" class="w-100">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-1.jpg')); ?>" class="w-100">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-2.jpg')); ?>" class="w-100">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('assets/images/revslider/banner-3.jpg')); ?>" class="w-100">
            </div>
        </div>
    </div>
</section>
    <!--div id="slider">
        <div class="dt-sc-main-slider" id="dt-sc-rev-slider">
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery"
                style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_2_1" data-version="6.3.4">
                    <rs-slides>
                        <rs-slide data-key="rs-7" data-title="Slide" data-thumb="" data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-4.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                        <rs-slide data-key="rs-7" data-title="Slide" data-thumb=""
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-5.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                        <rs-slide data-key="rs-7" data-title="Slide" data-thumb=""
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-6.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                        <rs-slide data-key="rs-6" data-title="Slide" data-thumb=""
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-1.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                        <rs-slide data-key="rs-5" data-title="Slide" data-thumb=""
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-2.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                        <rs-slide data-key="rs-7" data-title="Slide" data-thumb=""
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="<?php echo e(asset('assets/images/revslider/banner-3.jpg')); ?>" title="Home II"
                                class="rev-slidebg" data-no-retina>
                        </rs-slide>
                    </rs-slides>
                </rs-module>
            </rs-module-wrap>
        </div>
    </div-->
    <section id="primary" class="content-full-width pb-0">
        <div class="container">
            <div class="row pt-0">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo e(asset('assets/images/img1-1.png')); ?>" data-aos="fade-down">
                    <div class="dt-sc-title script-with-sub-title">
                        <h4 data-aos="fade-down" data-aos-delay="100">Beware - Be Assured, Be Secured!</h4>
                        <h2 data-aos="fade-down" data-aos-delay="200">CCTV Surveillance Systems For Commercial, Residential & Industrial</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-category">
         <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.display-category')->html();
} elseif ($_instance->childHasBeenRendered('hc1U86T')) {
    $componentId = $_instance->getRenderedChildComponentId('hc1U86T');
    $componentTag = $_instance->getRenderedChildComponentTagName('hc1U86T');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hc1U86T');
} else {
    $response = \Livewire\Livewire::mount('frontend.display-category');
    $html = $response->html();
    $_instance->logRenderedChild('hc1U86T', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section>
    <section id="primary" class="content-full-width pt-5 pb-0">
        <div class="container">
            <!--div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">New Arrivals</h2>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.new-arrivals')->html();
} elseif ($_instance->childHasBeenRendered('3v4P4uv')) {
    $componentId = $_instance->getRenderedChildComponentId('3v4P4uv');
    $componentTag = $_instance->getRenderedChildComponentTagName('3v4P4uv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3v4P4uv');
} else {
    $response = \Livewire\Livewire::mount('frontend.new-arrivals');
    $html = $response->html();
    $_instance->logRenderedChild('3v4P4uv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div!-->
        </div>
    </section>
    <section id="primary" class="content-full-width">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="dt-sc-image-caption" data-aos="fade-right">
                        <div class="dt-sc-image-wrapper">
                            <img src="<?php echo e(asset('assets/images/img8-2.jpg')); ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dt-sc-image-caption" data-aos="fade-left">
                        <div class="dt-sc-image-content">
                            <div class="dt-sc-image-title">
                                <h5>Being alert for you always!</h5>
                                <h3 class="text-primary">One Place For All Security Solutions</h3>
                            </div>
                            <p>Beware is one of the India's leading CCTV Security & Surveillance solution providers,
                                offering innovative products & services at very affordable packages. We are well known in
                                the industry for our uncompromising attitude towards quality and service to our customers.
                            </p>
                            <p>Our executive approach in designing and manufacturing systems towards optimal application are
                                backed by latest technologies in CCTV surveillance systems for a myriad of different
                                applications across multiple industries & sectors.</p>
                            <p><a href="<?php echo e(route('products')); ?>" target="_self" title=""
                                    class="dt-sc-button   medium   bordered  "> View Our Products </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-products-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--h2 class="section-title">Featured Products</h2!-->
                    
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.featured-product')->html();
} elseif ($_instance->childHasBeenRendered('NfitK5h')) {
    $componentId = $_instance->getRenderedChildComponentId('NfitK5h');
    $componentTag = $_instance->getRenderedChildComponentTagName('NfitK5h');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NfitK5h');
} else {
    $response = \Livewire\Livewire::mount('frontend.featured-product');
    $html = $response->html();
    $_instance->logRenderedChild('NfitK5h', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </section>
    <section class="header-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-down" data-aos-delay="200">
                    <img class="baby-monitoring" src="<?php echo e(asset('assets/images/landing/baby-monitoring.png')); ?>"
                        alt="baby-monitoring" title="baby-monitoring" />
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="main-content pt-lg-5" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="main-title">Home Security Camera 360°</h3>
                        
                        <div class="row text-white">
                            <div class="col-lg-6">
                                <ul>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/motion-tracking.png')); ?>" width="48" class="mr-3"> Motion Tracking System</li>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/speaker-microphone.png')); ?>" width="48" class="mr-3"> Speaker & Microphone</li>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/day-night-vision.png')); ?>" width="48" class="mr-3"> Night Vision Upto 5-10 Mtr.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/sd-card.png')); ?>" width="48" class="mr-3"> MicroSD Support Upto 128GB</li>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/mobile-app.png')); ?>" width="48" class="mr-3"> Free App for Smart Phone</li>
                                    <li class="d-flex my-2"><img src="<?php echo e(asset('assets/images/icons/plug-play.png')); ?>" width="48" class="mr-3"> P2P, Plug & Play, Setting Free</li>
                                </ul>
                            </div>
                        </div>
                        <a href="<?php echo e(route('page', 'contact-us')); ?>" class="dt-sc-button medium text-white bg-theme-red mt-4">Buy Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="mt-0 mb-3 text-white text-center">Features</h3>
                    <div class="slider baby-monitoring-features">
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-1.png')); ?>" alt="feature-1" /></div>
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-2.png')); ?>" alt="feature-1" /></div>
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-3.png')); ?>" alt="feature-1" /></div>
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-4.png')); ?>" alt="feature-1" /></div>
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-5.png')); ?>" alt="feature-1" /></div>
                        <div><img class="img-fluid" src="<?php echo e(asset('assets/images/landing/feature-6.png')); ?>" alt="feature-1" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section id="primary" class="content-full-width">
        <div class="container">
            <div class="row pt-lg-5">
                <div class="col-lg-6 mb-4" data-aos="zoom-in">
                    <div class="dt-sc-light-bg-overlay">
                        <div class="bg-services w-100">
                            <div class="vc_column_inner">
                                <h5 class="text-white">Our Services</h5>
                                <h2 class="text-white">"One-Stop Shop" For Your Home And Office Security!</h2>
                                <p class="text-white">We are proud to state that our services are the culmination of the
                                    heavily researched, modern, and latest technology that we supply, install, and manage.
                                    We ensure that the solutions we offer are the best and cater to the latest technological
                                    trends.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 row m-0 p-0">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box-holder mb-4">
                            <h3 class="vc_custom_heading text-right">Pan India<br> Reach<br> Service</h3>
                            <img src="<?php echo e(asset('assets/images/icons/pan-india.png')); ?>" class="first-img blend-darken">
                            
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box-holder mb-4 bg-transparent">
                            <h3 class="vc_custom_heading text-right">Free<br> Consultation <br>Service</h3>
                            <img src="<?php echo e(asset('assets/images/icons/consultation.png')); ?>"
                                class="first-img blend-darken">
                            
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box-holder mb-4 bg-transparent">
                            <h3 class="vc_custom_heading text-right">Low<br> Maintenance<br> Service</h3>
                            <img src="<?php echo e(asset('assets/images/icons/maintenance.png')); ?>" class="first-img blend-darken">
                            
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="box-holder mb-4">
                            <h3 class="vc_custom_heading text-right">Quick<br> Installation<br> Service</h3>
                            <img src="<?php echo e(asset('assets/images/icons/quick-installation.png')); ?>"
                                class="first-img blend-darken">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section!-->
    <section class="section-gap">
        <div class="container p-sm-0 pt-lg-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-boxes-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-3" data-aos="fade-down" data-aos-delay="200">
                                    <a class="video-thumb"
                                        onclick="playVideo('https://www.youtube.com/embed/6Qfs3vJkllo')"
                                        data-toggle="modal" data-target="#video-popup">
                                        <img src="<?php echo e(asset('assets/images/landing/video-thumb-1.jpg')); ?>">
                                        <img src="<?php echo e(asset('assets/images/landing/play-button.png')); ?>" class="btn-play">
                                    </a>
                                </div>
                                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <a class="video-thumb"
                                        onclick="playVideo('https://www.youtube.com/embed/n4A5Th9wNXQ?si=ixMTMTe-3PYIG6eS')"
                                        data-toggle="modal" data-target="#video-popup">
                                        <img src="<?php echo e(asset('assets/images/landing/video-thumb-2.jpg')); ?>">
                                        <img src="<?php echo e(asset('assets/images/landing/play-button.png')); ?>" class="btn-play">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section class="bg-light section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-2" data-aos="fade-left">
                    <div class="dt-sc-title script-with-sub-title text-center mb-4">
                        <h2>What sets us apart...</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dt-sc-icon-box type5 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-wrapper">
                            <span class="pe-icon pe-phone"> </span>
                        </div>
                        <div class="icon-content">
                            <h4>24x7 service support</h4>
                            <p>Beware-Essentials offers 24x7 service support to ensure continuous protection and peace of mind. Our dedicated team is always available to assist you with any technical issues, troubleshooting, or queries you may have, ensuring that your security system operates smoothly at all times.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dt-sc-icon-box type5 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-wrapper">
                            <span class="pe-icon pe-file"></span>
                        </div>
                        <div class="icon-content">
                            <h4>Govt. Certified Products</h4>
                            <p>Beware-Essentials offers a range of security surveillance cameras that are certified by government authorities, ensuring compliance with stringent security standards. These cameras are designed to provide reliable and effective surveillance solutions for residential, commercial, and industrial applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dt-sc-icon-box type5" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-wrapper">
                            <span class="pe-icon pe-signal"></span>
                        </div>
                        <div class="icon-content">
                            <h4>Remotely Accessible</h4>
                            <p>Stay connected and in control wherever you are with Beware-Essentials security surveillance cameras. Our cameras offer remote access functionality, allowing you to view live footage, playback recordings, and adjust settings from your smartphone, tablet, or computer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 col-xl-6 col-sm-6">
                    <div class="achievemint-item position-relative d-table">
                        <div class="font-200 higlight-font font-weight-bold text-primary" data-aos="fade-right">10K+</div>
                        <span class="h6 text-uppercase d-ruby position-absolute" data-aos="fade-right"
                            data-aos-delay="100">Installations</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-sm-6">
                    <div class="achievemint-item position-relative d-table">
                        <div class="font-200 higlight-font font-weight-bold text-primary" data-aos="fade-right"
                            data-aos-delay="200">30+</div>
                        <span class="h6 text-uppercase d-ruby position-absolute" data-aos="fade-right"
                            data-aos-delay="300">Cities Served</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?php echo e(asset('assets/images/11.png')); ?>" class="img-fluid br-20" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div data-aos="fade-up">
                                <div class="position-relative z-index-9">
                                    <h4 class="text-uppercase mb-4">RESIDENTIAL APPLICATIONS </h4>
                                    <ul>
                                        <li class="p-0">Entry Points Monitoring</li>
                                        <li class="p-0">Outdoor Surveillance</li>
                                        <li class="p-0">Indoor Monitoring</li>
                                        <li class="p-0">Remote Viewing</li>
                                        <li class="p-0">Motion Detection</li>
                                        <li class="p-0">Two-Way Audio</li>
                                        <li class="p-0">Cloud Storage</li>
                                        <li class="p-0">Integration with Smart Home Devices</li>
                                        <li class="p-0">Professional Installation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="<?php echo e(asset('assets/images/12.png')); ?>" class="img-fluid br-20" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div data-aos="fade-down">
                                <div class="position-relative z-index-9">
                                    <h4 class="text-uppercase mb-4">COMMERCIAL & INDUSTRIAL APPLICATIONS</h4>
                                    <ul>
                                        <li class="p-0">Coverage and Placement</li>
                                        <li class="p-0">High-Resolution Cameras</li>
                                        <li class="p-0">Weatherproof Cameras</li>
                                        <li class="p-0">Remote Monitoring</li>
                                        <li class="p-0">Motion Detection and Alerts</li>
                                        <li class="p-0">Integration with Other </li>
                                        <li class="p-0">Systems Storage and Retention</li>
                                        <li class="p-0">Compliance and Regulations</li>
                                        <li class="p-0">Scalability</li>
                                        <li class="p-0">Professional Installation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto text-center">
                    <img src="<?php echo e(asset('assets/images/img1-1.png')); ?>" data-aos="fade-down">
                    <div class="dt-sc-title script-with-sub-title">
                        <h4 data-aos="fade-down" data-aos-delay="100">Our Testimonials</h4>
                        <h2 data-aos="fade-down" data-aos-delay="200">What People Says About Us</h2>
                    </div>
                </div>
                <div class="col-md-12 m-auto">
                    <div id="testimonial-slider" class="slider" data-aos="fade-down" data-aos-delay="200">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?php echo e(asset('assets/images/testimonial/img-1.jpg')); ?>" alt="">
                            </div>
                            <p class="description">"I would like to add a few lines about Beware, as the service which
                                Beware is providing us at our site is appreciated from the bottom of my heart. We have a
                                very friendly and professional relationship, where we have never been let down on service
                                quality and Beware has always helped whenever approached/needed without doubt. Rest we would
                                like to maintain the same and wish to Beware a very bright future and prosperous growth."
                            </p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">Zomato</h3>
                                    <span class="post">Food Delivery Partner</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?php echo e(asset('assets/images/testimonial/img-2.jpg')); ?>" alt="">
                            </div>
                            <p class="description">"I would recommend CCTV Camera of Beware to anyone who is thinking of
                                having CCTV installed. The service I received was very quick, efficient, and informative. I
                                just wanted to say a BIG thank you to you and your team for being so professional and
                                customer orientated. We look forward to continuing our relationship with your company as we
                                continue to grow."</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">Super Tech Housing Society</h3>
                                    <span class="post">Housing Partner</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?php echo e(asset('assets/images/testimonial/img-3.jpg')); ?>" alt="">
                            </div>
                            <p class="description">"The Beware service team is very prompt, courteous, and professional.
                                They are committed to doing a quality job and the service is impeccable. I have referred
                                Beware to many friends which is a testament to the quality of service that they provide."
                            </p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">Amar Bharti</h3>
                                    <span class="post">Media Partner</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?php echo e(asset('assets/images/testimonial/img-4.jpg')); ?>" alt="">
                            </div>
                            <p class="description">"Dear Beware Team,<br><br>
                                
                                We have recently purchased PTZ Cameras from the "BEWARE" brand for our "Lemon Tree Hotels". Overall quality is excellent with better pricing thus we are 100% satisfied. I would not hesitate in recommending the "BEWARE" brand to anyone who is looking for Security Surveillances products..!!"
                            </p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">Mr. Ashish</h3>
                                    <span class="post">Lemon Tree Hotels</span>
                                </div>
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center mb-4">
                    <img src="<?php echo e(asset('assets/images/img1-1.png')); ?>">
                    <div class="dt-sc-title script-with-sub-title">
                        <h4>Latest Updates</h4>
                        <h2>Our Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                
                    <div class="slider blog-slider w-100">
                <?php $__currentLoopData = @Helper::showblogs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="px-3">
                            <a href="<?php echo e(route('blog-detail',$blog->id)); ?>" class="blog-item">
                            <?php if(isset($blog['image'])): ?>
                            <img class="img-fluid" src="<?php echo e($blog['image']->temporaryUrl()); ?>" alt="edit">
                            <?php elseif(!empty($blog['product_image_url'])): ?> 
                            <img class="img-fluid" src="<?php echo e($blog['product_image_url']); ?>" alt="edit">
                            
                            <?php endif; ?>
                               
                                <div class="blog-content">
                                    <h4><?php echo e($blog->title); ?></h4>
                                    <p>Posted on <?php echo e($blog->created_at->format('j M Y')); ?></p>
                                </div>
                            </a>
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center mb-5">
                    <img src="<?php echo e(asset('assets/images/img1-1.png')); ?>">
                    <div class="dt-sc-title script-with-sub-title">
                        <h4>Our Clients</h4>
                        <!--h2>We Worked For</h2!-->
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div id="client-slider-1" class="slider">
                        <div><img src="<?php echo e(asset('assets/images/clients/client-1.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-2.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-3.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-4.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-5.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-6.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-7.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-8.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-9.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-10.jpg')); ?>" class="img-fluid"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="client-slider-2" class="slider">
                        <div><img src="<?php echo e(asset('assets/images/clients/client-11.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-12.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-13.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-14.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-15.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-16.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-17.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-18.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-19.jpg')); ?>" class="img-fluid"></div>
                        <div><img src="<?php echo e(asset('assets/images/clients/client-20.jpg')); ?>" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scriptBottom'); ?>
    <script>
        function playVideo(dataURL) {
            document.getElementById("youtube-frame").setAttribute("src", dataURL);
        }
        jQuery('#video-popup').click(function() {
            document.getElementById("youtube-frame").setAttribute("src", '');
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/index.blade.php ENDPATH**/ ?>
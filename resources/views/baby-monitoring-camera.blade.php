@extends('layouts.app')
@section('stylesheet')
<style>
    #header{display:none;}
    header{position: fixed;display: block;top:0;left:0;right:0;padding:7px 0;z-index:11;}
    .nav-menu{position: relative;display: flex;align-items: center;align-content: center;justify-content: end}
    .nav-menu li{list-style: none;padding:0;}
    .nav-menu li a{padding:0 15px;font-size:16px;color:#fff}
    .header-banner{background: center/cover no-repeat url('/assets/images/landing/main-bg.jpg');position: relative;display:block;padding:50px 15px;}
    .baby-monitoring{position: relative;top:120px;display: block;margin:auto}
    .main-title{font-weight:600;color:#fff;}
    .main-content{}
</style>
@endsection
@section('content')
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <div id="logo">
                    <a href="/" rel="home"> <img class="normal_logo" src="{{asset('assets/images/logo.png')}}" alt="CCTV" title="CCTV" /> <img class="darkbg_logo" src="https://vigil.wpengine.com/wp-content/themes/vigil/images/light-logo.png" alt="CCTV" title="CCTV" /> </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#home">About</a></li>
                    <li><a href="#home">Features</a></li>
                    <li><a href="#home">Gallery</a></li>
                    <li><a href="#home">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section class="header-banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                <div class="main-content">
                    <h1 class="main-title">The Home Security Camera 360°</h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <img class="baby-monitoring" src="{{asset('assets/images/landing/baby-monitoring.png')}}" alt="baby-monitoring" title="baby-monitoring" />
            </div>
        </div>
    </div>
</section>
<section id="primary" class="content-full-width mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto text-center"> 
                <img src="{{asset('assets/images/img1-1.png')}}" data-aos="fade-down">
                <div class="dt-sc-title script-with-sub-title">
                    <h4 data-aos="fade-down" data-aos-delay="100">BE AWARE - Be Assured, Be Secured!</h4>
                    <h2 data-aos="fade-down" data-aos-delay="200">CCTV Surveillance Systems For Commercial, Residential & Industrial Applications</h2>
                    <p data-aos="fade-down" data-aos-delay="300">We offer state-of-the-art CCTV Surveilance systems & solutions, with a multitude of quality and performance features, that differentiates our products, services & solutions from our competitors. Secure you residential, commercial & industrial properties with BEWARE CCTV Surveilance systems to protect your home or business facilities with top-notch, durable & "Made In India" products.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="w-100">
                <div class="col-lg-12">
                    <h2 class="section-title">New Arrivals</h2>
                    @livewire('frontend.featured-product')
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-boxes-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-box feature-box-simple text-center mb-2 appear-animate animated fadeInRightShorter appear-animation-visible" data-animation-name="fadeInRightShorter" data-animation-delay="200" style="animation-duration: 1000ms;">
                                    <div class="feature-box-icon">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="feature-box-content p-0">
                                        <h3 class="font1 ls-n-10">Free Shipping &amp; Returns</h3>
                                        <h5 class="font1 m-b-3">All Orders Over $99</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box feature-box-simple text-center mb-2 appear-animate animated fadeInRightShorter appear-animation-visible" data-animation-name="fadeInRightShorter" data-animation-delay="400" style="animation-duration: 1000ms;">
                                    <div class="feature-box-icon">
                                        <i class="icon-money"></i>
                                    </div>
                                    <div class="feature-box-content p-0">
                                        <h3 class="font1 ls-n-10">Money Back Guarantee</h3>
                                        <h5 class="font1 m-b-3">Safe &amp; Fast</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box feature-box-simple text-center mb-2 appear-animate animated fadeInRightShorter appear-animation-visible" data-animation-name="fadeInRightShorter" data-animation-delay="600" style="animation-duration: 1000ms;">
                                    <div class="feature-box-icon">
                                        <i class="icon-support"></i>
                                    </div>
                                    <div class="feature-box-content p-0">
                                        <h3 class="font1 ls-n-10">Online Support</h3>
                                        <h5 class="font1 m-b-3">Need Assistence?</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-products-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title">Featured Products</h2>
                <div class="featured-product-slider slider w-100">
                    <div>
                        <div class="col-xl-12 p-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="https://portotheme.com/html/porto_ecommerce/assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    {{-- <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div> --}}
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xl-12 p-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="https://portotheme.com/html/porto_ecommerce/assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    {{-- <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div> --}}
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xl-12 p-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="https://portotheme.com/html/porto_ecommerce/assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    {{-- <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div> --}}
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xl-12 p-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="https://portotheme.com/html/porto_ecommerce/assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    {{-- <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div> --}}
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-xl-12 p-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo21-product.html">
                                        <img src="https://portotheme.com/html/porto_ecommerce/assets/images/demoes/demo21/products/product-1.jpg" width="217" height="217" alt="product">
                                    </a>
                                    {{-- <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div> --}}
                                    <div class="btn-icon-group">
                                        <a href="demo21-product.html" class="btn-icon btn-add-cart">
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo21-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo21-product.html">Digital Camera 16x</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="product-price">$101.00 &ndash; $111.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="primary" class="content-full-width">
    <div class="container">
        <div class="row pt-0">
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="dt-sc-light-bg-overlay">
                    <div class="bg-services w-100">
                        <div class="vc_column_inner">
                            <h5>Our Services</h5>
                            <h2 class="text-primary">"One-stop shop" for your home and office security!</h2>
                            <p>We are proud to state that our services are a culmination of the heavily researched modern and latest technology that we supply, install, and manage. We ensure that the solutions we offer are the best and cater to the latest technological trends.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 row m-0 p-0">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box-holder mb-4">
                        <h3 class="vc_custom_heading text-right">Pan India<br> Reach<br> Service</h3>
                        <img src="{{asset('assets/images/services/product1.png')}}" class="first-img blend-darken">
                        <img src="{{asset('assets/images/services/img-4.png')}}" class="second-img blend-darken">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box-holder mb-4">
                        <h3 class="vc_custom_heading text-right">Free<br> Consultation <br>Service</h3>
                        <img src="{{asset('assets/images/services/img-4.png')}}" class="first-img blend-darken">
                        <img src="{{asset('assets/images/services/img-5.png')}}" class="second-img blend-darken">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box-holder mb-4">
                        <h3 class="vc_custom_heading text-right">Low<br> Maintenance<br> Service</h3>
                        <img src="{{asset('assets/images/services/img-5.png')}}" class="first-img blend-darken">
                        <img src="{{asset('assets/images/services/img-3.png')}}" class="second-img blend-darken">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="box-holder mb-4">
                        <h3 class="vc_custom_heading text-right">Quick<br> Installation<br> Service</h3>
                        <img src="{{asset('assets/images/services/img-3.png')}}" class="first-img blend-darken">
                        <img src="{{asset('assets/images/services/product1.png')}}" class="second-img blend-darken">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="primary" class="content-full-width">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="dt-sc-image-caption" data-aos="fade-right">
                    <div class="dt-sc-image-wrapper">
                        <img src="{{asset('assets/images/img8-2.jpg')}}" class="img-fluid">
                    </div>
                    <div class="dt-sc-image-content">
                        <div class="dt-sc-image-title">
                            <h5>Being alert for you always!</h5>
                            <h3 class="text-primary">One Place For All Security Solutions</h3>
                        </div>
                        <p>Beware is one of India's leading CCTV Security & Surveillance solution provider, offering innovative products & services at very affordable packages. We are well known in the industry for our uncompromising attitude towards quality and service to our customers. </p>
                        <p>Our executive approach in designing and manufacturing systems towards optimal application are backed by latest technologies in CCTV surveilence systems for a myriad of different applications across multiple industries & sectors.</p>
                        <p><a href="{{ route('products') }}" target="_self" title="" class="dt-sc-button   medium   bordered  "> View Our Products </a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-12 p-2" data-aos="fade-left">
                    <div class="bg-img-cont">
                        <div class="dt-sc-title script-with-sub-title">
                            <h2>What sets's us apart...</h2>
                        </div>
                        <div class="dt-sc-icon-box type5 mb-4">
                            <div class="icon-wrapper">
                                <span class="pe-icon pe-camera"> </span>
                            </div>
                            <div class="icon-content">
                                <h4>HD Surveillance System</h4>
                                <p>Don't settle for cheap, low quality camera systems from big box stores that will leave you unsatisfied with video clarity, or the lack of support from the vendor located halfway around the world. We offer complete HD security camera systems that include a NVRs/ DVRs, cameras, cables, POE swithces and power supplies.</p>
                            </div>
                        </div>
                        <div class="dt-sc-icon-box type5 mb-4">
                            <div class="icon-wrapper">
                                <span class="pe-icon pe-cart"></span>
                            </div>
                            <div class="icon-content">
                                <h4>Buy With Confidence</h4>
                                <p>All our items are marked at unbeatable prices so you don't have to waste time hunting discounts. We don't believe in overcharging and pushing customers with deceptive sales tactics.</p>
                            </div>
                        </div>
                        <div class="dt-sc-icon-box type5">
                            <div class="icon-wrapper">
                                <span class="pe-icon pe-signal"></span>
                            </div>
                            <div class="icon-content">
                                <h4>Remotely Accesible</h4>
                                <p>Remote view your security cameras over the web using our Free Apps for the iPhone, iPad, Android, and Windows mobile phones. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-0 mb-5 mb-md-0">
            <div class="col-lg-5 offset-lg-4 col-xl-4 offset-xl-5 col-sm-6 offset-sm-2 mb-4 mb-sm-0">
                <div class="achievemint-item position-relative d-table">
                    <div class="font-200 higlight-font font-weight-bold text-primary" data-aos="fade-right">1K+</div>
                    <span class="h6 text-uppercase d-ruby position-absolute" data-aos="fade-right" data-aos-delay="100">Installations</span>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-sm-4">
                <div class="achievemint-item position-relative d-table">
                    <div class="font-200 higlight-font font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="200">5+</div>
                    <span class="h6 text-uppercase d-ruby position-absolute" data-aos="fade-right" data-aos-delay="300">Security Features</span>
                </div>
            </div>
        </div>
        <div class="row p-0">
            <div class="col-lg-4 mt-5">
                <img src="{{asset('assets/images/11.png')}}" class="position-absolute control-room d-none d-lg-block" alt="">
                <div class="overlay-primary p-5" data-aos="fade-up">
                    <div class="position-relative z-index-9 text-white">
                        <h4 class="text-white text-uppercase mb-4">RESIDENTIAL APPLICATIONS </h4>
                        <p><strong>Peace Of Mind :</strong> Knowing that you have a CCTV system installed by professionals goes quite some way to putting your mind at rest about the safety of your family, home & business.</p>
                        <p><strong>Deterrent and Crime Prevention :</strong> Most criminals like the easy option and will pursue properties that are not protected by CCTV.</p>
                        <p><strong>Remote Monitoring :</strong> Modern systems allow remote monitoring on a computer, tablet or mobile phone via a secure connection over the internet.</p>
                        <!--a href="#" class="underline text-white mt-5 text-uppercase d-table">Read More</a-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-3 sm-mt-30" style="margin-top: 100px">
                <img src="{{asset('assets/images/12.png')}}" class="position-absolute system-setup d-none d-lg-block" alt="">
                <div class="overlay-primary p-5" data-aos="fade-down">
                    <div class="position-relative z-index-9 text-white">
                        <h4 class="text-white text-uppercase mb-4">COMMERCIAL & INDUSTRIAL APPLICATIONS</h4>
                        <p><strong>Crime Deterent :</strong> It goes without saying that having a CCTV camera installed at your premises will act as a serious deterrent to criminals and anyone carrying out illegal activities.</p>
                        <p><strong>Monitor Activities :</strong> CCTV systems are able to keep track of what is happening at the premises where they are installed.</p>
                        <p><strong>Acces Control & Monitoring :</strong> Keep track of personnel moving through your home or business facilities everyday & gain access oversight of all your properties.</p>
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
                <img src="{{asset('assets/images/img1-1.png')}}" data-aos="fade-down">
                <div class="dt-sc-title script-with-sub-title">
                    <h4 data-aos="fade-down" data-aos-delay="100">Our Testimonials</h4>
                    <h2 data-aos="fade-down" data-aos-delay="200">What People Says About Us</h2>
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div id="testimonial-slider" class="slider">
                    <div class="testimonial">
                        <p class="description">"I would like to add a few lines about Beware, as the service which Beware is providing us at our site is appreciated from bottom of my heart. We have a very friendly and professional relationship, where we have never been let down on service quality and Beware has always helped whenever approached/needed without doubt. Rest we would like to maintain the same and wish to Beware a very bright future and prosperous growth."</p>
                        <h3 class="title">Zomato</h3>
                        <div class="pic">
                            <img src="{{asset('assets/images/testimonial/img-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="testimonial">
                        <p class="description">"I would recommend CCTV Camera of Beware to anyone who is thinking of having CCTV installed. The service I received was very quick, efficient, and informative. I just wanted to say a BIG thank you to you and your team for being so professional and customer orientated. We look forward to continuing our relationship with your company as we continue to grow."</p>
                        <h3 class="title">Super Tech Housing Society</h3>
                        <div class="pic">
                            <img src="{{asset('assets/images/testimonial/img-2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="testimonial">
                        <p class="description">"The Beware service team is very prompt, courteous, and professional. They are committed to doing a quality job and the service is impeccable. I have referred Beware to many friends which is a testament to the quality of service that they provide."</p>
                        <h3 class="title">Amar Bharti</h3>
                        <div class="pic">
                            <img src="{{asset('assets/images/testimonial/img-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
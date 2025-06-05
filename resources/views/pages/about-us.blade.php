@extends('layouts.app')
@section('content')
<section class="main-title-section-wrapper default m-0 p-0" style="background:transparent;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-section custom-title">
                    <h1>About Us</h1>
                </div>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span class="fa default"></span>
                    <span class="current">About Us</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="primary" class="content-full-width pt-0">
    <div class="container">
        <div class="row pt-0">
            <div class="col-lg-12 mb-5" data-aos="fade-right">
                <h3 class="mb-0 mt-5">About Company</h3>
                <h5>The Best Security Systems That You Need</h5>
                <div class="dt-sc-small-separator "></div>
                <p>We are committed to providing high-quality CCTV Surveillance Systems for commercial, residential, and industrial applications. </p>
                <p>Our mission is to enhance security and safety by offering innovative, reliable, and affordable security solutions that meet the evolving needs of our customers. We strive to be a leader in the surveillance industry, setting the standard for excellence in product quality, customer service, and technological innovation.</p>
            </div>
            <div class="col-lg-12 mb-5">
                <img src="{{asset('assets/images/collarge.png')}}" class="img-fluid" alt="">
            </div>
            <div class="wpb_wrapper row m-0">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <div class="ult-item-wrap p-3 br-20" data-aos="fade-up" data-aos-delay="300" data-animation="animated no-animation">
                        <div class="dt-sc-icon-box type4 ">
                            <div class="icon-wrapper">
                                <img width="75" height="75" src="{{asset('assets/images/mission.png')}}" class="attachment-full" alt="">
                            </div>
                            <div class="icon-content">
                                <h4><a href="#" title="" target="_self" tabindex="0">Our Mission</a></h4>
                                <p>To exceed our customers’ expectations by delivering innovative and bespoke Security Surveillance systems and solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-none d-lg-block" data-aos="fade-up" data-aos-delay="800">
                    <img src="{{asset('assets/images/dome-camera.png')}}" class="dome-cam-img" alt="">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <div class="ult-item-wrap p-3 br-20" data-aos="fade-up" data-aos-delay="300" data-animation="animated no-animation">
                        <div class="dt-sc-icon-box type4 ">
                            <div class="icon-wrapper">
                                <img width="75" height="75" src="{{asset('assets/images/vision.png')}}" class="attachment-full" alt="">
                            </div>
                            <div class="icon-content">
                                <h4><a href="#" title="" target="_self" tabindex="0">Our Vision</a></h4>
                                <p>To become the one and only store for state-of-the-art CCTV surveillance systems, which helps enable our clients to protect, secure and monitor their business and residential facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <div class="ult-item-wrap p-3 br-20" data-aos="fade-up" data-aos-delay="300" data-animation="animated no-animation">
                        <div class="dt-sc-icon-box type4 ">
                            <div class="icon-wrapper">
                                <img width="75" height="75" src="{{asset('assets/images/quality.png')}}" class="attachment-full" alt="">
                            </div>
                            <div class="icon-content">
                                <h4><a href="#" title="" target="_self" tabindex="0">Our Goals</a></h4>
                                <ul class="list">
                                    <li>Innovation</li>
                                    <li>All-inclusive security surveillance</li>
                                    <li>Responsibility for a better world</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-none d-lg-block"> </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <div class="ult-item-wrap p-3 br-20" data-aos="fade-up" data-aos-delay="300" data-animation="animated no-animation">
                        <div class="dt-sc-icon-box type4 ">
                            <div class="icon-wrapper">
                                <img width="75" height="75" src="{{asset('assets/images/quality.png')}}" class="attachment-full" alt="">
                            </div>
                            <div class="icon-content">
                                <h4><a href="#" title="" target="_self" tabindex="0">Our Services</a></h4>
                                <p>Our services are a culmination of the heavily researched modern and latest technology that we supply, install, and manage. We ensure that the solutions we offer are the best and cater to the latest technological trends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6" data-aos="fade-right">
                <img src="{{asset('assets/images/traffic-camera.jpg')}}" class="img-fluid br-20" alt="">
            </div>
            <div class="col-lg-6 pt-5" data-aos="fade-left">
                <p>With our vast experience, in-house, R&D team, and technical know-how, we are fully equipped and capable of providing world-class solutions, customized according to the requirement of our clients, making sure you can monitor people, places, and assets important to you anytime, anywhere.</p>
                <p></p>
            </div> --}}
        </div>
    </div>
</section>
@endsection
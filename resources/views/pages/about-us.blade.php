@extends('layouts.app')
@section('content')


@if($seotags)
    @section('title'){{ $seotags->meta_title ?? "beware.essential.com" }}@endsection
    @section('meta_description'){{ $seotags->meta_description ?? "meta title" }}@endsection
    @section('meta_keywords'){{ $seotags->meta_keywords ?? "meta title" }}@endsection
    @section('other'){!! $seotags->other !!}@endsection
@endif

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
                <h3 class="mb-0 mt-5">BEWARE CCTV & Surveillance – Your Security is essential! </h3>
                <h5>Your Trusted Partner in Surveillance & Security Solutions</h5>
                <div class="dt-sc-small-separator "></div>
                <p>Welcome to Beware Essentials, India’s fast-emerging brand in video surveillance, electronic security, and smart automation—tailored for Warehouses, Industrial, residential, commercial, industrial, and institutional needs.</p>
                <p>Founded with a mission to simplify security without compromising on technology, Beware Essentials offers a full suite of CCTV cameras, security sensors, metal detectors, access control systems, and networking infrastructure, powered by the latest in AI, IoT, and cloud connectivity.</p>
                <p>Whether you need a home CCTV system, a factory-wide surveillance grid, or a multi-location monitoring setup, we bring you the tools to monitor, deter, and protect—seamlessly and affordably.</p>
            </div>
            
            <div class="col-lg-12 mb-5" data-aos="fade-right">
                <h5>Why Choose Beware Essentials?</h5>
                <div class="dt-sc-small-separator "></div>
                <ul class="list" style="margin-left: 18px;">
                    <li>Make-in-India with Global Tech </li>
                    <li>Smart AI-Powered Features – Night Vision, Motion Alerts, Human Detection</li>
                    <li>Rugged for Indian Conditions – Heat, dust, voltage fluctuations – no problem</li>
                    <li>Mobile App Support – View live feeds, alerts & playback from anywhere</li>
                    <li>Trusted by 100+ Clients – Across logistics parks, retail chains, schools & homes</li>
                    <li>PAN India Delivery & Installation – Warehouses & field support in all major cities</li>
                    <li>B2B & Government-Ready – Enterprise integrations, large-scale project capability</li>
                </ul>
            </div>
            
            <div class="col-lg-12 mb-5" data-aos="fade-right">
                <h5>Serving Diverse Sectors</h5>
                <div class="dt-sc-small-separator "></div>
                <ul class="list" style="margin-left: 18px;">
                    <li>Warehouses & Logistics Parks</li>
                    <li>Factories & Industrial Sites</li>
                    <li>Residential Apartments & Villas</li>
                    <li>Retail Stores & Chains</li>
                    <li>Educational Institutes & Hospitals</li>
                    <li>Government & Public Safety Zones</li>
                </ul>
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
                                <p>To make next-gen surveillance accessible, reliable, and affordable for every Indian household and business—backed by innovation, service, and trust.</p>
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
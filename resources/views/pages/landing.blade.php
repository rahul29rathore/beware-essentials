@extends('layouts.app')
@section('stylesheet')
<style>
  .footer-widgets,.newsletter,
  #menu-wrapper{display:none}
</style>
@endsection
@section('content')
    <div id="slider">
        <div class="dt-sc-main-slider" id="dt-sc-rev-slider">
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery"
                style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_2_1" data-version="6.3.4">
                    <rs-slides>
                        <rs-slide data-key="rs-7" data-title="Slide" data-thumb="" data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="{{ asset('assets/images/revslider/slider3.jpg') }}" title="Home II"
                                class="rev-slidebg" data-no-retina>
                            <rs-layer id="slider-2-slide-7-layer-1" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                data-xy="x:c;y:100px;" data-text="s:35;l:55;fw:600;a:inherit;" data-frame_0="y:50px;tp:600;"
                                data-frame_1="tp:600;st:1700;sp:1000;sR:1700;" data-frame_999="o:0;tp:600;st:w;sR:6300;"
                                style="z-index:5;font-family:Poppins;text-transform:uppercase;">Protect Your Business & Home
                                Now </rs-layer>
                            <rs-layer id="slider-2-slide-7-layer-7" data-type="text" data-color="#ffffff" data-rsp_ch="on"
                                data-xy="x:c;y:150px;" data-text="s:25;l:26;fw:300;a:inherit;"
                                data-padding="t:12;r:15;b:12;l:15;" data-border="bow:0px,0,0,0;"
                                data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;st:2700;sp:1000;sR:2700;"
                                data-frame_999="o:0;tp:600;st:w;sR:5300;"
                                style="z-index:6;background-color:rgba(29,143,232,0);font-family:Poppins;">We guarantee your
                                total safety and security </rs-layer>
                            <rs-layer id="slider-2-slide-7-layer-13" data-type="image" data-rsp_ch="on"
                                data-xy="x:c;y:250;yo:0;" data-text="l:22;a:inherit;" data-dim="w:580px;h:auto;"
                                data-frame_0="y:-100px;tp:600;" data-frame_1="tp:600;st:500;sp:2000;sR:500;"
                                data-frame_999="o:0;tp:600;st:w;sR:6500;" style="z-index:8;"><img
                                    src="{{ asset('assets/images/cams.png') }}" width="400" height="auto"
                                    data-no-retina> </rs-layer>
                        </rs-slide>
                    </rs-slides>
                    </rs-slides>
                </rs-module>
            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
    <div id="main">
      <div class="container">
        <section id="primary" class="content-full-width">
              <div class="row pb-0">
                  <div class="col-lg-12 col-md-12 p-0" data-aos="fade-right">
                      <div class="bg-light p-lg-5 p-3">
                          <h4 class="mb-3 text-center">Get In Touch With Us</h4>
                          <span class="d-block mb-4 text-center">In case you have a question about the services,<br> Submit your details and our representative will call as soon as possible.</span>
                          @livewire('frontend.contact-form')
                      </div>
                  </div>
              </div>
          </section>
      </div>
        <div class="container">
            <section id="primary" class="content-full-width">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="uavc-list-icon uavc-list-icon-wrapper ult-adjust-bottom-margin   ">
                                    <ul class="uavc-list">
                                        <li>
                                            <div class="uavc-list-content" id="list-icon-wrap-7081">
                                                <div class="uavc-list-icon  " data-animation="" data-animation-delay="03"
                                                    style="margin-right:20px;">
                                                    <div class="ult-just-icon-wrapper  ">
                                                        <div class="align-icon" style="text-align:center;">
                                                            <div class="aio-icon-img "
                                                                style="font-size:54px;display:inline-block;">
                                                                <img class="img-icon" alt="null"
                                                                    src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img2.jpg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span data-ultimate-target='#list-icon-wrap-7081 .uavc-list-desc'
                                                    data-responsive-json-new='{"font-size":"","line-height":""}'
                                                    class="uavc-list-desc ult-responsive" style="">
                                                    </p>
                                                    <h4>
                                                        <strong>Our Vision</strong>
                                                    </h4>
                                                    <p>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="768" height="250"
                                                src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img29.jpg"
                                                class="vc_single_image-img attachment-full" alt="" decoding="async"
                                                loading="lazy"
                                                srcset="https://vigil.wpengine.com/wp-content/uploads/2017/09/img29.jpg 768w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img29-500x163.jpg 500w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img29-300x98.jpg 300w"
                                                sizes="(max-width: 768px) 100vw, 768px" />
                                        </div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget
                                            dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                            semper libero.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="uavc-list-icon uavc-list-icon-wrapper ult-adjust-bottom-margin   ">
                                    <ul class="uavc-list">
                                        <li>
                                            <div class="uavc-list-content" id="list-icon-wrap-5757">
                                                <div class="uavc-list-icon  " data-animation="" data-animation-delay="03"
                                                    style="margin-right:20px;">
                                                    <div class="ult-just-icon-wrapper  ">
                                                        <div class="align-icon" style="text-align:center;">
                                                            <div class="aio-icon-img "
                                                                style="font-size:54px;display:inline-block;">
                                                                <img class="img-icon" alt="null"
                                                                    src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img3.jpg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span data-ultimate-target='#list-icon-wrap-5757 .uavc-list-desc'
                                                    data-responsive-json-new='{"font-size":"","line-height":""}'
                                                    class="uavc-list-desc ult-responsive" style="">
                                                    </p>
                                                    <h4>
                                                        <strong>Our Mission</strong>
                                                    </h4>
                                                    <p>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="768" height="250"
                                                src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img30.jpg"
                                                class="vc_single_image-img attachment-full" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="https://vigil.wpengine.com/wp-content/uploads/2017/09/img30.jpg 768w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img30-500x163.jpg 500w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img30-300x98.jpg 300w"
                                                sizes="(max-width: 768px) 100vw, 768px" />
                                        </div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero. Etiam
                                            ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                            Etiam rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="uavc-list-icon uavc-list-icon-wrapper ult-adjust-bottom-margin   ">
                                    <ul class="uavc-list">
                                        <li>
                                            <div class="uavc-list-content" id="list-icon-wrap-9776">
                                                <div class="uavc-list-icon  " data-animation="" data-animation-delay="03"
                                                    style="margin-right:20px;">
                                                    <div class="ult-just-icon-wrapper  ">
                                                        <div class="align-icon" style="text-align:center;">
                                                            <div class="aio-icon-img "
                                                                style="font-size:54px;display:inline-block;">
                                                                <img class="img-icon" alt="null"
                                                                    src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img4.jpg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span data-ultimate-target='#list-icon-wrap-9776 .uavc-list-desc'
                                                    data-responsive-json-new='{"font-size":"","line-height":""}'
                                                    class="uavc-list-desc ult-responsive" style="">
                                                    </p>
                                                    <h4>
                                                        <strong>Our Goals</strong>
                                                    </h4>
                                                    <p>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="768" height="250"
                                                src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img31.jpg"
                                                class="vc_single_image-img attachment-full" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="https://vigil.wpengine.com/wp-content/uploads/2017/09/img31.jpg 768w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img31-500x163.jpg 500w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img31-300x98.jpg 300w"
                                                sizes="(max-width: 768px) 100vw, 768px" />
                                        </div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget
                                            dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                                            semper libero.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid p-0" style="background:#f1f2f7">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 m-auto text-center">
                      <img src="{{ asset('assets/images/img1-1.png') }}" data-aos="fade-down">
                      <div class="dt-sc-title script-with-sub-title">
                          <h4 data-aos="fade-down" data-aos-delay="100">BE AWARE - Be Assured, Be Secured!</h4>
                          <h2 data-aos="fade-down" data-aos-delay="200">CCTV Surveillance Systems For Commercial,
                              Residential & Industrial Applications</h2>
                          <p data-aos="fade-down" data-aos-delay="300">We offer state-of-the-art CCTV Surveilance
                              systems & solutions, with a multitude of quality and performance features, that
                              differentiates our products, services & solutions from our competitors. Secure you
                              residential, commercial & industrial properties with BEWARE CCTV Surveilance systems to
                              protect your home or business facilities with top-notch, durable & "Made In India" products.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="row pt-0">
                  <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                              <div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  ">
                                  <ul class="smile_icon_list right circle with_bg">
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-gears"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-7961"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-7961 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">Surveillance Scam Kit</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-7961 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed
                                                      consequat, leo eget bibendum sodales.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector" data-animation="fadeInUp"
                                              data-animation-delay="03"
                                              style="border-left-width: 1px;border-left-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-wifi"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-6635"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-6635 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">Antenna Tagging System</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-6635 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Donec sodales sagittis magna. Sed consequat, leo eget biben dum
                                                      sodales.  Sed fringilla mauris sit amet nibh.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector" data-animation="fadeInUp"
                                              data-animation-delay="03"
                                              style="border-left-width: 1px;border-left-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-bell-o"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-1335"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-1335 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">Cabinet Alarm &amp; Locks</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-1335 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Sagittis magna. Sed consequat, leo eget biben dum sodales.  Sed
                                                      fringilla mauris sit amet nibh onec sodales.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector" data-animation="fadeInUp"
                                              data-animation-delay="03"
                                              style="border-left-width: 1px;border-left-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                              <div class="wpb_single_image wpb_content_element vc_align_center">
                                  <figure class="wpb_wrapper vc_figure">
                                      <div class="vc_single_image-wrapper   vc_box_border_grey">
                                          <img width="244" height="392"
                                              src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img11-3.png"
                                              class="vc_single_image-img attachment-full" alt=""
                                              decoding="async" loading="lazy"
                                              srcset="https://vigil.wpengine.com/wp-content/uploads/2017/09/img11-3.png 244w, https://vigil.wpengine.com/wp-content/uploads/2017/09/img11-3-187x300.png 187w"
                                              sizes="(max-width: 244px) 100vw, 244px" />
                                      </div>
                                  </figure>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                          <div class="wpb_wrapper">
                              <div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin  ">
                                  <ul class="smile_icon_list left circle with_bg">
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-home"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-9816"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-9816 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">CCTV Design House</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-9816 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Sagittis magna. Sed consequat, leo eget biben dum sodales.  Sed
                                                      fringilla mauris sit amet nibh onec sodales.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector"
                                              style="border-right-width: 1px;border-right-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-user"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-3343"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-3343 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">Smart Clamp Claws</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-3343 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed
                                                      consequat, leo eget bibendum sodales.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector"
                                              style="border-right-width: 1px;border-right-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                      <li class="icon_list_item" style=" font-size:72px;">
                                          <div class="icon_list_icon" data-animation="" data-animation-delay="03"
                                              style="font-size:24px;border-width:1px;border-style:none;background:#108bea;color:#ffffff;border-color:#333333;">
                                              <i class="fa fa-desktop"></i>
                                          </div>
                                          <div class="icon_description" id="Info-list-wrap-2455"
                                              style="font-size:24px;">
                                              <h3 class="ult-responsive info-list-heading"
                                                  data-ultimate-target='#Info-list-wrap-2455 h3'
                                                  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:24px;"}'
                                                  style="">Surveillance DVRs</h3>
                                              <div class="icon_description_text ult-responsive"
                                                  data-ultimate-target='#Info-list-wrap-2455 .icon_description_text'
                                                  data-responsive-json-new='{"font-size":"desktop:13px;","line-height":"desktop:18px;"}'
                                                  style="">
                                                  <p>Donec sodales sagittis magna. Sed consequat, leo eget biben dum
                                                      sodales.  Sed fringilla mauris sit amet nibh.</p>
                                              </div>
                                          </div>
                                          <div class="icon_list_connector"
                                              style="border-right-width: 1px;border-right-style: dashed;border-color: #9b9b9b;">
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="container-fluid p-0">
          <div class="row py-0">
            <div class="col-lg-6">
              <div class="vc_column-inner ">
                  <div class="wpb_wrapper" style="line-height:0">
                    <img width="960" height="700" src="https://vigil.wpengine.com/wp-content/uploads/2017/09/img22.jpg" class="alignnone attachment-full" alt="" decoding="async" loading="lazy"/>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div class="p-4">
                <div class="wpb_wrapper">
                  <h3 style="text-align: left" class="vc_custom_heading vcr_heading-right">Product Video Demo</h3>
                  <div class="wpb_text_column wpb_content_element  vc_custom_1505287918817">
                      <div class="wpb_wrapper">
                          <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                              ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem
                              ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla
                              ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>

                      </div>
                  </div>
                  <div class="wpb_text_column wpb_content_element ">
                      <div class="wpb_wrapper">
                          <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                              rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                          </p>

                      </div>
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class='text-center m-0'>
                        <span class="icon icon-users fa-3x text-primary"></span>
                        <h3 class='dt-sc-donutchart-title m-0'>500+</h3>
                        <p>Projects Completed</p>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class='text-center m-0'>
                        <span class="icon icon-bulb fa-3x text-primary"></span>
                        <h3 class='dt-sc-donutchart-title m-0'>500+</h3>
                        <p>Projects Completed</p>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class='text-center m-0'>
                        <span class="icon icon-like fa-3x text-primary"></span>
                        <h3 class='dt-sc-donutchart-title m-0'>500+</h3>
                        <p>Projects Completed</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    @endsection

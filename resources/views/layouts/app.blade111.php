<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CCTV Security Products | Beware</title>
		<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
		<link rel="stylesheet" href="{{	asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{	asset('assets/css/aos.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/base.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/grid.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/title.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/layout.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/icon-moon.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/pe-icon-7-stroke.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/stroke-gap-icons-style.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/material-design-iconic-font.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/slick.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/slick-theme.css')}}">
		<!--link rel="stylesheet" href="{{	asset('assets/plugins/revslider/revslider.css')}}"-->
		<link rel="stylesheet" href="{{	asset('assets/css/style.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/js_composer.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/background-style.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/ib2-style.min.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/custom.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{	asset('assets/css/normal.css')}}">
		<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
		<!--script type="text/javascript" src="{{asset('assets/plugins/revslider/revslidertools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/plugins/revslider/revslider.min.js')}}"></script-->
		
		@env('production')
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WD4FKPN');</script>
		@endenv
		
		@yield('stylesheet')
		@livewireStyles
    </head>
    <body class="bg-pattern">
        <!--- pubic homepage --->
		<div class="cursor1"></div>
		<div class="cursor2"></div>
		<div class="wrapper">
			<div class="inner-wrapper">
				<div id="smooth-wrapper">
					<div id="smooth-content">
						@include('layouts._shared.header')
						<div id="main">
							@yield('content')
						</div>
						@include('layouts._shared.footer')
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<iframe id="youtube-frame" width="100%" height="449px" src="" title="Beware Diwali Adv | Baby Monitoring Camera" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<span id="scroll_top" class="back-to-top"><i class="fa fa-arrow-circle-o-up"></i></span>
		<script type="text/javascript" src="{{asset('assets/js/slick.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/gsap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/ScrollTrigger.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/socialSharing.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/aos.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/typed.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
		@livewireScripts
		@stack('scriptBottom')
		@env('production')
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD4FKPN"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		@endenv
    </body>
</html>


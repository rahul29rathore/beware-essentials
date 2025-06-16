<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="CCTV Security Products">
    <title>@yield('title','Admin')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!--link href="../../../css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="../../../npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet"-->
    <link href="{{ asset('admin-assets/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet">
	<link href="{{ asset('admin-assets/assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/data-tables/responsive.datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/sweetalert/sweetalert2.min.css') }}" rel="stylesheet">
    <link id="ekka-css" href="{{ asset('admin-assets/assets/css/ekka.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/img/favicon.png') }}" rel="shortcut icon">
	<script>
        window.app_config = <?php echo json_encode([
            'csrfToken' => csrf_token(),
			'url'		=> url('/')
        ]); ?>
    </script>
	@yield('stylesheet')
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	@livewireStyles
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
    <div class="wrapper">
	    @include('layouts._shared.admin._sidebar')
        <div class="ec-page-wrapper">
            @include('layouts._shared.admin._header')
            <div class="ec-content-wrapper">
                @yield('content')
            </div>
            @include('layouts._shared.admin._footer')
        </div>
    </div>
	<div class="modal right fade" id="sidebar-detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog modal-lg fixed-modal-header" role="document">
			<button type="button" class="close btn-slide-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel2"></h4>
				</div>
				<div class="modal-body">
				</div>
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div>
    <!--script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script-->
    <script src="{{ asset('admin-assets/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <!--script src="{{ asset('admin-assets/assets/plugins/jquery/jquery.notify.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/jquery/jquery.bundle.notify.min.js') }}"></script-->
    <script src="{{ asset('admin-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{asset('admin-assets/assets/plugins/sweetalert/sweetalert2.min.js')}}"></script>
    <!--script src="{{ asset('admin-assets/assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/slick/slick.min.js') }}"></script-->
    <!--script src="{{ asset('admin-assets/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/charts/google-map-loader.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/charts/google-map.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/date-range.js') }}"></script-->
    <script src="{{ asset('admin-assets/assets/plugins/options-sidebar/optionswitcher.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/ekka.js') }}"></script>
	<script src="{{ asset('admin-assets/assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
	<script src="{{ asset('admin-assets/assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
	<script src="{{ asset('admin-assets/assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-tagsinput.min.js')}}"></script>
	
	@livewireScripts
	@stack('scriptBottom')
	
</body>

</html>
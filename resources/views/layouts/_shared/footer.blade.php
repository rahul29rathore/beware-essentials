{{-- <section class="newsletter">
	<div class="container">
		<div class="row p-0 align-items-center">
			<div class="col-lg-8">
				<h4 class="text-white text-left m-0">2000+ people have put their trust in CCTV, How about you?</h4>
			</div>
			<div class="col-lg-4 text-right">
				<a href="{{ route('page', 'contact-us') }}" target="_self" title="" class="dt-sc-button medium filled m-0"> Contact Us Now </a>
			</div>
		</div>
	</div>
</section> --}}
<footer id="footer" class="row p-0">
	<div class="footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<aside id="text-2" class="widget widget_text">
						<div class="textwidget">
							<p>
								<img loading="lazy" src="{{asset('assets/images/leadform-logo.png')}}" class="mb-3" alt="" width="120" height="54">
								<br> 
								We are committed to providing high-quality CCTV Surveillance residential, and industrial applications. 
							
							</p>
							<p>Our mission is to enhance security and safety by offering innovative, reliable, and affordable security solutions that meet the evolving needs of our customers.</p>
						</div>
					</aside>
				</div>
				<div class="col-lg-3">
					<aside id="vigil_portfolio_widget-3" class="widget widget_popular_entries alignright">
						<h3 class="widgettitle">Quick Links</h3>
						<div class="textwidget">
							<ul class="dt-sc-fancy-list  footer-link arrow">
								<li><a href="/"><i class="fa fa-graduation-cap mr-2"></i> Home</a></li>
								<li><a href="{{ route('page', 'about-us') }}"><i class="fa fa-gears mr-2"></i> About Us</a></li>
								<li><a href="{{ route('page', 'products') }}"><i class="fa fa-list mr-2"></i> Products</a></li>
								<li><a href="{{ route('page', 'contact-us') }}"><i class="fa fa-list-alt mr-2"></i> Contact</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="col-lg-3">
					<aside id="text-8" class="widget widget_text">
						<h3 class="widgettitle">Important Links</h3>
						<div class="textwidget">
							<ul class="dt-sc-fancy-list  footer-link arrow">
								<li><a href="{{ route('page', 'career') }}"><i class="fa fa-graduation-cap mr-2"></i> Career</a></li>
								<li><a href="{{ route('page', 'blogs') }}"><i class="fa fa-edit mr-2"></i> Blog</a></li>
								<li><a href="{{ route('page', 'privacy-policy') }}"><i class="fa fa-list mr-2"></i> Privacy  Policy</a></li>
								<li><a href="{{ route('page', 'terms-and-conditions') }}"><i class="fa fa-list-alt mr-2"></i> Terms &amp; Conditions</a></li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="col-lg-3">
					<aside id="text-7" class="widget widget_text">
						<h3 class="widgettitle">Contact with us</h3>
						<div class="textwidget">
							<div class="dt-sc-contact-info  "><span class="fa fa-home"> </span>{{ config('settings.address') }}</div>
							<div class="dt-sc-contact-info  "><span class="fa fa-phone"> </span>{{ config('settings.contact_no') }}</div>
							<div class="dt-sc-contact-info  "><span class="fa fa-envelope"> </span>{{ config('settings.email') }}</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="text-white">Copyright © {{ date('Y') }}. All rights reserved.</p>
				</div>
				<div class="col-lg-6">
					<ul class="social-icons justify-content-end p-0">
						{{-- <li><a target="_blank" href="{{ config('settings.facebook', '/') }}"><i class="zmdi zmdi-facebook"></i></a></li>
						<li><a target="_blank" href="{{ config('settings.linkedIn', '/') }}"><i class="zmdi zmdi-linkedin"></i></a></li>
						<li><a target="_blank" href="{{ config('settings.twitter', '/') }}"><i class="zmdi zmdi-instagram"></i></a></li> --}}
						<li><a href="https://www.facebook.com/BewareEssentials"><i class="zmdi zmdi-facebook"></i></a></li>
						<li><a href="https://www.linkedin.com/company/beware-cctv-surveillance-systems/"><i class="zmdi zmdi-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/bewareessentials/"><i class="zmdi zmdi-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
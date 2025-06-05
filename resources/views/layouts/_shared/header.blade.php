<div class="header-top">
	<div class="container-fluid">
		<div class="header-top-content">
			<div class="px-3"><span class="mr-2 text-theme-blue fa fa-envelope"> </span>{{ config('settings.email') }}</div>
			<div class="px-3"><span class="mr-2 text-theme-blue fa fa-phone"> </span>{{ config('settings.contact_no') }}</div>
			<ul class="social-icons">
				<li><a href="https://www.facebook.com/BewareEssentials"><i class="zmdi zmdi-facebook"></i></a></li>
				<li><a href="https://www.linkedin.com/company/beware-cctv-surveillance-systems/"><i class="zmdi zmdi-linkedin"></i></a></li>
				<li><a href="https://www.instagram.com/bewareessentials/"><i class="zmdi zmdi-instagram"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header-wrapper">
	<header id="header">
		<div id="main-header-wrapper-sticky-wrapper" class="sticky-wrapper">
			<div class="container-fluid">
				<div class="main-header">
					<div id="logo" class="pl-4">
						<a href="/" rel="home"> <img class="normal_logo" src="{{asset('assets/images/logo.png')}}" alt="CCTV" title="CCTV" /> <img class="darkbg_logo" src="https://vigil.wpengine.com/wp-content/themes/vigil/images/light-logo.png" alt="CCTV" title="CCTV" /> </a>
					</div>
					<div id="menu-wrapper" class="menu-wrapper menu-default">
						<div class="dt-menu-toggle" id="dt-menu-toggle"> Menu <span class="dt-menu-toggle-icon"></span> </div>
						<nav id="main-menu" class="menu-menu1-container">
							<ul class="menu">
								<!--li class="menu-item current_page_item"><a href="/">Home</a></li-->
								<li class="menu-item"><a href="{{ route('page', 'about-us') }}">About Us</a>
								
							</li>
								<li class="menu-item"><a href="#">Products <i class="zmdi zmdi-caret-down ms-2"></i></a>
									<ul class="dropdown-menu">
									
									@foreach(Helper::allcate()  as $catagory)
									<li><a href="{{ route('products', $catagory->slug) }}"><i class="zmdi zmdi-dot-circle mr-2"></i>{{$catagory->name}} <i class="zmdi zmdi-caret-right ms-2 float-right mt-2"></i></a>
										<!-- <li><a href=""><i class="zmdi zmdi-dot-circle mr-2"></i> Surveillance Cameras <i class="zmdi zmdi-caret-right ms-2 float-right mt-2"></i></a>-->
										@if(@$catagory->categories->isNotEmpty())
											<ul class="sub-dropdown-menu">
											@foreach(@$catagory->categories  as $subcatagory)
												<li><a href="{{ route('products', $subcatagory->slug) }}"><i class="zmdi zmdi-dot-circle mr-2"></i>{{$subcatagory->name}}</a></li>
												@endforeach
												<!-- <li><a href=""><i class="zmdi zmdi-dot-circle mr-2"></i> Network Cameras</a></li> -->
											</ul>
											@endif
										</li> 
										@endforeach
									</ul>
								</li>
								<li class="menu-item"><a href="{{ route('page','career') }}">Career</a></li>
								<li class="menu-item"><a href="{{ route('blogs') }}">Blog</a></li>
								<li class="menu-item"><a href="{{ route('page', 'contact-us') }}">Contact Us</a></li>
								@guest
								{{-- <li class="menu-item "><a href="{{ route('login') }}"><i class="zmdi zmdi-sign-in"></i> Login</a></li> --}}
								{{-- <li class="menu-item "><a href="{{ route('register') }}"><i class="zmdi zmdi-account-add"></i> Register</a></li> --}}
								<li class="menu-item pt-2 px-3"><button type="button" class="btn btn-theme-blue mt-lg-3 btn-leadform">Become a Distributor</button></li>
								@else
								<li class="menu-item dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-sign-in"></i> {{ Auth::user()->name }} </a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										@if(auth()->user()->is_admin)
										<a class="dropdown-item" href="{{ route('admin.dashboard') }}">
										     Admin Dashboard 
										</a>
										@endif
										
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>	
							    @endguest
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
@livewire('distributer')
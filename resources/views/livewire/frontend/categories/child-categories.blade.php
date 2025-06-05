<div>
	<section class="main-title-section-wrapper default" style="background:transparent;">
		<div class="container">
			<div class="main-title-section custom-title">
				<h1>Products</h1>
			</div>
			<nav aria-label="breadcrumb" class="theme-breadcrumb product-breadcrub">
				<ol class="breadcrumb">
				    <li class="breadcrumb-item" aria-current="page">
						<a href="/" class="">Home</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						<a href="{{ route('products') }}" class="">Products</a>
					</li>
				</ol>
			</nav>
			<p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
		</div>
	</section>
	<div class="container">
		<section id="primary" class="content-full-width pt-0">
			<div class="row pt-0 products-grid-view full-width-list">
			{{--<div class="col-lg-3">
					<div id="sidebar" class="shop-sidebar">
						<div class="widget widget_product_categories">
							<h4 class="widget-title down-line">Categories</h4>
							<ul class="mb-0 mt-5">
								@foreach($categories as $category)
								<li>
									<a href="{{ route('products', $category->slug ) }}" data-val="0" class="d-flex align-items-center justify-content-between text-dark">{{ $category->name }}
										<span class="fa fa-angle-down text-muted"></span>
									</a>
									@if($category->categories->count())
									<ul>
										@foreach($category->categories as $sub_category)
										<li><a href="{{ route('products', $sub_category->slug ) }}">{{ $sub_category->name }}</a></li>
										@endforeach
									</ul>
									@endif
								</li>
								@endforeach
							</ul>
						</div>
					</div>
			</div>--}}
				<div class="col-lg-12">
					<div class="col-lg-12">
						<!--div class="widget widget_tag_cloud">
							<div class="tagcloud">
								<ul>
									<li><a href="#">Finger Print Sensor</a></li>
									<li><a href="#">Door Frame Metal Detector</a></li>
									<li><a href="#">Single Core Swing Barrier Gate</a></li>
									<li><a href="#">Security Computer</a></li>
									<li><a href="#">Web Security</a></li>
									<li><a href="#">Finger Print Sensor</a></li>
									<li><a href="#">Door Frame Metal Detector</a></li>
									<li><a href="#">Single Core Swing Barrier Gate</a></li>
									<li><a href="#">Security Computer</a></li>
									<li><a href="#">Web Security</a></li>
								</ul>
							</div>
						</div-->
					</div>
					
					<ul class="products">
						@foreach($categories as $category)
						<li class="">
							<div class="product-link">

								<a href="{{ route('products', $category->slug ) }}">
									<img src="{{ $category->category_image_url }}" alt="image not found!">
									<h6><span data-mh="cat-name">{{ $category->name }}</span></h6>
									<!--img src="{{ $category->category_image_url }}" alt="image not found!"-->
								</a>
								@if($category->categories->count())
								<ul>
									@foreach($category->categories as $sub_category)
									<li style="transition-delay:{{ ( ( $loop->index/10 ) ) }}s"><a href="{{ route('products', $sub_category->slug ) }}">{{ $sub_category->name }}</a></li>
									@endforeach
								</ul>
								@endif
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
	  </section>
	</div>
</div>
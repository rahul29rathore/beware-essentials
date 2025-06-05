<div>
	<section class="main-title-section-wrapper default" style="background:url({{ asset('assets/images/img1-1.jpg') }}) left top / auto repeat scroll;">
		<div class="container">
			<div class="main-title-section">
				<h1>Products</h1>
			</div>
			<nav aria-label="breadcrumb" class="theme-breadcrumb product-breadcrub">
				<ol class="breadcrumb">
				    <li class="breadcrumb-item" aria-current="page">
						<a href="/" class="">Home</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						<a href="{{ route('categories') }}" class="">Categories</a>
					</li>
				</ol>
			</nav>
		</div>
	</section>
	<div class="container">
		<section id="primary" class="content-full-width">
			<div class="row pt-0 products-grid-view">
				<div class="col-lg-3">
					<div id="sidebar" class="shop-sidebar">
						<div class="widget widget_product_categories">
							<h4 class="widget-title down-line">Categories</h4>
							<ul class="mb-0 mt-5">
								@foreach($categories as $category)
								<li>
									<a href="javascript:void(0)" data-val="0" @if($category->categories->count()) class="d-flex align-items-center justify-content-between text-dark" @endif>{{ $category->name }}
										<span class="fa fa-angle-down text-muted"></span>
									</a>
									@if($category->categories->count())
									<ul>
										@foreach($category->categories as $sub_category)
										<li><a href="{{ route('categories', $sub_category->slug ) }}">{{ $sub_category->name }}</a></li>
										@endforeach
									</ul>
									@endif
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
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
								<a href="javascript:void(0)" @if($category->categories->count()) data-toggle="dropdown" @endif>
									<img src="{{ $category->category_image_url }}" alt="image not found!">
									<h6><span data-mh="cat-name">{{ $category->name }}</span></h6>
									<!--img src="{{ $category->category_image_url }}" alt="image not found!"-->
								</a>
								@if($category->categories->count())
								<ul>
									@foreach($category->categories as $sub_category)
									<li style="transition-delay:{{ ( ( $loop->index/10 ) ) }}s"><a href="{{ route('categories', $sub_category->slug ) }}">{{ $sub_category->name }}</a></li>
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
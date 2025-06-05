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
					{!! $selected_category->getBreadcrub('categories') !!}
				</ol>
			</nav>
		</div>
	</section>
	<div class="container">
		<section id="primary" class="content-full-width">
			<div class="row pt-0 products-grid-view">
				<!--div class="col-lg-3">
					<div id="sidebar" class="shop-sidebar">
						<div class="widget widget_product_categories">
							<h4 class="widget-title down-line">Categories</h4>
							<ul class="mb-0 mt-5">
								@foreach($categories as $category)
								<li class="{{ ( @$selected_category->parent_id == $category->id ) ? 'active' : '' }}">
									<a href="javascript:void(0)" data-val="0" class="d-flex align-items-center justify-content-between text-dark">{{ $category->name }}
										<span class="fa fa-angle-down text-muted"></span>
									</a>
									@if($category->categories->count())
									<ul>
										@foreach($category->categories as $sub_category)
										<li class="{{ ( @$selected_category->id == $sub_category->id || $selected_category->parent_id == $sub_category->id ) ? 'active' : '' }}">
											<a href="{{ route('categories', $sub_category->slug) }}" >{{ $sub_category->name }}</a>
										</li>
										@endforeach
									</ul>
									@endif
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div-->
				<div class="col-lg-12">
					<div class="col-lg-12">
						<div class="widget widget_tag_cloud">
							<!--div class="tagcloud">
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
							</div-->
							<div class="tagcloud">
							   <ul>
								  <li><a href="javascript:void(0)" wire:click="loadCategoryData('{{ $selected_category->slug }}', true)">All</a></li>
								  @if($selected_category->categories->count())
									  @foreach($selected_category->categories as $selected_sub_category)
									  <li>
										 <a href="javascript:void(0)" wire:click="loadCategoryData('{{ $selected_sub_category->slug }}', true)">{{ $selected_sub_category->name ?? ''}}</a>
										 @if($selected_sub_category->categories->count())
										 <ul>
											@foreach($selected_sub_category->categories as $selected_sub_sub_category)
											<li><a href="javascript:void(0)" wire:click="loadCategoryData('{{ $selected_sub_sub_category->slug }}', true )">{{ $selected_sub_sub_category->name }}</a></li>
											@endforeach
										 </ul>
										 @endif
									  </li>
									  @endforeach
								  @endif
							   </ul>
							</div>
							
						</div>
					</div>
					@if($products->count())
					<ul class="products" data-aos="fade-up" wire:ignore.self>
						@foreach($products as $product)
						<li class="product-item hover-img-zoom">
							<div class="product-img overflow-hidden bg-gray transation">
								<a href="{{ route('product', $product->slug) }}" class="product-link">
									<img src="{{ $product->product_image_url }}" alt="image not found!">
									<img src="{{ $product->product_image_url }}" alt="image not found!">
								</a>
							</div>
							<div class="content pt-3 px-3 text-center">
								<h6 class="font-weight-medium title m-0">
									<a href="{{ route('product', $product->slug) }}"  class="text-secondary hover-text-primary">{{ $product->name }}</a>
								</h6>
								<span class="d-block mb-0 font-weight-medium text-muted">{{ $product->category->name ?? '' }}</span>
							</div>
						</li>
						@endforeach
					</ul>
					
					@if( $products->total() > $perpage )
					<div class="col-lg-12 text-center">
						<button class="btn btn-danger float-none" wire:click='loadMore'
							wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
							Load more.. &nbsp;
							<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
								wire:click='loadMore' wire:loading></span>
						</button>
					</div>
					@endif
					
					@else
					<p class="mt-5 pl-3">No Result found!! </p>
					@endif
				</div>
			</div>
	   </section>
	</div>
</div>
@push('scriptBottom')
<script type="text/javascript">
    jQuery(document).on('click', '.load-more', function(){
		//window.livewire.emit('load-more');
	});
	
	window.onscroll = function (ev) {
		console.log('scrolling...');
		if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			console.log('calling...');
			//window.livewire.emit('load-more');
		}
	};
</script>
@endpush
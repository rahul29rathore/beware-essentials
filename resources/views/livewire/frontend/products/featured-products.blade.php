<div data-aos="fade-up" data-aos-delay="400" class="slider cctv-products">
    
    @foreach($products as $product)
	
	<div class="p-3">
		
		<div class="product-default">
			
			<figure>
			
				<a href="{{ isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products') }}">
					<img src="{{ $product->product_image_url }}" alt="" width="217" height="217" alt="product">
				</a>
				{{-- <div class="label-group">
					<div class="product-label label-hot">New</div>
				</div> --}}
				<div class="btn-icon-group">
					<a href="{{ isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products') }}" class="btn-icon btn-add-cart">
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
				<a href="{{ isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products') }}" class="btn-quickview" title="Quick View">Quick View</a>
			</figure>
			<div class="product-details">
				<h3 class="product-title">
					<a href="{{ isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products') }}">{{ $product->name }}</a>
				</h3>
				<div class="category-wrap">
					<div class="category-list">
						<a href="{{ isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products') }}" class="product-category" title="{{ $product->category->name ?? '' }} {{ $product->product_type->name ?? '' }}">{{ $product->category->name ?? '' }} {{ $product->product_type->name ?? '' }}</a>
					</div>
				</div>
				{{-- <div class="price-box">
					<span class="product-price">$101.00 &ndash; $111.00</span>
				</div> --}}
			</div>


		  </div>
	   </div>

	@endforeach

</div>
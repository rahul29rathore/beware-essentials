<fieldset class="margin-top-30">
	<legend class="data-title">Product Details</legend>
	<table class="table table-bordered">
		<tr>
			<th width="220" class="bg-lightgray">Product ID</th>
			<td>{{ $product->id }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Product Name</th>
			<td><a href="{{ route('product', $product->slug) }}" target="_blank">{{ $product->name }}</a></td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Product Category</th>
			<td>{{ $product->category->name ?? ''}}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Product Type</th>
			<td>{{ $product->product_type->name ?? ''}}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Product Price</th>
			<td>&#8377; {{ $product->price }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Featured</th>
			<td>{{ $product->featured == 1 ? 'Yes' : 'No' }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">New Arrivals</th>
			<td>{{ $product->new_arrivals == 1 ? 'Yes' : 'No' }}</td>
		</tr>
		@if($product->media_brochure)
		<tr>
			<th width="220" class="bg-lightgray">Product Brochure</th>
			<td><a href="{{ optional($product->media_brochure)->getUrl() }}" target="_blank" ><i class="fa fa-file-pdf-o fa-lg"></i>{{ optional($product->media_brochure)->name }}</a></td>
		</tr>
		@endif
		<tr>
			<th width="220" class="bg-lightgray">Short Description</th>
			<td>{!! $product->short_description !!}</td>
		</tr>
	</table>
</fieldset>

<fieldset class="margin-top-30 d-none">
	<legend class="data-title">Product Specifications</legend>
	<table class="table table-bordered">
		<tr>
			<th width="220" class="bg-lightgray"></th>
			<td></td>
		</tr>
	</table>
</fieldset>

<fieldset class="margin-top-30 d-none">
	<legend class="data-title">Product Images</legend>
	<ul class="p-images">
		<li><img src="{{ $product->product_image_url }}" class="" alt="{{ $product->name }}"></li>
	    @foreach($product->images as $image)
		<li><img src="{{ $image->getUrl() }}" class="" alt="{{ $product->name }}"></li>
		@endforeach
	</ul>
</fieldset>
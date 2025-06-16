<fieldset class="margin-top-30">
	<legend class="data-title">Category Details</legend>
	<table class="table table-bordered">
		<tr>
			<th width="220" class="bg-lightgray">ID</th>
			<td>{{ $category->id }}</td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">Name</th>
			<td><a href="{{ route('products', $category->slug) }}" target="_blank"> {{ $category->name }}</a></td>
		</tr>
		<tr>
			<th width="220" class="bg-lightgray">No. of product</th>
			<td>{{ $category->products->count() }}</td>
		</tr>
		
		@if($category->parent)
		<tr>
			<th width="220" class="bg-lightgray">Parent Category</th>
			<td>{{ optional($category->parent)->name ?? 'N/A' }}</td>
		</tr>
		@endif
		<tr>
			<th width="220" class="bg-lightgray">Created At</th>
			<td>{{ $category->created_at->format('jS M Y h:i a') }}</td>
		</tr>
	</table>
</fieldset>
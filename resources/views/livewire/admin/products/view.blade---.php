<div>
	<div class="table-responsive">
		<div  class="dataTables_wrapper dt-bootstrap5 no-footer">
			<div class="row justify-content-between top-information">
			   <div wire:ignore class="dataTables_length" id="responsive-data-table_length">
				  <label>
					 Show 
					 <select wire:model="perpage" name="responsive-data-table_length" aria-controls="responsive-data-table" class="form-select form-select-sm">
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="50">50</option>
						<option value="100">100</option>
					 </select>
					 
				  </label>
			   </div>
			   <div  class="dataTables_filter"><label>Search:<input type="search" wire:model.debounce.300ms="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div>
			</div>
			<table class="table dataTable no-footer" style="width:100%">
				<thead>
				   <tr>
					  <th class="sorting {{ $sortBy == 'id' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('id', '{{ $sortBy == 'id' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">ID</th>
					  <th class="sorting {{ $sortBy == 'name' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('name', '{{ $sortBy == 'name' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Name</th>
					  <th class="">Category</th>
					  <th class="sorting {{ $sortBy == 'newarrivals' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('newarrivals', '{{ $sortBy == 'newarrivals' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">New Arrivals</th> 
					  <th class="sorting {{ $sortBy == 'featured' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('featured', '{{ $sortBy == 'featured' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Featured</th>
					  
					  <th class="sorting {{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('created_at', '{{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Date</th>
					  
					  <th>Action</th>
				   </tr>
				   
				</thead>
				<tbody>
				   @foreach($products as $product)
				   <tr>
					  <td>{{ $product->id }}</td>
					  <!--td><img class="tbl-thumb" src="assets/img/products/p1.jpg" alt="Product Image"></td-->
					  <td><a href="{{ route('product', $product->slug) }}" target="_blank"> {{ $product->name }}</a></td>
					  <td>{{ $product->category->name ?? '' }}</td>
					  <td>{{ $product->newarrivals == 1 ? 'Yes' : 'No' }}</td>
					  <td>{{ $product->featured == 1 ? 'Yes' : 'No' }}</td>
					  <td>{{ $product->created_at->format('jS M Y') }}</td>
					  <td>
						 <div class="btn-group mb-1">
							<a href="javascript:void(0)" data-modal-title="{{ $product->name }}"
                                    onclick="loadDetailModal(this,'{{ route('admin.products.show', $product->id) }}')" class="btn btn-outline-success">Info</a> <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"><span class="sr-only">Info</span></button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('admin.products.edit', $product->id) }}">Edit</a> 
								<a class="dropdown-item" href="javascript:void(0)" wire:click="setSelected({{ $product->id }})">Delete</a>
							</div>
						 </div>
					  </td>
				   </tr>
				   @endforeach
				</tbody>
			 </table>
			 <div class="row justify-content-between bottom-information">
				   @if($products->total())
				   <div class="dataTables_info"  role="status" aria-live="polite">
						Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
				   </div>
				   {{ $products->links('pagination::livewire-bootstrap') }}
				   @else
					   <p class="text-center">No search result{!! !empty($search) ? ' for keword <strong>'.$search.'</strong>' : '.' !!}</p>
				   @endif
			 </div>
		</div>
	</div>
</div>
@push('scriptBottom')
<script>
	Livewire.on('showConfirmModal', function() {
		Swal.fire({
			title: 'Are you sure?',
			text: 'This record and it`s details will be permanantly deleted!',
			icon: 'warning',
			showCancelButton: true,
			showConfirmButton: true,
			buttons: ["Cancel", "Yes!"],
		}).then(function(result) {
			if (result.isConfirmed) {
				//alert('deleted');
				Livewire.emit('confirmDelete');
			}
		});

	});
	
</script>	
@endpush

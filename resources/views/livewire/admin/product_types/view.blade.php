<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Product Types</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Product Types</p>
	 </div>
	 <div><a href="javascript:void(0)" wire:click="create()" class="btn btn-primary">Add Product Type</a></div>
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-body">
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
								  <th class="sorting {{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('created_at', '{{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Date</th>
								  <th>Action</th>
							   </tr>
							</thead>
							<tbody>
							   @foreach($products_types as $products_type)
							   <tr>
								  <td>{{ $products_type->id }}</td>
								  <td>{{ $products_type->name }}</td>
								  <td>{{ $products_type->created_at->format('jS M Y') }}</td>
								  <td>
									 <div class="btn-group mb-1">
										<button type="button" class="dropdown-toggle dropdown-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"><span class="mdi mdi-dots-horizontal"></span>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="javascript:void(0)" wire:click="edit({{ $products_type->id }})">Edit</a> 
											<a class="dropdown-item" href="javascript:void(0)" wire:click="setSelected({{ $products_type->id }})">Delete</a>
										</div>
									 </div>
								  </td>
							   </tr>
							   @endforeach
							</tbody>
						 </table>
						 <div class="row justify-content-between bottom-information">
							   @if($products_types->total())
							   <div class="dataTables_info"  role="status" aria-live="polite">
									Showing {{ $products_types->firstItem() }} to {{ $products_types->lastItem() }} of {{ $products_types->total() }} entries
							   </div>
							   {{ $products_types->links('pagination::livewire-bootstrap') }}
							   @else
								   <p class="text-center">No search result{!! !empty($search) ? ' for keword <strong>'.$search.'</strong>' : '.' !!}</p>
							   @endif
						 </div>
					</div>
				</div>
				
				<!-- SLIDE POPUP -->
				<div wire:ignore.self class="modal right fade" id="product-type-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
					<div class="modal-dialog modal-lg fixed-modal-header" role="document">
						<button type="button" class="close btn-slide-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">{{ $update ? 'Update Product Type' : 'Create Product Type' }} </h4>
							</div>
							<div class="modal-body">
								@if ($update)
								<form wire:submit.prevent="update()" class="row" method="POST">
								@else
								<form wire:submit.prevent="store()" class="row" method="POST">
								@endif
									<div class="col-lg-9 mx-auto mt-3">
										<div class="col-lg-12 mb-lg-3">
											<label for="title" class="col-form-label">Product Type</label>
											<input wire:model.lazy="name" type="text" class="form-control" placeholder="Enter product type..">
											@error('name') <span class="text-danger">{{ $message }}</span>@enderror
										</div>
										<div class="text-center">
											@if ($update)
											<button type="submit" class="btn btn-primary mt-3">Update</button>
											@else
											<button type="submit" class="btn btn-primary mt-3">Create</button>
											@endif
										</div>
									</div>
								</form>
							</div>
						</div><!-- modal-content -->
					</div><!-- modal-dialog -->
				</div><!-- modal -->
				
			</div>
		</div>
	 </div>
  </div>
</div>
@push('scriptBottom')
<script>
    Livewire.on('showCreateModal', function() {
		$('#product-type-modal').modal('show');
	});
	Livewire.on('hideCreateModal', function() {
		$('#product-type-modal').modal('hide');
	});
	
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

<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Product Leads</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Product Leads</p>
	 </div>
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
								  <th>Product</th>
								  <th class="sorting {{ $sortBy == 'email' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('email', '{{ $sortBy == 'email' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Email</th>
								  <th class="sorting {{ $sortBy == 'contact_no' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('contact_no', '{{ $sortBy == 'contact_no' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Contact No</th>
								  <th>Message</th>
								  <th class="sorting {{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc' ) : '' }}" wire:click="fetchOrder('created_at', '{{ $sortBy == 'created_at' ? ( $sortOrder == 'asc' ? 'desc' : 'asc' ) : 'asc' }}')">Date</th>
							   </tr>
							</thead>
							<tbody>
							   @foreach($leads as $lead)
							   <tr>
								  <td>{{ $lead->id }}</td>
								  <td>{{ $lead->name }}</td>
								  <td>
								    @if($lead->product)
										<a href="javascript:void(0)" data-modal-title="{{ $lead->product->name }}" onclick="loadDetailModal(this,'{{ route('admin.products.show', $lead->product->id) }}')">{{ $lead->product->name }}</a> 
									@else
										{{ $lead->product_name }}
									@endif
									
								  </td>
								  <td>{{ $lead->email }}</td>
								  <td>{{ $lead->contact_no }}</td>
								  <td><p>{{ $lead->message }}</p></td>
								  <td>{{ $lead->created_at->format('jS M Y') }}</td>
								  <td>
									 
								  </td>
							   </tr>
							   @endforeach
							</tbody>
						 </table>
						 <div class="row justify-content-between bottom-information">
							   @if($leads->total())
							   <div class="dataTables_info"  role="status" aria-live="polite">
									Showing {{ $leads->firstItem() }} to {{ $leads->lastItem() }} of {{ $leads->total() }} entries
							   </div>
							   {{ $leads->links('pagination::livewire-bootstrap') }}
							   @else
								   <p class="text-center">No search result{!! !empty($search) ? ' for keword <strong>'.$search.'</strong>' : '.' !!}</p>
							   @endif
						 </div>
					</div>
				</div>

			</div>
		</div>
	 </div>
  </div>
</div>
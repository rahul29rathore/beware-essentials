<div>
	<div class="table-responsive">
		<div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
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
			   <div id="responsive-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" wire:model.debounce.300ms="search" class="form-control form-control-sm" placeholder="" aria-controls="responsive-data-table"></label></div>
			</div>
			<table id="responsive-data-table-1" class="table" style="width:100%">
				<thead>
				   <tr>
					  <th>ID</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Role</th>
					  <!--th>Status</th-->
					  <th>Date</th>
					  <th>Action</th>
				   </tr>
				</thead>
				<tbody>
				   @foreach($users as $user)
				   <tr>
					  <td>{{ $user->id }}</td>
					  <!--td><img class="tbl-thumb" src="assets/img/products/p1.jpg" alt="Product Image"></td-->
					  <td>{{ $user->name }}</td>
					  <td>{{ $user->email }}</td>
					  <td>
					       @if($user->is_super)
							   Super Admin
						   @else
							<a href="javascript:void(0)" wire:click="openUserTypeModal({{ $user->id }})">{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</a>
					       @endif
					  </td>
					  <!--td>active</td-->
					  <td>{{ $user->created_at->format('jS M Y') }}</td>
					  <td>
						 <div class="btn-group mb-1">
							<button type="button" class="dropdown-toggle dropdown-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"><span class="mdi mdi-dots-horizontal"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0)" data-modal-title="{{ $user->name }} ( {{ $user->email }})"
                                    onclick="loadDetailModal(this,'{{ route('admin.users.show', $user->id) }}')"><i class="mdi mdi-eye"></i> View Detail</a> 
							</div>
						 </div>
					  </td>
				   </tr>
				   @endforeach
				</tbody>
			 </table>
			 <div class="row justify-content-between bottom-information">
				   @if($users->total())
				   <div class="dataTables_info" id="responsive-data-table_info" role="status" aria-live="polite">
						Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
				   </div>
				   {{ $users->links('pagination::livewire-bootstrap') }}
				   @else
					   <p class="text-center">No search result{!! !empty($search) ? ' for keword <strong>'.$search.'</strong>' : '.' !!}</p>
				   @endif
			 </div>
		</div>
	</div>
	
	<!-- SLIDE POPUP -->
	<div wire:ignore.self class="modal right fade" id="user-type-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog modal-lg fixed-modal-header" role="document">
			<button type="button" class="close btn-slide-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update User Type</h4>
				</div>
				<div class="modal-body">
					<form wire:submit.prevent="changeUserType()" class="row" method="POST">
						<div class="col-lg-9 mx-auto mt-3">
							<div class="col-lg-12 mb-lg-3">
							    <select wire:model="user_type" class="form-control">
								    @foreach(\App\User::UserTypes as $role_id=>$type)
								    <option value="{{ $role_id }}">{{ $type }}</option>
									@endforeach
								</select>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary mt-3">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
</div>
@push('scriptBottom')
<script>
    Livewire.on('showEditUserTypeModal', function() {
		$('#user-type-modal').modal('show');
	});
	Livewire.on('hideEditUserTypeModal', function() {
		$('#user-type-modal').modal('hide');
	});
</script>	
@endpush
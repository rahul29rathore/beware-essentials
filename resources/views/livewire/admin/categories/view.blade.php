<div class="row">
	<div class="col-xl-4 col-lg-12">
		<div class="ec-cat-list card card-default mb-24px">
			<div class="card-body">
				<div class="ec-cat-form">
					<h4>Add New Category</h4>
					<p class="d-none">@json($category)</p>
					@if ($selected_id)
					<form wire:submit.prevent="save" class="row g-3">
						@else
						<form wire:submit.prevent="store" class="row g-3">
							@endif
							@if($this->template == 'main-category')
							<div class="form-group row">
								<label class="col-12 col-form-label">Parent Category</span></label>
								<div class="col-12">
									<select wire:model="category.parent_id" name="parent_id" class="form-control">

										<option value="">Select Parent</option>

										@foreach($parent as $parent)
										<option value="{{@$parent['id']}}">{{@$parent['name']}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row ec-vendor-uploads">
								<div class="ec-vendor-img-upload">
									<div class="ec-vendor-main-img">
										<div class="avatar-upload">
											<div class="avatar-edit">
												<input type="file" wire:model="category.image" id="imageUpload"
													class="ec-image-upload" accept=".png, .jpg, .jpeg">
												<label for="imageUpload"><img
														src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}"
														class="svg_img header_svg" alt="edit"></label>
											</div>
											<div class="avatar-preview ec-preview">
												<div class="imagePreview ec-div-preview">
													@if (isset($category['image']))
													<img class="ec-image-preview"
														src="{{ $category['image']->temporaryUrl() }}" alt="edit">
													@elseif (!empty($category['category_image_url']))
													<img class="ec-image-preview"
														src="{{ $category['category_image_url'] }}" alt="edit">
													@else
													<img class="ec-image-preview"
														src="{{ asset('admin-assets/assets/img/products/category-upload-preview.jpg') }}"
														alt="edit">
													@endif

												</div>
											</div>
										</div>
										@error('category.image')
										<p class="error text-danger">{{ $message }} </p>
										@enderror
									</div>
								</div>
							</div>
							@endif
							<div class="form-group row">

								<label for="text" class="col-12 col-form-label">Name <span
										class="text-danger">*</span></label>
								<div class="col-12">
									<input id="text" wire:model="category.name" class="form-control here slug-title">
									@error('category.name')
									<p class="error text-danger">{{ $message }} </p>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label for="slug" class="col-12 col-form-label">Slug <span
										class="text-danger">*</span></label>
								<div class="col-12">
									<input id="slug" wire:model="category.slug" class="form-control here set-slug">
									<small>The “slug” is the URL-friendly version of the name. It is usually all
										lowercase and contains only letters, numbers, and hyphens.</small>
									@error('category.slug')
									<p class="error text-danger">{{ $message }} </p>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-12 col-form-label">Sort Description</label>
								<div class="col-12">
									<textarea wire:model="category.short_description" cols="40" rows="2"
										class="form-control"></textarea>
									@error('category.short_description')
									<p class="error text-danger">{{ $message }} </p>
									@enderror
								</div>
							</div>
							@if($this->template == 'sub-category')
							<div class="form-group row">
								<label for="parent-category" class="col-12 col-form-label">Parent Category <span
										class="text-danger">*</span></label>
								<div class="col-12">
									<select id="parent-category" wire:model="category.parent_id" name="parent-category"
										class="custom-select">
										<option value="">-- Select Parent Category --</option>
										@foreach($parent_categories as $parent_category)
										<option value="{{ $parent_category->id }}">{{ $parent_category->name }}</option>
										@endforeach
									</select>
									@error('category.parent_id')
									<p class="error text-danger mb-3">{{ $message }} </p>
									@enderror
								</div>
							</div>
							@endif
							<!--div class="form-group row">
					   <label class="col-12 col-form-label">Full Description</label>
					   <div class="col-12"><textarea id="fulldescription" name="fulldescription" cols="40" rows="4" class="form-control"></textarea></div>
					</div>
					<div class="form-group row">
					   <label class="col-12 col-form-label">Category Tags <span>( Type and make comma to separate tags )</span></label>
					   <div class="col-12"><input class="form-control" id="group_tag" name="group_tag" placeholder="" data-role="tagsinput"></div>
					</div-->
							<div class="row">
								<div class="col-12">
									@error('category.image')
									<p class="error text-danger mb-3">{{ $message }} </p>
									@enderror
									<div class="form-group row">
										<label for="meta_title" class="col-12 col-form-label">Meta Title</label>
										<div class="col-12">
											<input type="text" id="meta_title" wire:model="category.meta_title"
												class="form-control">
											@error('category.meta_title')
											<p class="error text-danger">{{ $message }}</p>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="meta_description" class="col-12 col-form-label">Meta
											Description</label>
										<div class="col-12">
											<textarea id="meta_description" wire:model="category.meta_description"
												rows="2" class="form-control"></textarea>
											@error('category.meta_description')
											<p class="error text-danger">{{ $message }}</p>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="meta_keywords" class="col-12 col-form-label">Meta Keywords</label>
										<div class="col-12">
											<input type="text" id="meta_keywords" wire:model="category.meta_keywords"
												class="form-control">
											@error('category.meta_keywords')
											<p class="error text-danger">{{ $message }}</p>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="other" class="col-12 col-form-label">Other</label>
										<div class="col-12">
											<textarea id="other" wire:model="category.other" rows="4"
												class="form-control"></textarea>
											@error('category.other')
											<p class="error text-danger">{{ $message }}</p>
											@enderror
										</div>
									</div>


									@if ($selected_id)
									<button type="submit" class="btn btn-primary" wire:target='save'
										wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
										<i class="mdi mdi-content-save"></i>
										Save &nbsp;
										<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
											wire:target='save' wire:loading></span>
									</button>
									@else
									<button type="submit" class="btn btn-primary" wire:target='store'
										wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
										<i class="mdi mdi-content-save"></i>
										Submit &nbsp;
										<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
											wire:target='store' wire:loading></span>
									</button>
									@endif
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>


	<div class="col-xl-8 col-lg-12">
		<div class="ec-cat-list card card-default">
			<div class="card-body">
				<div class="table-responsive">
					<div class="dataTables_wrapper dt-bootstrap5 no-footer">
						<div class="row justify-content-between top-information">
							<div wire:ignore class="dataTables_length" id="responsive-data-table_length">
								<label>
									Show
									<select wire:model="perpage" name="responsive-data-table_length"
										aria-controls="responsive-data-table" class="form-select form-select-sm">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
								</label>
							</div>
							<div class="dataTables_filter"><label>Search:<input type="search"
										wire:model.debounce.300ms="search" class="form-control form-control-sm"
										placeholder="" aria-controls="responsive-data-table"></label></div>
						</div>
						<table class="table dataTable no-footer" style="width:100%">
							<thead>
								<tr>
									<th class="sorting {{ $sortBy == 'id' ? ($sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc') : '' }}"
										wire:click="fetchOrder('id', '{{ $sortBy == 'id' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc' }}')">
										ID
									</th>
									<th class="sorting {{ $sortBy == 'name' ? ($sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc') : '' }}"
										wire:click="fetchOrder('name', '{{ $sortBy == 'name' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc' }}')">
										Name
									</th>

									@if($this->template == 'main-category')
									<th>Sub Categories</th>
									@else
									<th>Parent Categories</th>
									<th>Products</th>
									@endif

									<th>Meta Title</th>
									<th>Meta Description</th>
									<th>Meta Keywords</th>
									<!-- <th>Other</th> -->

									<th class="sorting {{ $sortBy == 'created_at' ? ($sortOrder == 'asc' ? 'sorting_asc' : 'sorting_desc') : '' }}"
										wire:click="fetchOrder('created_at', '{{ $sortBy == 'created_at' ? ($sortOrder == 'asc' ? 'desc' : 'asc') : 'asc' }}')">
										Date
									</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{ $category->id }}</td>
									<td>{{ $category->name }}</td>

									@if($this->template == 'main-category')
									<td>
										@if($category->categories->count())
										<span class="ec-sub-cat-list">
											<span class="ec-sub-cat-count" title="Total Sub Categories">
												{{ $category->categories->count() }}
											</span>
											@foreach($category->categories as $sub_category)
											@if($loop->index == 2) @break @endif
											<span class="ec-sub-cat-tag">{{ $sub_category->name }}</span>
											@endforeach
										</span>
										@endif
									</td>
									@else
									<td>
										@if($category->parents->count())
										<span class="ec-sub-cat-list">
											<span class="ec-sub-cat-count" title="Total Parent Categories">
												{{ $category->parents->count() }}
											</span>
											@foreach($category->parents as $parent_category)
											@if($loop->index == 1) @break @endif
											<span class="ec-sub-cat-tag">{{ $parent_category->name }}</span>
											@endforeach
										</span>
										@endif
									</td>
									<td>{{ $category->products->count() }}</td>
									@endif

									<td>{{ $category->meta_title ?? '-' }}</td>
									<td>{{ $category->meta_description ?? '-' }}</td>
									<td>{{ $category->meta_keywords ?? '-' }}</td>
									<!-- <td>{{ $category->other ?? '-' }}</td> -->

									<td>{{ $category->created_at->format('jS M Y') }}</td>
									<td>
										<div class="btn-group mb-1">
											<a href="javascript:void(0)" data-modal-title="{{ $category->name }}"
												onclick="loadDetailModal(this,'{{ route('admin.categories.show', $category->slug) }}')"
												class="btn btn-outline-success">Info</a>
											<button type="button"
												class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
												data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
												data-display="static">
												<span class="sr-only">Info</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#"
													wire:click="edit({{ $category->id }})">Edit</a>
												<a class="dropdown-item" href="#">Delete</a>
											</div>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

						<div class="row justify-content-between bottom-information">
							@if($categories->total())
							<div class="dataTables_info" role="status" aria-live="polite">
								Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of
								{{ $categories->total() }} entries
							</div>
							{{ $categories->links('pagination::livewire-bootstrap') }}
							@else
							<p class="text-center">No search
								result{!! !empty($search) ? ' for keword <strong>' . $search . '</strong>' : '.' !!}</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
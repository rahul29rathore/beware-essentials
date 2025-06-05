<div class="row ec-vendor-uploads">
    <div class="col-lg-4">
        <div class="ec-vendor-img-upload">
            <div class="ec-vendor-main-img">
                <div class="avatar-upload">
                    <div class="avatar-edit">
						<input type="file" wire:model="product.image" id="imageUpload" class="ec-image-upload" accept=".png, .jpg, .jpeg">
						<label for="imageUpload"><img src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit"></label>
					</div>
					<div class="avatar-preview ec-preview">
						<div class="imagePreview ec-div-preview">
						    @if (isset($product['image']))
                            <img class="ec-image-preview" src="{{ $product['image']->temporaryUrl() }}" alt="edit">
                            @elseif (!empty($product['product_image_url'])) 
							<img class="ec-image-preview" src="{{ $product['product_image_url'] }}" alt="edit">
                            @else
                             <img class="ec-image-preview" src="{{ asset('admin-assets/assets/img/products/vender-upload-preview.jpg') }}" alt="edit">
                            @endif
							
						</div>
					</div>
                </div>
                <div class="thumb-upload-set colo-md-12">
                    <div class="thumb-upload">
                        <div class="thumb-edit">
                            <input wire:model="product.images.0" type="file" id="thumbUpload01" class="ec-image-upload" accept=".png, .jpg, .jpeg">
                            <label for="imageUpload">
								<img src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit">
                            </label>
                        </div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview">
								@if (isset($product['images'][0]))
								<img src="{{ $product['images'][0]->temporaryUrl() }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@elseif(isset($product['product_images'][0]))
								<img src="{{ asset('storage/'.$product['product_images'][0]['collection_name'].'/'.$product['product_images'][0]['id'].'/'.$product['product_images'][0]['file_name']) }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@else
								<img class="image-thumb-preview ec-image-preview" src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}" alt="edit">
								@endif
                            </div>
                        </div>
                    </div>
                    <div class="thumb-upload">
                        <div class="thumb-edit">
                            <input wire:model="product.images.1" type="file" id="thumbUpload02" class="ec-image-upload" accept=".png, .jpg, .jpeg">
                            <label for="imageUpload">
                                <img src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit">
                            </label>
                        </div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview">
								@if (isset($product['images'][1]))
								<img src="{{ $product['images'][1]->temporaryUrl() }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@elseif(isset($product['product_images'][1]))
								<img src="{{ asset('storage/'.$product['product_images'][1]['collection_name'].'/'.$product['product_images'][1]['id'].'/'.$product['product_images'][1]['file_name']) }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@else
								<img class="image-thumb-preview ec-image-preview" src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}" alt="edit">
								@endif
                            </div>
                        </div>
                    </div>
                    <div class="thumb-upload">
                        <div class="thumb-edit">
                            <input wire:model="product.images.2" type="file" id="thumbUpload03" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg"><label for="imageUpload"><img
                                    src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}"
                                    class="svg_img header_svg" alt="edit"></label>
                        </div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview">
								@if (isset($product['images'][2]))
								<img src="{{ $product['images'][2]->temporaryUrl() }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@elseif(isset($product['product_images'][2]))
								<img src="{{ asset('storage/'.$product['product_images'][2]['collection_name'].'/'.$product['product_images'][2]['id'].'/'.$product['product_images'][2]['file_name']) }}" class="image-thumb-preview ec-image-preview" alt="edit">
								@else
								<img class="image-thumb-preview ec-image-preview" src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}" alt="edit">
								@endif
							</div>
                        </div>
                    </div>
                    <!--div class="thumb-upload">
                        <div class="thumb-edit"><input type="file" id="thumbUpload04" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg"><label for="imageUpload"><img
                                    src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}"
                                    class="svg_img header_svg" alt="edit"></label></div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview"><img class="image-thumb-preview ec-image-preview"
                                    src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                    alt="edit"></div>
                        </div>
                    </div>
                    <div class="thumb-upload">
                        <div class="thumb-edit"><input type="file" id="thumbUpload05" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg"><label for="imageUpload"><img
                                    src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}"
                                    class="svg_img header_svg" alt="edit"></label></div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview"><img class="image-thumb-preview ec-image-preview"
                                    src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                    alt="edit"></div>
                        </div>
                    </div>
                    <div class="thumb-upload">
                        <div class="thumb-edit"><input type="file" id="thumbUpload06" class="ec-image-upload"
                                accept=".png, .jpg, .jpeg"><label for="imageUpload"><img
                                    src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}"
                                    class="svg_img header_svg" alt="edit"></label></div>
                        <div class="thumb-preview ec-preview">
                            <div class="image-thumb-preview"><img class="image-thumb-preview ec-image-preview"
                                    src="{{ asset('admin-assets/assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                    alt="edit"></div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="ec-vendor-upload-detail">
            @if ($selected_id)
                <form wire:submit.prevent="save" class="row g-3">
                @else
                    <form wire:submit.prevent="create" class="row g-3">
            @endif
            <div class="col-md-6 mb-5">
                <label for="inputEmail4" class="form-label">Product name</label>
                <input wire:model.lazy="product.name" class="form-control slug-title" id="inputEmail4">
                @error('product.name')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
           


            <div class="col-md-6 mb-5">
                <label class="form-label">Select Categories</label>
                <select wire:model.live ="product.category_id"  id="category_id" class="form-select">
					<option value="">--Select Categories--</option>
					    @foreach($categories as $parent=>$categories)
					
						<option value="{{ $categories['id'] }}">{{ $categories['name'] }}</option>
						@endforeach  	
					
					
                </select>
				@error('product.category_id')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            <div class="col-md-6 mb-5">
                
               
            </div>

            <div class="col-md-6 mb-5">
                <label class="form-label">Select Sub Category</label>
                
            <select  wire:model.lazy ="product.subcatagory_id" id="subcatagory_id" class="form-select"
                    >
                    <option value="">Select Subcategory</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
              
                @error('product.subcatagory_id')
                    <span class="text-danger">{{ $message }} </span>
                @enderror

            </div>
			
			
            <div class="col-md-12 mb-5">
                <label for="slug" class="col-12 col-form-label">Slug</label>
                <div class="col-12">
                    <input id="slug" wire:model.lazy="product.slug" class="form-control here">
                    @error('product.slug')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <label class="form-label">Sort Description</label>
                <textarea wire:model.lazy="product.short_description" class="form-control" rows="2"></textarea>
                @error('product.short_description')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
            <!--div class="col-md-4 mb-25"><label class="form-label">Colors</label><input type="color" class="form-control form-control-color" id="exampleColorInput1" value="#ff6191" title="Choose your color"> <input type="color" class="form-control form-control-color" id="exampleColorInput2" value="#33317d" title="Choose your color"> <input type="color" class="form-control form-control-color" id="exampleColorInput3" value="#56d4b7" title="Choose your color"> <input type="color" class="form-control form-control-color" id="exampleColorInput4" value="#009688" title="Choose your color"></div>
			   <div class="col-md-8 mb-25">
				<label class="form-label">Size</label>
				<div class="form-checkbox-box">
				 <div class="form-check form-check-inline"><input type="checkbox" name="size1" value="size"><label>S</label></div>
				 <div class="form-check form-check-inline"><input type="checkbox" name="size1" value="size"><label>M</label></div>
				 <div class="form-check form-check-inline"><input type="checkbox" name="size1" value="size"><label>L</label></div>
				 <div class="form-check form-check-inline"><input type="checkbox" name="size1" value="size"><label>XL</label></div>
				 <div class="form-check form-check-inline"><input type="checkbox" name="size1" value="size"><label>XXL</label></div>
				</div>
			</div-->
            <div class="col-md-6 mb-5">
                <label class="form-label">Price <span>( In INR )</span></label>
                <input wire:model.lazy="product.price" type="text" class="form-control decimal2number" id="price1">
                @error('product.price')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-6 mb-5">
                <label class="form-label">Quantity</label>
                <input wire:model.lazy="product.qty" type="number" class="form-control" id="quantity1">
                @error('product.qty')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
            <div wire:ignore class="col-md-12 mb-5">
                <label class="form-label">Key Features</label>
                <div 
				   x-data
				   x-ref="quillEditor"
				   x-init="
					 quill = new Quill($refs.quillEditor, {theme: 'snow'});
					 quill.on('text-change', function () {
						@this.set('product.detail', quill.root.innerHTML);
					 });
				   "
				   wire:model.debounce.2000ms="product.detail"
			    >
				{!! $product['detail'] ?? '' !!}
				</div>
                @error('product.detail')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
            <div class="col-md-12 mb-5">
                <label class="form-label">Product Tags <span>( Type and make <b>','</b> to separate tags )</span></label>
                <input class="form-control" wire:model.lazy="product.tags" id="group_tag" placeholder="">
				@error('product.tags')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
            <div wire:ignore class="col-md-12 mb-5">
                <label class="form-label">Upload Brochure <br><span>( <i>File should be in '.pdf' format and less than 6MB</i> )</span></label>
				<div class="d-flex">
					<div  
					class='file-input' 
					x-data="{ isUploading: false, progress: 0 }"
					x-on:livewire-upload-start="isUploading = true"
					x-on:livewire-upload-finish="isUploading = false"
					x-on:livewire-upload-error="isUploading = false"
					x-on:livewire-upload-progress="progress = $event.detail.progress"
					>
						<input type='file' wire:model.lazy="product.brochure" accept="application/pdf">
						<span class='button c-pointer'>Choose</span>
						<span class='label' data-js-label>No file selected</span>
						<progress class="progressbar"  x-bind:value="progress" max="100"></progress>
					</div>
					@if(!empty($product['product_brochure']))
					<div class="file-prev">
						<a href="{{ optional($product['product_brochure'])->getUrl() }}" target="_blank">
							<i class="mdi mdi-file-pdf-outline mdi-48px"></i>
							<p class="text-info">{{ optional($product['product_brochure'])->name ?? ''}}</p>
						</a>
                    </div>
					@endif
				</div>
                @error('product.brochure')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>
			<div class="col-md-6 mb-6">
				<!--label class="form-label">Is Featured?</label-->
				<div class="form-checkbox-box">
					<div class="form-check form-check-inline">
						<input type="checkbox" wire:model.lazy="product.featured" value="1">
						<label>Featured</label>
					</div>
				</div>
			</div>
            <div class="col-md-6 mb-6">
				<!--label class="form-label">Is Featured?</label-->
				<div class="form-checkbox-box">
					<div class="form-check form-check-inline">
						<input type="checkbox" wire:model.lazy="product.new_arrivals" value="1">
						<label>New Arrivals</label>
					</div>
				</div>
			</div>

            <div class="col-md-6 mb-6">
				<!--label class="form-label">Is Featured?</label-->
				<div class="textarea">
					<div class="text">
                    <label>Link</label>
						<input type="text" wire:model.lazy="product.link" value="1">
						
					</div>
				</div>
			</div>
				 
            <div class="col-md-12">
                <label class="form-label">Product Specifications</label>
                <table id="tbl-attr" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Specification Attributes</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
					    @foreach($product['product_specifications'] as $product_specification)
                        <tr>
                            <td class="p-0"><input type="text" wire:model="product.product_specifications.{{ $loop->index }}.attribute_name" class="form-control font-weight-600 m-0" placeholder="Enter Attributes"></td>
                            <td class="p-0"><input type="text" wire:model="product.product_specifications.{{ $loop->index }}.attribute_value" class="form-control m-0" placeholder="Enter Value"></td>
							<td class="p-0" valign="middle" width="100"><a href="javascript:void(0)"  wire:click="removeSpecification({{ $loop->index }})"><i class="mdi mdi-minus"> Remove </i></a></td>
							
						</tr>
						@endforeach
						<tr>
                            <td class="p-0"><input type="text" wire:model="attribute_name" class="form-control font-weight-600 m-0" placeholder="Enter Attributes"></td>
                            <td class="p-0"><input type="text" wire:model="attribute_value" class="form-control m-0" placeholder="Enter Value"></td>
							<td class="p-0" valign="middle" width="100"><a href="javascript:void(0)" wire:click="addSpecification()"><i class="mdi mdi-plus"> Add Specs</i></a></td>
						</tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
			    @error('product.image')
                    <p class="error text-danger">{{ $message }} </p>
                @enderror
                @if ($selected_id)
                    <button type="submit" class="btn btn-primary" wire:target='save' wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
                        <i class="mdi mdi-content-save"></i> Save &nbsp;
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:target='save' wire:loading></span>
                    </button>
                @else
                    <button type="submit" class="btn btn-primary" wire:target='create' wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
                        <i class="mdi mdi-content-save"></i> Submit &nbsp;
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:target='create' wire:loading></span>
                    </button>
                @endif
            </div>
            </form>
        </div>
    </div>
</div>

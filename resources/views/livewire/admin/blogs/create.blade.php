<div class="row ec-vendor-uploads">
    <div class="col-lg-4">
        <div class="ec-vendor-img-upload">
            <div class="ec-vendor-main-img">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type="file" wire:model="blog.image" id="imageUpload" class="ec-image-upload" accept=".png, .jpg, .jpeg">
                        <label for="imageUpload"><img src="{{ asset('admin-assets/assets/img/icons/edit.svg') }}" class="svg_img header_svg" alt="edit"></label>
                    </div>
                    <div class="avatar-preview ec-preview">
                        <div class="imagePreview ec-div-preview">
                            @if (isset($blog['image']))
                            <img class="ec-image-preview" src="{{ $blog['image']->temporaryUrl() }}" alt="edit">
                            @elseif (!empty($blog['product_image_url']))
                            <img class="ec-image-preview" src="{{ $blog['product_image_url'] }}" alt="edit">
                            @else
                            <img class="ec-image-preview" src="{{ asset('admin-assets/assets/img/products/vender-upload-preview.jpg') }}" alt="edit">
                            @endif

                        </div>
                    </div>
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
                        <label for="inputEmail4" class="form-label">Blog Title</label>
                        <input wire:model.lazy="blog.title" class="form-control slug-title" id="inputEmail4">
                        @error('blog.title')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>



                    <div class="col-md-6 mb-5">
                        <label class="form-label">Blog Category</label>
                        <select wire:model.live="blog.category_id" id="category_id" class="form-select">
                            <option value="">--Select Categories--</option>
                            @foreach($categories as $parent=>$categories)

                            <option value="{{ $categories['id'] }}">{{ $categories['name'] }}</option>
                            @endforeach


                        </select>
                        @error('blog.category_id')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label for="slug" class="col-12 col-form-label">Slug</label>
                        <div class="col-12">
                            <input id="slug" wire:model.lazy="blog.slug" class="form-control here">
                            @error('blog.slug')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <label class="form-label">Sort Description</label>
                        <textarea wire:model.lazy="blog.short_description" class="form-control" rows="2"></textarea>
                        @error('blog.short_description')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                  
                    <div class="col-md-6 mb-5">
                        <label class="form-label">Auther <span></span></label>
                        <input wire:model.lazy="blog.auther" type="text" class="form-control">
                        @error('blog.auther')
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
						@this.set('blog.description', quill.root.innerHTML);
					 });
				   "
                            wire:model.debounce.2000ms="blog.description">
                            {!! $blog['description'] ?? '' !!}
                        </div>
                        @error('blog.description')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-5">
                        <label class="form-label">Blog Tags <span>( Type and make <b>','</b> to separate tags )</span></label>
                        <input class="form-control" wire:model.lazy="blog.tags" id="group_tag" placeholder="">
                        @error('blog.tags')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Title</label>
                        <input wire:model.lazy="blog.meta_title" type="text" class="form-control">
                        @error('blog.meta_title')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Description</label>
                        <textarea wire:model.lazy="blog.meta_description" class="form-control" rows="2"></textarea>
                        @error('blog.meta_description')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Keywords </label>
                        <input wire:model.lazy="blog.meta_keywords" type="text" class="form-control">
                        @error('blog.meta_keywords')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Other</label>
                        <input wire:model.lazy="blog.other" type="text" class="form-control">
                        @error('blog.other')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        @error('blog.image')
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
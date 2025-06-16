<div class="row ec-vendor-uploads">

    <div class="col-lg-12">
        <div class="ec-vendor-upload-detail">
            @if ($selected_id)
            <form wire:submit.prevent="save" class="row g-3">
                @else
                <form wire:submit.prevent="create" class="row g-3">
                    @endif
                    <div class="col-md-6 mb-5">
                        <label for="inputEmail4" class="form-label">Page Name</label>
                        <input wire:model.lazy="seotags.name" class="form-control slug-name" id="inputEmail4">
                        @error('seotags.name')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-5">
                        <label for="slug" class="form-label">Slug</label>
                        <div class="col-12">
                            <input id="slug" wire:model.lazy="seotags.slug" class="form-control here">
                            @error('seotags.slug')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="col-md-6 mb-5">
                        <label class="col-12 col-form-label">Content</label>
                        <div class="col-12">
                            <input id="content" wire:model.lazy="seotags.content" class="form-control here">
                            @error('seotags.content')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                    </div> -->

                    <div wire:ignore class="col-md-12 mb-5">
                        <label class="form-label">Key Features</label>
                        <div
                            x-data
                            x-ref="quillEditor"
                            x-init="
					 quill = new Quill($refs.quillEditor, {theme: 'snow'});
					 quill.on('text-change', function () {
						@this.set('seotags.content', quill.root.innerHTML);
					 });
				   "
                            wire:model.debounce.2000ms="seotags.content">
                            {!! $seotags['content'] ?? '' !!}
                        </div>
                        @error('seotags.content')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Title</label>
                        <input wire:model.lazy="seotags.meta_title" type="text" class="form-control">
                        @error('seotags.meta_title')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Description</label>
                        <textarea wire:model.lazy="seotags.meta_description" class="form-control" rows="2"></textarea>
                        @error('seotags.meta_description')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Meta Keywords <span>( Type and make <b>','</b> to separate tags )</span></label>
                        <input wire:model.lazy="seotags.meta_keywords" id="group_tag" placeholder="" type="text" class="form-control">
                        @error('seotags.meta_keywords')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-5">
                        <label class="form-label">Other</label>
                        <input wire:model.lazy="seotags.other" type="text" class="form-control">
                        @error('seotags.other')
                        <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
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
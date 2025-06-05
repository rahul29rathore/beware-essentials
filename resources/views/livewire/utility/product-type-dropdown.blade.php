<div x-data="{ adding: @entangle('adding')}">
	<label class="form-label">Select Product Type</label>
	<div x-show="adding" style="display:none;">
		<div class="select-item-input-wrapper add-select-item">
			<input type="text"  wire:model.lazy="name" />
			<button type="button" class="btn btn-success" wire:click="store"><i class="mdi mdi-check"></i></button>
		</div>
		<a class="float-end mr-2" href="javascript:void(0)" wire:click="cancel">Cancel</a>
		@error('name')
			<span class="text-danger">{{ $message }} </span>
		@enderror
	</div>
	<div x-show="!adding" class="{{ $template == 'dropdown-with-add' ? 'add-select-item' : '' }}">
		<select id="select-product-type" wire:model="product_type_id" wire:ignore>
			<option value="">--Select Product Type--</option>
			@foreach($product_types as $product_type)
			<option value="{{ $product_type->id }}" {{ $product_type->id == $product_type_id ? 'selected' : '' }}>{{ $product_type->name }}</option>	
			@endforeach
		</select>
		@if($template == 'dropdown-with-add')
		<button type="button" class="btn btn-primary" wire:click="add"><i class="mdi mdi-plus"></i></button>
		@endif
	</div>
</div>

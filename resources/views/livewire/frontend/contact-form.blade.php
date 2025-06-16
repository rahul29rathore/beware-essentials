<div>
	<form  wire:submit.prevent="store"  autocomplete="off" class="contact_message" action="" method="post" novalidate="novalidate">
		<div class="row p-0">
			<div class="form-group col-md-6 col-sm-6">
				<input class="form-control" wire:model.lazy="contact.name"  placeholder="Name" type="text">
				@error('contact.name')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-6 col-sm-6">
				<input class="form-control" wire:model.lazy="contact.email" placeholder="Email Address" type="text">
				@error('contact.email')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-6 col-sm-12">
				<input class="form-control" wire:model.lazy="contact.contact_no" name="contact_no" placeholder="Mobile No." type="text">
				@error('contact.contact_no')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-6 col-sm-12">
				<input class="form-control" wire:model.lazy="contact.subject" name="subject" placeholder="Subject" type="text">
				@error('contact.subject')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-12 col-sm-12 customer-type">
				<select class="bg-white px-3 text-dark" wire:model.lazy="contact.customer_type" name="customer_type">
					<option value="">Select customer type</option>
					<option value="Buyer">Buyer</option>
					<option value="Vendor">Vendor</option>
				</select>
				<i class="fa fa-caret-down"></i>
				@error('contact.customer_type')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-12 col-sm-12">
				<textarea class="form-control" wire:model.lazy="contact.message" rows="5"placeholder="Message"></textarea>
				@error('contact.message')<span class="text-danger">{{ $message }}</span>@enderror
			</div>
			<div class="form-group col-md-12 col-sm-6">
			    <button type="submit" class="dt-sc-button medium bordered" wire:target='store'
					wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
					<i class="mdi mdi-content-save"></i>
					Send Message &nbsp;
					<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:target='store' wire:loading></span>
				</button>
			</div>
			<div class="col-md-12">
				<div class="error-handel">
				    @if (session()->has('message'))
					<div class="dt-sc-success-box ">
						{{ session('message') }}	
					</div>
					@endif
					<!--div class="dt-sc-success-box ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
					<div class="dt-sc-error-box ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div-->
				</div>
			</div>
		</div>
	</form>
</div>
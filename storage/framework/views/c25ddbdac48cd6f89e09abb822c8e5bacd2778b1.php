<div>
	<form  wire:submit.prevent="store"  autocomplete="off" class="contact_message" action="" method="post" novalidate="novalidate">
		<div class="row p-0">
			<div class="form-group col-md-6 col-sm-6">
				<input class="form-control" wire:model.lazy="contact.name"  placeholder="Name" type="text">
				<?php $__errorArgs = ['contact.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="form-group col-md-6 col-sm-6">
				<input class="form-control" wire:model.lazy="contact.email" placeholder="Email Address" type="text">
				<?php $__errorArgs = ['contact.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="form-group col-md-6 col-sm-12">
				<input class="form-control" wire:model.lazy="contact.contact_no" name="contact_no" placeholder="Mobile No." type="text">
				<?php $__errorArgs = ['contact.contact_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="form-group col-md-6 col-sm-12">
				<input class="form-control" wire:model.lazy="contact.subject" name="subject" placeholder="Subject" type="text">
				<?php $__errorArgs = ['contact.subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="form-group col-md-12 col-sm-12 customer-type">
				<select class="bg-white px-3 text-dark" wire:model.lazy="contact.customer_type" name="customer_type">
					<option value="">Select customer type</option>
					<option value="Buyer">Buyer</option>
					<option value="Vendor">Vendor</option>
				</select>
				<i class="fa fa-caret-down"></i>
				<?php $__errorArgs = ['contact.customer_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>
			<div class="form-group col-md-12 col-sm-12">
				<textarea class="form-control" wire:model.lazy="contact.message" rows="5"placeholder="Message"></textarea>
				<?php $__errorArgs = ['contact.message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
				    <?php if(session()->has('message')): ?>
					<div class="dt-sc-success-box ">
						<?php echo e(session('message')); ?>	
					</div>
					<?php endif; ?>
					<!--div class="dt-sc-success-box ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
					<div class="dt-sc-error-box ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div-->
				</div>
			</div>
		</div>
	</form>
</div><?php /**PATH D:\beware-essentials\resources\views/livewire/frontend/contact-form.blade.php ENDPATH**/ ?>
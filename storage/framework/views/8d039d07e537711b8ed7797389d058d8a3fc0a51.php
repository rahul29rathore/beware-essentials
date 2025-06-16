<div class="lead-popup-container" wire:ignore.self>
    <div class="leadform-container">
        <div class="leadform-header">
            <img src="<?php echo e(asset('assets/images/leadform-logo.png')); ?>" alt="beware-logo">
            <h3 class="m-0">Eyes in Every Corner</h3>
            <p>Clear Vision With Full Security</p>
            <span class="close-leadform"><i class="zmdi zmdi-close"></i></span>
        </div>
        <div class="bg-white">
            <img src="<?php echo e(asset('assets/images/cams-2.png')); ?>" alt="beware-cameras" class="beware-cameras">
        </div>
        <div class="leadform text-left">
            <div class="px-3">
                <div class="row">
                     <?php if(session()->has('success')): ?>
            <div class=" alert-success" role="alert">
                <!-- <h5 class="mt-4 mb-0 text-success">Your message has been sent successfully!</h5> -->
                <?php echo e(session()->get('success')); ?>

            </div>
        <?php endif; ?>                
        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(session()->get('error')); ?>

            </div>
        <?php endif; ?>
                    

                <form style="width: 100%;" wire:submit.prevent="saveStudent">

                    <?php echo csrf_field(); ?>

                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Name Required">
                            <label>Names</label>
                            <input type="text" wire:model="name" placeholder="Enter Name" class="form-control">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="font-size: 10px;" class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Email ID is already been taken">
                            <label>Email</label>
                            <input type="text" wire:model="email" placeholder="Enter Email" class="form-control">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="font-size: 10px;" class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>Phone</label>
                            <input type="text"  wire:model="phone" placeholder="Enter Phone" class="form-control">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="font-size: 10px;" class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group" data-error="Email ID is already been taken">
                            <label>Company Name</label>
                            <input type="text"  wire:model="company" placeholder="Enter Company Name" class="form-control">
                            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>Location</label>
                            <input type="text"  wire:model="location" placeholder="Enter Location" class="form-control">
                            <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="form-group m-0" data-error="Phone number must be of 10 digit">
                            <label>GST (optional)</label>
                            <input type="text"  wire:model="Gst" placeholder="Enter GSt No. (if any)" class="form-control">
                            <?php $__errorArgs = ['Gst'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                   <!--  <div class="col-lg-12 mt-2">
                        <div class="form-group h-100" data-error="Message Required">
                            <label>Message</label>
                            <textarea  wire:model="message" placeholder="Type message..." class="form-control pt-3"></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div> -->
                    <div class="col-lg-12 d-flex pb-3 justify-content-center">
                        <button type="submit" class="btn btn-theme">Send Message</button>
                    </div>

                </form> 
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\beware-essentials\resources\views/livewire/distributer.blade.php ENDPATH**/ ?>

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php if($seotags): ?>
    <?php $__env->startSection('title'); ?><?php echo e($seotags->meta_title ?? "beware.essential.com"); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('meta_description'); ?><?php echo e($seotags->meta_description ?? "meta title"); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('meta_keywords'); ?><?php echo e($seotags->meta_keywords ?? "meta title"); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('other'); ?><?php echo $seotags->other; ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<section class="main-title-section-wrapper default" style="background:transparent;">
    <div class="container">
        <div class="main-title-section custom-title">
            <h1>Contact Us <i class="zmdi zmdi-phone-in-talk text-theme-blue"></i></h1>
        </div>
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span class="fa default"></span>
            <span class="current">Contact Us</span>
        </div>
        <p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
    </div>
</section>
<div class="container">
	<section id="primary" class="content-full-width pt-0">
        <div class="row pt-0">
            <div class="col-lg-8 col-md-12" data-aos="fade-right">
                <div class="bg-light p-lg-5 p-3 mb-4">
                    <h4 class="mb-4 down-line">Get In Touch</h4>
                    <span class="d-table mb-4">In case you have a query about products and services, Submit your details and our representative will call as soon as possible.</span>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.contact-form')->html();
} elseif ($_instance->childHasBeenRendered('8QVUaSO')) {
    $componentId = $_instance->getRenderedChildComponentId('8QVUaSO');
    $componentTag = $_instance->getRenderedChildComponentTagName('8QVUaSO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8QVUaSO');
} else {
    $response = \Livewire\Livewire::mount('frontend.contact-form');
    $html = $response->html();
    $_instance->logRenderedChild('8QVUaSO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12" data-aos="fade-left">
                <div class="contact-detail p-lg-5 p-3 text-white bg-theme-blue">
                    <h5 class="down-line mb-4 text-white">Contact Details</h5>
                    <div class="mb-4">
                        <span class="text-warning">Phone Number</span>
						<?php $__currentLoopData = explode(',',config('settings.contact_no')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($contact_no); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mb-4">
                        <span class="text-warning">E-Mail</span>
                        <?php $__currentLoopData = explode(',', config('settings.email')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact_no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($contact_no); ?></p>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mb-4">
                        <span class="text-warning">Address</span>
                        <p><?php echo e(config('settings.address')); ?></p>
                    </div>
                    <h5 class="down-line mb-4 text-white">Follow Us On</h5>
                    <ul class="social-icons justify-content-start">
                        <li><a href="https://www.facebook.com/BewareEssentials"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/beware-cctv-surveillance-systems/"><i class="zmdi zmdi-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/bewareessentials/"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/pages/contact-us.blade.php ENDPATH**/ ?>
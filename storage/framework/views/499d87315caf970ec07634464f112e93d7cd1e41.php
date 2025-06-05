
<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/woocommerce.css')); ?>">
<style>
	.inner-wrapper,body, html {
    overflow: initial;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<?php if(\Request::route()->getName() == "product"): ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.product')->html();
} elseif ($_instance->childHasBeenRendered('To7DlLD')) {
    $componentId = $_instance->getRenderedChildComponentId('To7DlLD');
    $componentTag = $_instance->getRenderedChildComponentTagName('To7DlLD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('To7DlLD');
} else {
    $response = \Livewire\Livewire::mount('frontend.product');
    $html = $response->html();
    $_instance->logRenderedChild('To7DlLD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<?php elseif(\Request::route()->getName() == "products"): ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.products')->html();
} elseif ($_instance->childHasBeenRendered('9gdvRgB')) {
    $componentId = $_instance->getRenderedChildComponentId('9gdvRgB');
    $componentTag = $_instance->getRenderedChildComponentTagName('9gdvRgB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9gdvRgB');
} else {
    $response = \Livewire\Livewire::mount('frontend.products');
    $html = $response->html();
    $_instance->logRenderedChild('9gdvRgB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<?php else: ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.categories')->html();
} elseif ($_instance->childHasBeenRendered('naRo5s2')) {
    $componentId = $_instance->getRenderedChildComponentId('naRo5s2');
    $componentTag = $_instance->getRenderedChildComponentTagName('naRo5s2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('naRo5s2');
} else {
    $response = \Livewire\Livewire::mount('frontend.categories');
    $html = $response->html();
    $_instance->logRenderedChild('naRo5s2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/pages/livewire-landing.blade.php ENDPATH**/ ?>
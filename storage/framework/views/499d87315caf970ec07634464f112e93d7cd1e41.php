
<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/woocommerce.css')); ?>">
<style>
	.inner-wrapper,
	body,
	html {
		overflow: initial;
	}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> beware.essential.com <?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?> description <?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_keywords'); ?> keywords <?php $__env->stopSection(); ?>
<?php $__env->startSection('other'); ?> end <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(\Request::route()->getName() == "product"): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.product')->html();
} elseif ($_instance->childHasBeenRendered('i0ylDF7')) {
    $componentId = $_instance->getRenderedChildComponentId('i0ylDF7');
    $componentTag = $_instance->getRenderedChildComponentTagName('i0ylDF7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i0ylDF7');
} else {
    $response = \Livewire\Livewire::mount('frontend.product');
    $html = $response->html();
    $_instance->logRenderedChild('i0ylDF7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php elseif(\Request::route()->getName() == "products"): ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.products')->html();
} elseif ($_instance->childHasBeenRendered('sY2dEav')) {
    $componentId = $_instance->getRenderedChildComponentId('sY2dEav');
    $componentTag = $_instance->getRenderedChildComponentTagName('sY2dEav');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sY2dEav');
} else {
    $response = \Livewire\Livewire::mount('frontend.products');
    $html = $response->html();
    $_instance->logRenderedChild('sY2dEav', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php else: ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.categories')->html();
} elseif ($_instance->childHasBeenRendered('GP9SpVC')) {
    $componentId = $_instance->getRenderedChildComponentId('GP9SpVC');
    $componentTag = $_instance->getRenderedChildComponentTagName('GP9SpVC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GP9SpVC');
} else {
    $response = \Livewire\Livewire::mount('frontend.categories');
    $html = $response->html();
    $_instance->logRenderedChild('GP9SpVC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/pages/livewire-landing.blade.php ENDPATH**/ ?>
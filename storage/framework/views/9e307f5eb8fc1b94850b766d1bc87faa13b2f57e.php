
<?php $__env->startSection('content'); ?>
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Users</h1>
		<p class="breadcrumbs"><span><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Users</p>
	 </div>
	 <!--div><a href="product-list.html" class="btn btn-primary">Add Porduct</a></div-->
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-body">
		      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users')->html();
} elseif ($_instance->childHasBeenRendered('ElClI9f')) {
    $componentId = $_instance->getRenderedChildComponentId('ElClI9f');
    $componentTag = $_instance->getRenderedChildComponentTagName('ElClI9f');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ElClI9f');
} else {
    $response = \Livewire\Livewire::mount('admin.users');
    $html = $response->html();
    $_instance->logRenderedChild('ElClI9f', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
			</div>
		</div>
	 </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/livewire/admin/users/index.blade.php ENDPATH**/ ?>
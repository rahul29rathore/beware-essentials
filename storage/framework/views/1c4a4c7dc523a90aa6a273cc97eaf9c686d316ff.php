<?php $__env->startSection('title'); ?><?php echo e($selected_category->meta_title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?><?php echo e($selected_category->meta_description); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_keywords'); ?><?php echo e($selected_category->meta_keywords); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('other'); ?><?php echo $selected_category->other; ?><?php $__env->stopSection(); ?>

<div>
	<section class="main-title-section-wrapper default" style="background:transparent;">
		<div class="container">
			<div class="main-title-section custom-title">
				<h1>Products</h1>
			</div>
			<nav aria-label="breadcrumb" class="theme-breadcrumb product-breadcrub">
				<ol class="breadcrumb">
					<li class="breadcrumb-item" aria-current="page">
						<a href="/" class="">Home</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						<a href="<?php echo e(route('products')); ?>" class="">Products</a>
					</li>
					<?php echo $selected_category->getBreadcrub('products'); ?>

				</ol>
			</nav>
			<p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
		</div>
	</section>
	<div class="container">
		<section id="primary" class="content-full-width pt-0">
			<div class="row pt-0 products-grid-view">
				<div class="col-lg-3">
					<div id="sidebar" class="shop-sidebar">
						<div class="widget widget_product_categories">
							<h4 class="widget-title down-line mb-5">Categories</h4>
							<!-- <ul class="mb-0 mt-3">
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<li class="">
									<a href="<?php echo e(route('products', $category->slug)); ?>" data-val="0" class="d-flex align-items-center justify-content-between text-dark">

										<?php echo e($category->name); ?>

									</a>
								</li>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</ul> -->
							
						<?php if(isset($selected_category->parent->id)): ?>
							<a href="<?php echo e(route('products', $selected_category->parent->slug)); ?>"><i class="fa fa-angle-left mr-1"></i> <?php echo e($selected_category->parent->name ?? ''); ?></a>
							<?php endif; ?>

							<?php if($selected_category->categories->count()): ?>

							<ul class="mb-0 mt-3">
																
								<?php $__currentLoopData = $selected_category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="">
									<a href="javascript:void(0)" data-val="0" class="d-flex align-items-center justify-content-between text-dark">
										<label for="label-<?php echo e($category->id); ?>">
											<input wire:model="filterByIds.<?php echo e($category->id); ?>" wire:click="fetchProducts('<?php echo e($category->slug); ?>')" type="checkbox" value="<?php echo e($category->id); ?>" class="mr-2" id="label-<?php echo e($category->id); ?>"> <?php echo e($category->name); ?>

											<?php if($category->categories->count()): ?>
											<i class="fa fa-angle-down text-muted 212"></i>
										    <?php endif; ?>
										</label>
									</a>
									<?php if($category->categories->count()): ?>
									<ul class="d-block">
										<?php $__currentLoopData = $category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class="">
											<label for="label-<?php echo e($sub_category->id); ?>" class="d-flex align-items-center">
												<input wire:model="filterByIds.<?php echo e($sub_category->id); ?>" wire:click="fetchProducts('<?php echo e($sub_category->slug); ?>')" type="checkbox" value="<?php echo e($sub_category->id); ?>" class="mr-2" id="label-<?php echo e($sub_category->id); ?>">
												<span><?php echo e($sub_category->name); ?></span>
											</label>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
									<?php endif; ?>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
							</ul>
							 <?php endif; ?> 
						</div>
						
					</div>
				</div>
				<div class="col-lg-9">
					<?php if($products->count()): ?>
					<ul class="products" data-aos="fade-up" wire:ignore.self>
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="product-item hover-img-zoom">
							<div class="product-img">
								<a href="<?php echo e(route('product', $product->slug)); ?>" class="product-link">
									<img src="<?php echo e($product->product_image_url); ?>" alt="image not found!">
									<img src="<?php echo e($product->product_image_url); ?>" alt="image not found!">
								</a>
							</div>
							<div class="content px-3 text-center">
								<h6 class="font-weight-medium title m-0">
									<a href="<?php echo e(route('product', $product->slug)); ?>">
										<span>
											<?php echo e($product->name); ?>

											<span class="d-block mb-0 font-weight-medium"><?php echo e($product->category->name ?? ''); ?></span>
										</span>
									</a>
								</h6>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					
					<?php if( $products->total() > $perpage ): ?>
					<div class="col-lg-12 text-center">
						<button class="btn btn-danger float-none" wire:click='loadMore'
							wire:loading.class="btn-disable-processing" wire:loading.attr="disabled">
							Load more.. &nbsp;
							<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
								wire:click='loadMore' wire:loading></span>
						</button>
					</div>
					<?php endif; ?>
					
					<?php else: ?>
					<p class="mt-5 pl-3">No Result found!! </p>
					<?php endif; ?>
				</div>
			</div>
	   </section>
	</div>
</div>
<?php /**PATH D:\beware-essentials\resources\views/livewire/frontend/products/products.blade.php ENDPATH**/ ?>
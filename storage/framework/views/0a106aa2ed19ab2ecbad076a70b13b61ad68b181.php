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
				</ol>
			</nav>
			<p class="type-script text-lg-left position-relative mt-3">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
		</div>
	</section>
	<div class="container">
		<section id="primary" class="content-full-width pt-0">
			<div class="row pt-0 products-grid-view full-width-list">
			
				<div class="col-lg-12">
					<div class="col-lg-12">
						<!--div class="widget widget_tag_cloud">
							<div class="tagcloud">
								<ul>
									<li><a href="#">Finger Print Sensor</a></li>
									<li><a href="#">Door Frame Metal Detector</a></li>
									<li><a href="#">Single Core Swing Barrier Gate</a></li>
									<li><a href="#">Security Computer</a></li>
									<li><a href="#">Web Security</a></li>
									<li><a href="#">Finger Print Sensor</a></li>
									<li><a href="#">Door Frame Metal Detector</a></li>
									<li><a href="#">Single Core Swing Barrier Gate</a></li>
									<li><a href="#">Security Computer</a></li>
									<li><a href="#">Web Security</a></li>
								</ul>
							</div>
						</div-->
					</div>
					
					<ul class="products">
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="">
							<div class="product-link">

								<a href="<?php echo e(route('products', $category->slug )); ?>">
									<img src="<?php echo e($category->category_image_url); ?>" alt="image not found!">
									<h6><span data-mh="cat-name"><?php echo e($category->name); ?></span></h6>
									<!--img src="<?php echo e($category->category_image_url); ?>" alt="image not found!"-->
								</a>
								<?php if($category->categories->count()): ?>
								<ul>
									<?php $__currentLoopData = $category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li style="transition-delay:<?php echo e(( ( $loop->index/10 ) )); ?>s"><a href="<?php echo e(route('products', $sub_category->slug )); ?>"><?php echo e($sub_category->name); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								<?php endif; ?>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
	  </section>
	</div>
</div><?php /**PATH D:\beware-essentials\resources\views/livewire/frontend/categories/child-categories.blade.php ENDPATH**/ ?>
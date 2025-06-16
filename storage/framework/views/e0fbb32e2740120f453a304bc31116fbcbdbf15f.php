<div>
     <div class="container">
        <div class="row justify-content-center">
            <?php $__currentLoopData = $display_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 mb-3">
                    <div class="card">
                        <a href="<?php echo e(route('products', $category->slug)); ?>" class="card__img" data-aos="fade-left">
                            <img src="<?php echo e($category->category_image_url); ?>" alt="<?php echo e($category->name); ?>">
                            <div class="card__overlay">
                                <h2><?php echo e($category->name); ?></h2>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
</div>
<?php /**PATH D:\beware-essentials\resources\views/livewire/frontend/display-category.blade.php ENDPATH**/ ?>
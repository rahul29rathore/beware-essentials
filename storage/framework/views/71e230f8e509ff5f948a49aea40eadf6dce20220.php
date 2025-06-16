<div data-aos="fade-up" data-aos-delay="400" class="slider cctv-products">
    
    <?php $__currentLoopData = $newarproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <div class="p-3">
        
        <div class="product-default">
            
            <figure>
            
                <a href="<?php echo e(isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products')); ?>">
                    <img src="<?php echo e($product->product_image_url); ?>" alt="" width="217" height="217" alt="product">
                </a>
                
                <div class="btn-icon-group">
                    <a href="<?php echo e(isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products')); ?>" class="btn-icon btn-add-cart">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <a href="<?php echo e(isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products')); ?>" class="btn-quickview" title="Quick View">Quick View</a>
            </figure>

            <div class="product-details">
                <h3 class="product-title">
                    <a href="<?php echo e(isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products')); ?>"><?php echo e($product->name); ?></a>
                </h3>
                <div class="category-wrap">
                    <div class="category-list">
                        <a href="<?php echo e(isset( $product->category->id ) ?  route('products', $product->category->slug ) : route('products')); ?>" class="product-category" title="<?php echo e($product->category->name ?? ''); ?> <?php echo e($product->product_type->name ?? ''); ?>"><?php echo e($product->category->name ?? ''); ?> <?php echo e($product->product_type->name ?? ''); ?></a>
                    </div>
                </div>
                
            </div>


          </div>
       </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><?php /**PATH D:\beware-essentials\resources\views/livewire/frontend/new-arrivals.blade.php ENDPATH**/ ?>
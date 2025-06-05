
<?php $__env->startSection('content'); ?>
<section class="main-title-section-wrapper default m-0 p-0" style="background:transparent;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-section custom-title">
                    <h1>Blogs</h1>
                </div>
                <div class="breadcrumb">
                    <a href="/">Home</a>
                    <span class="fa default"></span>
                    <span class="current">Blogs</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="content-full-width">
    <div class="container py-5">
        <div class="row">
            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__env->startSection('title'); ?><?php echo e($blogger->meta_title ?? "beware.essential.com"); ?><?php $__env->stopSection(); ?>
            <?php $__env->startSection('meta_description'); ?><?php echo e($blogger->meta_description ?? "meta title"); ?><?php $__env->stopSection(); ?>
            <?php $__env->startSection('meta_keywords'); ?><?php echo e($blogger->meta_keywords ?? "meta title"); ?><?php $__env->stopSection(); ?>
            <?php $__env->startSection('other'); ?><?php echo $blogger->other; ?><?php $__env->stopSection(); ?>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 m-auto">

                <?php if(isset($blogger['image'])): ?>
                <img class="w-100 br-20 mb-3" src="<?php echo e($blogger['image']->temporaryUrl()); ?>" alt="edit">
                <?php elseif(!empty($blogger['product_image_url'])): ?>
                <img class="w-100 br-20 mb-3" src="<?php echo e($blogger['product_image_url']); ?>" alt="edit">

                <?php endif; ?>
                
                <h4><?php echo e($blogger['title']); ?></h4>
                <p class="post-date text-primary mb-4">Posted on <?php echo e($blogger['created_at']->format('jS M Y')); ?></p>
                <p><?php echo $blogger['description']; ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scriptBottom'); ?>
<script type="text/javascript">
    jQuery('#Demo').socialSharingPlugin({
        urlShare: window.location.href,
        description: jQuery('meta[name=description]').attr('content'),
        title: jQuery('title').text()
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\beware-essentials\resources\views/pages/blog-detail.blade.php ENDPATH**/ ?>
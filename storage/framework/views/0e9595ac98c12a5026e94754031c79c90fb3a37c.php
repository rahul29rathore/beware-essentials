<?php if($paginator->hasPages()): ?> 
<div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
	<ul class="pagination">
		
		<?php if($paginator->onFirstPage()): ?>
			<li class="paginate_button page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
				<span class="page-link" aria-hidden="true">&lsaquo;</span>
			</li>
		<?php else: ?>
			<li class="paginate_button page-item">
				<a href="javascript:void(0)" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;</a>
			</li>
		<?php endif; ?>

		
		<?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<?php if(is_string($element)): ?>
				<li class="paginate_button page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
			<?php endif; ?>

			
			<?php if(is_array($element)): ?>
				<?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($page == $paginator->currentPage()): ?>
						<li class="paginate_button page-item active" wire:key="paginator-page-<?php echo e($page); ?>" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
					<?php else: ?>
						<li class="paginate_button page-item" wire:key="paginator-page-<?php echo e($page); ?>"><a href="javascript:void(0)" class="page-link" wire:click="gotoPage(<?php echo e($page); ?>)"><?php echo e($page); ?></a></li>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		
		<?php if($paginator->hasMorePages()): ?>
			<li class="paginate_button page-item">
				<a href="javascript:void(0)" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</a>
			</li>
		<?php else: ?>
			<li class="paginate_button page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
				<!--span class="page-link" aria-hidden="true">&rsaquo;</span-->
				<a href="#" aria-controls="responsive-data-table" data-dt-idx="4" tabindex="0" class="page-link">&rsaquo;</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
<?php endif; ?><?php /**PATH D:\beware-essentials\resources\views/vendor/pagination/livewire-bootstrap.blade.php ENDPATH**/ ?>
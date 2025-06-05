@if ($paginator->hasPages()) 
<div class="dataTables_paginate paging_simple_numbers" id="responsive-data-table_paginate">
	<ul class="pagination">
		{{-- Previous Page Link --}}
		@if ($paginator->onFirstPage())
			<li class="paginate_button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
				<span class="page-link" aria-hidden="true">&lsaquo;</span>
			</li>
		@else
			<li class="paginate_button page-item">
				<a href="javascript:void(0)" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
			</li>
		@endif

		{{-- Pagination Elements --}}
		@foreach ($elements as $element)
			{{-- "Three Dots" Separator --}}
			@if (is_string($element))
				<li class="paginate_button page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
			@endif

			{{-- Array Of Links --}}
			@if (is_array($element))
				@foreach ($element as $page => $url)
					@if ($page == $paginator->currentPage())
						<li class="paginate_button page-item active" wire:key="paginator-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>
					@else
						<li class="paginate_button page-item" wire:key="paginator-page-{{ $page }}"><a href="javascript:void(0)" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
					@endif
				@endforeach
			@endif
		@endforeach

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<li class="paginate_button page-item">
				<a href="javascript:void(0)" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
			</li>
		@else
			<li class="paginate_button page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
				<!--span class="page-link" aria-hidden="true">&rsaquo;</span-->
				<a href="#" aria-controls="responsive-data-table" data-dt-idx="4" tabindex="0" class="page-link">&rsaquo;</a>
			</li>
		@endif
	</ul>
</div>
@endif
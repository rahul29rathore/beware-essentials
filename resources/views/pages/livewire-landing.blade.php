@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}">
<style>
	.inner-wrapper,body, html {
    overflow: initial;
}
</style>
@endsection
@section('content')
	@if(\Request::route()->getName() == "product")
		@livewire('frontend.product')
	@elseif(\Request::route()->getName() == "products")
		@livewire('frontend.products')
	@else
		@livewire('frontend.categories')
	@endif
@endsection
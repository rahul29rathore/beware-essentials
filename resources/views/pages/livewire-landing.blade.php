@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}">
<style>
	.inner-wrapper,body, html {
    overflow: initial;
}
</style>

@endsection

@section('title') CCTV, Biometric & Security Devices | Beware Essentials  @endsection
@section('meta_description') Discover CCTV cameras, DVRs, metal detectors & biometric systems from Beware Essentials. Trusted for affordable & advanced security. @endsection
@section('meta_keywords') CCTV, Biometric, Security, DVR, Detector,Beware, Beware Essentials, Camera @endsection
@section('other')  @endsection

@section('content')
	@if(\Request::route()->getName() == "product")
		@livewire('frontend.product')
	@elseif(\Request::route()->getName() == "products")
		@livewire('frontend.products')
	@else
		@livewire('frontend.categories')
	@endif
@endsection
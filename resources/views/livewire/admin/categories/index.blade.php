@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
	    @if(\Request::route()->getName() == "admin.categories.sub-categories.index")
		<h1>Sub Categories</h1>
	    @else
		<h1>Main Categories</h1>
		@endif
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Categories</p>
	 </div>
	 <!--div><a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a></div-->
  </div>
  @livewire('admin.categories')
</div>
@endsection
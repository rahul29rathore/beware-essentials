@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Products</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Products</p>
	 </div>
	 <div><a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a></div>
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-body">
		      @livewire('admin.products.products')
			</div>
		</div>
	 </div>
  </div>
</div>
@endsection
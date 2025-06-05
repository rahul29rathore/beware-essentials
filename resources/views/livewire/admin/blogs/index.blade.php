@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Blog</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>blogs</p>
	 </div>
	 <div><a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a></div>
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-body">
		      @livewire('admin.blogs.blogs')
			</div>
		</div>
	 </div>
  </div>
</div>
@endsection
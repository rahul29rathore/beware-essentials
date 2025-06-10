@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Seo Tags</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>SeoTags</p>
	 </div>
	 <div><a href="{{ route('admin.seotags.create') }}" class="btn btn-primary">Add Seo Tags</a></div>
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-body">
		      @livewire('admin.seotags.seotags')
			</div>
		</div>
	 </div>
  </div>
</div>
@endsection
@extends('layouts.admin')
@section('stylesheet')
<link href="{{asset('assets/css/quill.snow.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>{{ isset($id) ? 'Edit' : 'Add' }} Blog</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Blog</p>
	 </div>
	 <div><a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">View All</a></div>
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-header card-header-border-bottom">
			  <h2>{{ isset($id) ? 'Edit' : 'Add' }} Blog</h2>
		   </div>
		   <div class="card-body">
		   	  @livewire('admin.blogs.create-update-blog', ['selected_id' => $id ?? null ])
		   </div>
		</div>
	 </div>
  </div>
</div>
@endsection
@push('scriptBottom')
<script src="{{asset('assets/js/quill.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-tagsinput.min.js')}}"></script>
@endpush
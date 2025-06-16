@extends('layouts.admin')
@section('stylesheet')
<link href="{{asset('assets/css/quill.snow.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="content">
  <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
	 <div>
		<h1>Carrers</h1>
		<p class="breadcrumbs"><span><a href="{{ route('admin.dashboard') }}">Dashboard</a></span> <span><i class="mdi mdi-chevron-right"></i></span>Carrers</p>
	 </div>
	
  </div>
  <div class="row">
	 <div class="col-12">
		<div class="card card-default">
		   <div class="card-header card-header-border-bottom">
			 
		   </div>
		   <div class="card-body">
		   	
			   
	<div class="table-responsive">
		<div id="responsive-data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
			
			<table id="responsive-data-table-1" class="table" style="width:100%">
				<thead>
				   <tr>
					  <th>ID</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>Message</th>
					  <th>Resume</th>
					 
				   </tr>
				   </thead>

				   @foreach($carrers as $user)
				   <tr>
					  <td>{{ $user->id }}</td>
					  <!--td><img class="tbl-thumb" src="assets/img/products/p1.jpg" alt="Product Image"></td-->
					  <td>{{ $user->name }}</td>
					  <td>{{ $user->email }}</td>
					  <td>
					      {{ $user->phone }}
					  </td>
					  <!--td>active</td-->
					  <td>{{ $user->message }}</td>
					
					  <td>
					  		<a href="{{ asset('storage/'.@$user->images[0]->collection_name.'/'.@$user->images[0]['id'].'/'.@$user->images[0]['file_name']) }}"  alt="Resume">
					  			{{@$user->images[0]['file_name']}}
					  		</a>

					  	<?php //echo "<pre>"; print_r(@$user->images[0]->collection_name); ?></td>
					 </tr>
				   @endforeach
				
				
			</table>
				   
		</div>
	</div>
	
	<!-- SLIDE POPUP -->
	
</div>
</div>
</div>
</div>
</div>

		  
@endsection


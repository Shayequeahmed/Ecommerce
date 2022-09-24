@extends('layouts.admin.main')

@section('title','SubCategory |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> Size Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="" class="btn btn-gradient-primary btn-fw">New Size</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($sizes) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Size </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($sizes as $size)
			            <tr>
			              <td>{{ $size->id }}</td>
			              <td> {{ $size->size }} </td>
			              <td> {{ date('d-m-Y', strtotime($size->created_at) ) }} </td>
			              <td><a href="{{route('size.edit',$size->id)}}"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
			            </tr>
		            @endforeach
		          </tbody>
		        </table>
	         @else
		        <div class="card-body">
	            <blockquote class="blockquote blockquote-primary">
	              <p>No Record Found</p>
	            </blockquote>
	          </div>
	    		 @endif
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection()
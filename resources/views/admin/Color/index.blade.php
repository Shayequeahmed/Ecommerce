@extends('layouts.admin.main')

@section('title','Color |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> Color Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="" class="btn btn-gradient-primary btn-fw">New Color</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($colors) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Color </th>
		              <th> Code </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($colors as $color)
			            <tr>
			              <td>{{ $color->id }}</td>
			              <td> {{ $color->color }} </td>
			              <td> {{ $color->code }} </td>
			              <td> {{ date('d-m-Y', strtotime($color->created_at) ) }} </td>
			              <td><a href="#"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
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
	    {{$colors->links()}}
	</div>
</div>
@endsection()
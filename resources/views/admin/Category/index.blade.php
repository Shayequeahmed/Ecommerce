@extends('layouts.admin.main')

@section('title','Category |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> Category Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="{{route('category.create')}}" class="btn btn-gradient-primary btn-fw">New Category</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($categories) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Image </th>
		              <th> Category </th>
		              <th> Status </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($categories as $category)
			            <tr>
			              <td>{{ $category->id }}</td>
			              <td class="py-1">
			                @if(isset($category->image))
			                	<img src="{{asset('uploads')}}/{{$category->image}}" alt="image" />
			                @else
			                	<img src="{{asset('uploads/No-image-available.png')}}" alt="image" />
			                @endif
			              </td>
			              <td> {{ $category->category }} </td>
			              <td> 
			              	@if($category->status == 1 )
			              	  <label class="badge badge-success">Active</label>
			              	@else
			              		<label class="badge badge-danger">Inactive</label>
			              	@endif
			            	</td>
			              <td> {{ date('d-m-Y', strtotime($category->created_at) ) }} </td>
			              <td><a href="{{route('category.edit',$category->id)}}"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
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
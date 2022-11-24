@extends('layouts.admin.main')

@section('title','SubCategory |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> SubCategory Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="{{route('subcategory.create')}}" class="btn btn-gradient-primary btn-fw">New SubCategory</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($subcategories) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Image </th>
		              <th> SubCategory </th>
		              <th> Category </th>
		              <th> Status </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($subcategories as $subcategory)
			            <tr>
			              <td>{{ $subcategory->id }}</td>
			              <td class="py-1">
			                @if(isset($subcategory->image))
			                	<img src="{{asset('uploads')}}/{{$subcategory->image}}" alt="image" />
			                @else
			                	<img src="{{asset('uploads/no_images.png')}}" alt="image" />
			                @endif
			              </td>
			              <td> {{ $subcategory->sub_category }} </td>
			              <td> {{ $subcategory->category->category }} </td>
			              <td> 
			              	@if($subcategory->status == 1 )
			              	  <label class="badge badge-success">Active</label>
			              	@else
			              		<label class="badge badge-danger">Inactive</label>
			              	@endif
			            	</td>
			              <td> {{ date('d-m-Y', strtotime($subcategory->created_at) ) }} </td>
			              <td><a href="{{route('subcategory.edit',$subcategory->id)}}"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
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
@extends('layouts.admin.main')

@section('title','Brand |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> Brand Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="{{ route('brand.create') }}" class="btn btn-gradient-primary btn-fw">New Brand</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($brands) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Image </th>
		              <th> Brand </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($brands as $brand)
			            <tr>
			              <td>{{ $brand->id }}</td>
			              <td class="py-1">
			                @if(isset($category->image))
			                	<img src="{{asset('uploads')}}/{{$brand->image}}" alt="image" />
			                @else
			                	<img src="{{asset('uploads/No-image-available.png')}}" alt="image" />
			                @endif
			              </td>
			              <td> {{ $brand->brand }} </td>
			              <td> {{ date('d-m-Y', strtotime($brand->created_at) ) }} </td>
			              <td><a href="{{route('brand.edit',$brand->id)}}"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
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
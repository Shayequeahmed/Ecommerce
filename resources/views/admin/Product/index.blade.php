@extends('layouts.admin.main')

@section('title','Product |E-Shopper')

@section('content')
<div class="content-wrapper">
		@include('admin.include.message')
    <div class="page-header">
      <h3 class="page-title"> Product Table </h3>
      <nav aria-label="breadcrumb">
      	<a href="{{route('product.create')}}" class="btn btn-gradient-primary btn-fw">New Product</a>
      </nav>
    </div>
	<div class="row">
	  <div class="col-lg-12 grid-margin stretch-card">
	    <div class="card">
	      <div class="card-body">
	  			@if(count($products) > 0)
		        <table class="table table-striped">
		          <thead>
		            <tr>
		              <th> Id </th>
		              <th> Title </th>
		              <th> Code </th>
		              <th> Slug </th>
		              <th> Selling Price </th>
		              <th> Marked Price </th>
		              <th> Created At </th>
		              <th> Action </th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach($products as $product)
			            <tr>
			              <td>{{ $product->id }}</td>
			              <td>{{ $product->title }}</td>
			              <td>{{ $product->code }}</td>
			              <td>{{ $product->slug }}</td>
			              <td>{{ $product->price_sp }}</td>
			              <td>{{ $product->price_mp }}</td>
			              <td>{{ date('d-m-Y', strtotime($product->created_at) ) }} </td>
			              <td><a href="{{route('product.edit',$product->id)}}"><i class="mdi mdi-pencil-box icon-md"></i></a></td>
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
	    {{$products->links()}}
	</div>
</div>
@endsection()
@extends('layouts.admin.main')

@section('title', 'Edit Brand | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Edit Brand </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1" class="text-primary">Brand Name</label>
                <input type="text" class="form-control" placeholder="Brand Name" name="name" value="{{ $brand->name }}">
                @error('name')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label class="text-primary">Brand Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              @if(isset($brand->image))
                <div class="col-6 pr-1">
                  <img src="{{asset('uploads')}}/{{ $brand->image }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                </div>
              @endif
              <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
              <a href="{{route('brand.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
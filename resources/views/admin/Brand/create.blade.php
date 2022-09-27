@extends('layouts.admin.main')

@section('title', 'Create Brand | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create Brand </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Brand Name</label>
                <input type="text" class="form-control" placeholder="Brand Name" name="name" value="{{ old('name') }}">
                @error('name')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label>Brand Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <a href="{{route('brand.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
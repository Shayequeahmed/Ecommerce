@extends('layouts.admin.main')

@section('title', 'Create Category | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create Category </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Category Name</label>
                <input type="text" class="form-control" placeholder="Category Name" name="category">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" rows="4" name="description"></textarea>
              </div>
              <div class="form-group">
                <label>Category Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
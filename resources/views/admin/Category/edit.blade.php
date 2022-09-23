@extends('layouts.admin.main')

@section('title', 'Edit Category | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Edit Category </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1" class="text-primary">Category Name</label>
                <input type="text" class="form-control" placeholder="Category Name" name="category" value="{{ $category->category }}">
                @error('category')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleTextarea1" class="text-primary">Description</label>
                <textarea class="form-control" rows="4" name="description">{{ $category->description }}</textarea>
                @error('description')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label class="text-primary">Category Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              @if(isset($category->image))
                <div class="col-6 pr-1">
                  <img src="{{asset('uploads')}}/{{ $category->image }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                </div>
              @endif
              <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
              <a href="{{route('category.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
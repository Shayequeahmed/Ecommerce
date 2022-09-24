@extends('layouts.admin.main')

@section('title', 'Create SubCategory | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create SubCategory </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">SubCategory Name</label>
                <input type="text" class="form-control" placeholder="Category Name" name="category" value="{{ old('category') }}">
                @error('category')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label>SubCategory Image</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control"  name="category_id">
                  <option>Select Category</option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category}}</option>
                  @endforeach
                </select>
                @error('category_id')
                  <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <a href="{{route('subcategory.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
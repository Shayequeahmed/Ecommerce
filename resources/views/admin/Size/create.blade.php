@extends('layouts.admin.main')

@section('title', 'Create Size | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create Size </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('size.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Size</label>
                <input type="text" class="form-control" placeholder="Size" name="size" value="{{ old('size') }}">
                @error('size')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <a href="{{route('size.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
@extends('layouts.admin.main')

@section('title', 'Create Color | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create Color </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('color.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Color</label>
                <input type="text" class="form-control" placeholder="Color Name" name="color" value="{{ old('color') }}">
                @error('color')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Color code</label>
                <input type="text" class="form-control" placeholder="Color Code" name="code" value="{{ old('code') }}">
                @error('code')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <a href="{{route('color.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
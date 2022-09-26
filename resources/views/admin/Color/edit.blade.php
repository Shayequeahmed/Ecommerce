@extends('layouts.admin.main')

@section('title', 'Edit Color | E-Shopper')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Edit Color </h3>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="{{route('color.update',$color->id)}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputUsername1" class="text-primary">Color</label>
                <input type="text" class="form-control" placeholder="Size" name="color" value="{{ $color->color }}">
                @error('color')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1" class="text-primary">Code</label>
                <input type="text" class="form-control" placeholder="Code" name="code" value="{{ $color->code }}">
                @error('code')
                <p class="text-danger">{{  $message }}</p>
                @enderror
              </div>
              <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
              <a href="{{route('color.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection()
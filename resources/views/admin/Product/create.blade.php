@extends('layouts.admin.main')

@section('title', 'Create Product | E-Shopper')

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Create Product </h3>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample" action="{{route('product.store')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="title"> Title </label>
              <input type="text" class="form-control" placeholder="Product Title" name="title" value="{{ old('title') }}">
              @error('title')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="code"> Code </label>
              <input type="text" class="form-control" placeholder="Product Code" name="code" value="{{ old('code') }}">
              @error('code')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="summary">Summary</label>
              <textarea class="form-control" rows="4" name="summary">{{ old('summary') }}</textarea>
              @error('summary')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
              @error('description')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="price_mp"> Mark Price </label>
              <input type="number" class="form-control" placeholder="Mark Price" name="price_mp" value="{{ old('price_mp') }}">
              @error('price_mp')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="price_sp"> Selling Price </label>
              <input type="number" class="form-control" placeholder="Selling Price" name="price_sp" value="{{ old('price_sp') }}">
              @error('price_sp')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label for="brand_id">Select Brand</label>
              <select class="form-control"  name="brand_id" id="brand_dropdown" >
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                  <option value="{{$brand->id}}" @if(old('brand_id') == $brand->id)  {{'selected'}} @endif>{{$brand->name}}</option>
                @endforeach
              </select>
              @error('brand_id')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control"  name="category_id" id="category-dropdown">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}" >{{$category->category}}</option>
                @endforeach
              </select>
              @error('category_id')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label>Select Sub Category</label>
              <select class="form-control"  name="sub_category_id" id="sub_category-dropdown">
              </select>
              @error('category_id')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
            <a href="{{route('category.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>
@endsection()

    
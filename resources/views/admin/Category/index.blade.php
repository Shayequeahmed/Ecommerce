@extends('layouts.admin.main')

@section('title','Category |E-Shopper')

@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Category Table </h3>
              <nav aria-label="breadcrumb">
              	<button type="button" class="btn btn-gradient-primary btn-fw">New Category</button>
                
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Image </th>
                          <th> Category </th>
                          <th> Status </th>
                          <th> Created At </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> Herman Beck </td>
                          <td><label class="badge badge-danger">Inactive</label></td>
                          <td> May 15, 2015 </td>
                          <td><i class="mdi mdi-pencil-box mdi-24px"></i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> Herman Beck </td>
                          <td><label class="badge badge-success">Active</label></td>
                          <td> May 15, 2015 </td>
                          <td><i class="mdi mdi-pencil-box mdi-24px"></i></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="py-1">
                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> Herman Beck </td>
                         <td><label class="badge badge-success">Active</label></td>
                          <td> May 15, 2015 </td>
                          <td><i class="mdi mdi-pencil-box mdi-24px"></i></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection()
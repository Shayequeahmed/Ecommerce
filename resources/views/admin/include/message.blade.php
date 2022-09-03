@if(Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi-check-circle-fill"></i>
      <strong class="mx-2">Success!</strong> {{ Session::get('success') }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
  </div>
@endif

@if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
       <i class="bi-exclamation-octagon-fill"></i>
      <strong class="mx-2">Error!</strong> {{ Session::get('error') }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
  </div>
@endif

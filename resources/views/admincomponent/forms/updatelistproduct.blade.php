@extends('layoutadmin.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update product portfolio </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container">
    <form class="needs-validation" novalidate method="POST" action="{{url('admin/form/listproducts/update/'.$data->id)}}">
        @csrf
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom01">Name of product portfolio</label>
            <input type="text" class="form-control" id="validationCustom01"  name="name" value="{{$data->tendm}}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Status</label>
              <input type="number" class="form-control" id="validationCustom01"  name="status" value="{{$data->status}}" min="0" max="1" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Create Date</label>
                <input type="date" class="form-control "id="validationCustom02" placeholder=" " name="created" value="{{$data->created_date}}" required  value="">
              <div class="valid-feedback">
                  Looks good!
              </div>
            </div>
          </div>




        <button class="btn btn-primary" type="submit">Update form</button>
      </form>

</div>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
@endsection

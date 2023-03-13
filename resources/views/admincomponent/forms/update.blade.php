@extends('layoutadmin.index')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Product </h1>
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
        <form class="needs-validation" novalidate method="POST"
            action="{{ url('admin/form/products/update/' . $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationCustom01">Name of product</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name"
                        value="{{ $data->tensp }}" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Price</label>
                    <input type="text" class="form-control "id="validationCustom02" value="{{ $data->giasp }}"
                        name="giasp" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Quantity</label>
                    <input type="number" class="form-control "id="validationCustom02" value="{{ $data->soluong }}"
                        name="soluong" required>
                    <div class="invalid-feedback">
                        Again.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Id product portfolio</label>
                    <input type="number" min="0" max="3" class="form-control" id="validationCustom01" value="{{ $data->ID_DMSP }}"
                        name="ID_DMSP" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Status</label>
                    <input type="number" min="0" max="1" class="form-control" id="validationCustom01"
                        name="status" value="{{ $data->status }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationCustom03">Description</label>
                    <input type="text" class="form-control" id="validationCustom03" value="{{ $data->mota }}"
                        name="mota">

                </div>
                <div class="col-md-12 mb-3">
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input name="image_update" type="file" class="custom-file-input form-label"
                                id="validationCustom01" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="validationCustom01" for="inputGroupFile01">Choose
                                image</label>
                        </div>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="validationCustom01"></label>
                    <input type="hidden" class="form-control" id="validationCustom01" name="old_data"
                        value="{{ $data->link }}">
                </div>

                {{-- //////////////////////////////// --}}

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

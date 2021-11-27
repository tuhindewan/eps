@extends('admin.master')

@push('page-css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush

@section('main-content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Mobile Top-up</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Mobile Top-up</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    @include('admin.partials.alert_message')
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="{{ route('mobile.update', $mobile) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" name="title" value="{{ old('title', $mobile->title) }}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea id="summernote" name="description">
                            {{ $mobile->description }}
                        </textarea>
                      </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
@push('page-js')
<!-- jquery-validation -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
      $('#summernote').summernote();
    });
</script>
@endpush

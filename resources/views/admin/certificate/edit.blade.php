@extends('admin.layout.app')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">Edit Certifciate</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Certifciate</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('certificate-update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="hidden" name="old_image" value="{{ $data->image }}">
                                <div class="row">

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label"> Certificate Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Enter Certificate Name" value="{{ $data->name }}">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label">Certificate Photo</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{ asset($data->image) }}"
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    Certifciate</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
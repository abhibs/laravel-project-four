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

                                <li class="breadcrumb-item active">Add Project</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Project</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('project-store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="form-group col-md-4 mb-3">
                                        <label for="inputEmail4" class="form-label">Project Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Enter Project Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-4 mb-3">
                                        <label for="inputEmail4" class="form-label">Project Github URL </label>
                                        <input type="text" name="github" class="form-control" id="inputEmail4"
                                            placeholder="Enter Project Github URL">
                                        @error('github')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 mb-3">
                                        <label for="inputEmail4" class="form-label">Project Youtube URL </label>
                                        <input type="text" name="youtube" class="form-control" id="inputEmail4"
                                            placeholder="Enter Project Youtube URL">
                                        @error('youtube')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label">Project Photo</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{ url('no_image.jpg') }} "
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Technology Used </label>
                                        <input type="text" name="tags" class="selectize-close-btn" value="Laravel">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Add Project</button>

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

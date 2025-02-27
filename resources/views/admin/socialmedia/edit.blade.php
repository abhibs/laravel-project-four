@extends('admin.layout.app')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Edit Social Media</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Social Media</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('social-media-update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Social Media URL </label>
                                        <input type="text" name="url" class="form-control" id="inputEmail4"
                                            placeholder="Enter Social Media URL" autocomplete="off" value="{{ $data->url }}">

                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Social Media Icon </label>
                                        <input type="text" name="icon" class="form-control" id="inputEmail4"
                                            placeholder="Enter Social Media Icon" autocomplete="off" value="{{ $data->icon }}">

                                    </div>


                                </div>



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update Social Media</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection

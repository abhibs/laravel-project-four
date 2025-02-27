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

                                <li class="breadcrumb-item active">Edit Skill</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Skill</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Form row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="myForm" method="post" action="{{ route('skill-update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Enter Skill Name" value="{{ $data->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Percentage Know </label>
                                        <input type="number" name="number" class="form-control" id="inputEmail4"
                                            placeholder="Enter Percentage Know" value="{{ $data->number }}">
                                        @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>






                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update
                                    Skill</button>

                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->
@endsection
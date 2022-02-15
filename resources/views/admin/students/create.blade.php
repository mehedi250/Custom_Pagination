@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Information</div>

                <div class="card-body">
                   
                    <form method="POST" action="{{route('students.store')}}" class="form-horizontal" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                            <h5>Add Form</h5>
                            <div class="row col-md-12">
                                <div class="col-md-6 col-sm-12 py-2">
                                    <div class="form-group">
                                        <label for="name">Name  <span class="text-danger position-relative">*</span></label>
                                        <input class="form-control" type="text" name="full_name" placeholder="Full Name" id="name" required>
                                        <span class="d-none invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 py-2">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger position-relative">*</span></label>
                                        <input class="form-control" type="email" name="email" placeholder="Email" id="email" required>
                                        <span class="d-none invalid-feedback"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <a href="{{route('students.index')}}" class="btn btn-outline-dark">Cancel</a>
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
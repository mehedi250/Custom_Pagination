@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.flash_message')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Information</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4>List</h4>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{route('students.create')}}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                    <div class="row">
                        <table id="" class="table table-striped" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $student->full_name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                          
                                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-sm btn-primary text-white text-center"><i class="far fa-edit"></i></a>
                                    <form style="display:inline;" method="POST" action="{{route('students.destroy',$student->id)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a class="deleteEvent btn btn-sm btn-danger text-white text-center" ><i class="fa-times fas"></i></a>
                                            
                                    </form>
                              
                                </td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('.deleteEvent').click(function(){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    // swal("Poof! Your imaginary file has been deleted!", {
                    // icon: "success",
                    // });
                    $(this).closest('form').submit();
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
            
            
          
        
        });
    });
</script>
@endsection
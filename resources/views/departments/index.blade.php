@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Departments
                    <a href="{{url('admin/departments/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
                    <a href="{{url('admin/selected-departments')}}" class="float-right btn btn-danger btn-sm mr-3" id="deleteAllSelected">Delete All Selected</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('Success'))
                    <p class="text-success">{{session('Success')}}</p>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="" id="select_all_ids"></th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><input type="checkbox" name="" id="select_all_ids"></th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($departments as $department)
                            <tr id="data_ids{{$department->id}}">
                                <td><input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{$department->id}}"></td>
                                <td>{{ $department->id }}</td>
                                <td>{{ $department->title }}</td>
                                <td>{{ $department->detail }}</td>
                                <td>
                                    <a href="{{url('admin/departments/'.$department->id)}}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{url('admin/departments/'.$department->id).'/edit'}}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Are you sure you want to delete this data?')"
                                       href="{{url('admin/departments/'.$department->id).'/delete'}}"
                                       class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    @section('scripts')
        <!-- Custom styles for this page -->
        <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Page level plugins -->
        <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/js/demo/datatables-demo.js"></script>

        <script>
            $(function(e){
                $("#select_all_ids").click(function (){
                    $('.checkbox_ids').prop('checked', $(this).prop('checked'));
                });

                $('#deleteAllSelected').click(function (e){
                    e.preventDefault();
                    var all_ids = [];
                    $('input:checkbox[name=ids]:checked').each(function (){
                        all_ids.push($(this).val());
                    });

                    $.ajax({
                        url:"{{route('departments.delete')}}",
                        type:"DELETE",
                        data:{
                            ids:all_ids,
                            _token:'{{ csrf_token() }}'
                        },
                        success:function(response){
                            $.each(all_ids,function (key, val){
                                $('#data_ids'+val).remove();
                            })
                        }
                    })
                });
            });
        </script>

    @endsection

@endsection

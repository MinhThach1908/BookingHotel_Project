@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Departments</h6>
                <a href="{{url('admin/departments')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <td>{{ $department->id }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $department->title }}</td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td>{{ $department->detail }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


@endsection

@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Department</h6>
                <a href="{{url('admin/departments')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                @if(Session::has('Success'))
                    <p class="text-success">{{session('Success')}}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" id="detail" name="detail"></textarea>
                        </div>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </td>
                        </tr>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Room</h6>
                <a href="{{url('admin/room')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                @if(Session::has('Success'))
                    <p class="text-success">{{session('Success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" action="{{url('admin/room/create')}}">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>Select Room Type</th>
                                <td>
                                    <select name="rt_id" class="form-control">
                                        <option value="0">--- Select one ---</option>
                                        @foreach($roomtypes as $rt)
                                            <option value="{{$rt->id}}">{{$rt->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="btn btn-primary" value="Submit"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
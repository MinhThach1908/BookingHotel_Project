@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Room Type</h6>
                <a href="{{url('admin/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if(Session::has('Success'))
                    <p class="text-success">{{session('Success')}}</p>
                @endif
                <div class="table-responsive">
                    <form enctype="multipart/form-data" method="post" action="{{url('admin/roomtype/create')}}">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input type="number" name="price" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td><textarea name="detail" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Gallery</th>
                                <td><input type="file" multiple name="imgs[]" /></td>
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

@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Staff
                    <a href="{{url('admin/staff')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('Success'))
                    <p class="text-success">{{session('Success')}}</p>
                @endif
                <div class="table-responsive">
                    <form name="menu-form" enctype="multipart/form-data" method="post" action="{{url('admin/staff')}}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td><input name="full_name" type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Select Department</th>
                                <td>
                                    <select name="department_id" class="form-control">
                                        <option value="0">--- Select ---</option>
                                        @foreach($departs as $dp)
                                            <option value="{{$dp->id}}">{{$dp->title}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><button class="btn btn-primary" type="button" id="upload_widget">Upload Image</button></td>
                            </tr>
                            <tr>
                                <th>Bio</th>
                                <td><textarea class="form-control" name="bio"></textarea></td>
                            </tr>
                            <tr>
                                <th>Salary Type</th>
                                <td>
                                    <input type="radio" name="salary_type" value="daily"> Daily
                                    <input type="radio" name="salary_type" value="monthly"> Monthly
                                </td>
                            </tr>
                            <tr>
                                <th>Salary Amount</th>
                                <td><input name="salary_amount" class="form-control" type="number" /></td>
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
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dnzm9x2ep',
                uploadPreset: 'Booking_Hotel'}, function (error, result) {
                if (!error && result && result.event === "success") {
                    //console.log('Done! Here is the image info: ', result.info.url);
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['menu-form'].value = result.info.secure_url;
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>

@endsection

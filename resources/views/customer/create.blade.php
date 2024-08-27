@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Customer
                    <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
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
                    <form name="menu-form" method="post" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                        @csrf
                        <table class="table table-bordered" >
                            <tr>
                                <th>Full Name <span class="text-danger">*</span></th>
                                <td><input name="full_name" type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Email <span class="text-danger">*</span></th>
                                <td><input name="email" type="email" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Password <span class="text-danger">*</span></th>
                                <td><input name="password" type="password" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Phone Number <span class="text-danger">*</span></th>
                                <td><input name="phone" type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><button class="btn btn-primary" type="button" id="upload_widget">Upload Image</button></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><textarea name="address" class="form-control"></textarea></td>
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

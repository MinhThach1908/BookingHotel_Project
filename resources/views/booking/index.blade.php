@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Bookings
                    <a href="{{url('admin/booking/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
                    <a href="{{url('admin/selected-booking')}}" class="float-right btn btn-danger btn-sm mr-3" id="deleteAllSelected">Delete All Selected</a>
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
                            <th>Customer</th>
                            <th>Room No.</th>
                            <th>Room Type</th>
                            <th>CheckIn Date</th>
                            <th>CheckOut Date</th>
                            <th>Ref</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><input type="checkbox" name="" id="select_all_ids"></th>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Room No.</th>
                            <th>Room Type</th>
                            <th>CheckIn Date</th>
                            <th>CheckOut Date</th>
                            <th>Ref</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($data as $booking)
                            <tr id="data_ids{{$booking->id}}">
                                <td><input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{$booking->id}}"></td>
                                <td>{{$booking->id}}</td>
                                <td>{{$booking->customer->full_name}}</td>
                                <td>{{$booking->room->title}}</td>
                                <td>{{$booking->room->Roomtype->title}}</td>
                                <td>{{$booking->checkin_date}}</td>
                                <td>{{$booking->checkout_date}}</td>
                                <td>{{$booking->ref}}</td>
                                <td><a href="{{url('admin/booking/'.$booking->id.'/delete')}}" class="text-danger" onclick="return confirm('Are you sure you want to delete this data?')"><i class="fa fa-trash"></i></a></td>
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
                        url:"{{route('booking.delete')}}",
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

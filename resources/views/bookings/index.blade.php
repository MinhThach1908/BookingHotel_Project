@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Booking Form
                    <a href="{{url('admin/bookings/create')}}" class="float-right btn btn-success btn-sm">Add New</a>
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
                            <th>#</th>
                            <th>Customer ID</th>
                            <th>Room ID</th>
                            <th>Phone</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Total Adults</th>
                            <th>Total Children</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Customer ID</th>
                            <th>Room ID</th>
                            <th>Phone</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Total Adults</th>
                            <th>Total Children</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if($bookings)
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->customer_id }}</td>
                                    <td>{{ $booking->room_id }}</td>
                                    <td>{{ $booking->phone }}</td>
                                    <td>{{ $booking->checkin_date }}</td>
                                    <td>{{ $booking->checkout_date }}</td>
                                    <td>{{ $booking->total_adults }}</td>
                                    <td>{{ $booking->total_children }}</td>
                                    <td>
                                    <td>
                                        <a href="{{url('admin/bookings/'.$booking->id)}}" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="{{url('admin/bookings/'.$booking->id).'/edit'}}"
                                           class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a onclick="return confirm('Are you sure you want to delete this data?')"
                                           href="{{url('admin/bookings/'.$booking->id).'/delete'}}"
                                           class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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

    @endsection

@endsection

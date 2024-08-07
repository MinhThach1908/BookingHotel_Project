@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Room Types</h6>
                <a href="{{url('admin/bookings')}}" class="float-right btn btn-success btn-sm">View All</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <td>{{ $booking->id }}</td>
                        </tr>
                        <tr>
                            <th>Customer ID</th>
                            <td>{{ $booking->customer_id }}</td>
                        </tr>
                        <tr>
                            <th>Room ID</th>
                            <td>{{ $booking->room_id }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $booking->phone }}</td>
                        </tr>
                        <tr>
                            <th>Check-in Date</th>
                            <td>{{ $booking->checkin_date }}</td>
                        </tr>
                        <tr>
                            <th>Check-out Date</th>
                            <td>{{ $booking->checkout_date }}</td>
                        </tr>
                        <tr>
                            <th>Total Adults</th>
                            <td>{{ $booking->total_adults }}</td>
                        </tr>
                        <tr>
                            <th>Total Children</th>
                            <td>{{ $booking->total_children }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


@endsection

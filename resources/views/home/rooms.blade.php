<div  class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                    <form action="{{url('our_rooms')}}" style="padding-top: 40px">
                        <div class="form-row">
                            <!-- Check-in Date -->
                            <div class="form-group col-md-3">
                                <label for="start_date">Check-in Date</label>
                                <input type="date" class="form-control" id="start_date" name="checkin_date" required>
                            </div>

                            <!-- Check-out Date -->
                            <div class="form-group col-md-3">
                                <label for="end_date">Check-out Date</label>
                                <input type="date" class="form-control" id="end_date" name="checkout_date" required>
                            </div>

                            <!-- Number of Adults -->
                            <div class="form-group col-md-3">
                                <label for="adults">Adults</label>
                                <select class="form-control" id="adults" name="adults">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>

                            <!-- Number of Children -->
                            <div class="form-group col-md-3">
                                <label for="children">Children</label>
                                <select class="form-control" id="children" name="children">
                                    <option value="0">0 Children</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                </select>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <button type="submit" class="btn btn-primary btn-block">Search Rooms</button>

                    </form>
                </div>
            </div>
        </div>

        @if($room->isEmpty())
            <div class="alert alert-warning">
                No room available for the selected criteria
            </div>
        @else

            <div class="row">
                @foreach($room as $rooms)
                    <div class="col-md-4 col-sm-6">
                        <div id="serv_hover"  class="room">
                            <div class="room_img">
{{--                                <figure><img style="height: 200px;width: 320px" src="/storage/imgs/{{$rooms->room_view_image}}" alt="#"/></figure>--}}
                                <figure><img style="height: 200px;width: 320px" src="http://127.0.0.1:8000/img/about.png" alt="#"/></figure>
                            </div>
                            <div class="bed_room">
                                <h3>{{$rooms->title}}</h3>
                                <p style="padding:10px ">{!! Str::limit($rooms->room_detail,100) !!} </p>
                                <a class="btn btn-primary" href="{{url('room_details',$rooms->id)}}">Room Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #endDate, #startDate {
            color: white;
        }
    </style>
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="img/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    @include('home.header')
</header>
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
@include('home.slider')
<!-- end banner -->
<!-- about -->
@include('home.about')
<!-- end about -->
<!-- our_room -->
<div  class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
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
                                <figure><img style="height: 200px;width: 320px" src="{{$rooms->room_view_image}}" alt="#"/></figure>
                            </div>
                            <div class="bed_room">
                                <h3>{{$rooms->roomtype->title}}</h3>
                                <p style="padding:10px ">{!! Str::limit($rooms->roomtype->detail,100) !!} </p>
                                <a class="btn btn-primary" href="{{url('room_details')}}">Room Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
    </div>
</div>
<!-- end our_room -->
<!-- gallery -->
@include('home.galary')
<!-- end gallery -->
<!-- blog -->

<!-- end blog -->
<!--  contact -->
@include('home.contact')
<!-- end contact -->
<!--  footer -->
@include('home.footer')
</body>
</html>

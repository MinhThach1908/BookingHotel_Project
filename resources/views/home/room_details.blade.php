<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        label
        {
            display: inline-block;
            width: 200px;
        }

        input
        {
            width: 100%;
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

<div  class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">
                <div id="serv_hover"  class="room">
                    <div style="padding: 20px" class="room_img">
                        <figure><img style="height: 400px;width: 800px" src="{{$room->room_view_image}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>{{$room->title}}</h3>
                        <p style="padding: 12px">{{$room->room_detail}}</p>
                        <h4 style="padding: 12px"> Room Type : {{$room->roomtype->title}} </h4>
                        <h3 style="padding: 12px"> Price : {{$room->roomtype->price}} </h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <h1 style="font-size: 40px!important;">Book Room</h1>
                <div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" style="background-color: grey;" class="close" data-bs-dismiss="alert">X</button>

                            {{session()->get('message')}}
                        </div>
                    @endif
                </div>
                @if($errors)

                    @foreach($errors->all() as $errors)

                        <li style="color:red">
                            {{$errors}}
                        </li>

                    @endforeach

                @endif

                <form action="{{route('paypal')}}" method="Post">

                    @csrf
                    <tr>
                        <th>Customer Id <span class="text-danger">*</span></th>
                        <td><input name="customer_id" type="text" class="form-control"/></td>
                    </tr>
                    <tr>
                        <th>CheckIn Date <span class="text-danger">*</span></th>
                        <td><input id="startDate" name="startDate" type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <th>CheckOut Date <span class="text-danger">*</span></th>
                        <td><input id="endDate" name="endDate" type="date" class="form-control"/></td>
                    </tr>
                    <tr>
                        <th>Total Adults <span class="text-danger">*</span></th>
                        <td><input name="total_adults" type="text" class="form-control"/></td>
                    </tr>
                    <tr>
                        <th>Total Children</th>
                        <td><input name="total_children" type="text" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            @if(Session::has('data'))
                                <input type="hidden" name="customer_id" value="{{session('data')[0]->id}}"/>
                            @endif
                            <input type="hidden" name="room_id" value="{{$room->id}}">
                            <input type="hidden" name="roomprice" class="room-price" value="{{$room->roomtype->price}}"/>
                            <input type="hidden" name="ref" value="front"/>
                            <input type="submit" class="btn btn-primary mt-3" value="Submit"/>
                        </td>
                    </tr>
                </form>

            </div>
        </div>
    </div>
</div>




<!-- end header inner -->
<!-- end header -->
<!--  footer -->
@include('home.footer')

<script type="text/javascript">

    $(function (){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;

        var day = dtToday.getDate();

        var year = dtToday.getFullYear();

        if(month < 10)
            month = '0' +day.toString();

        if(day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#startDate').attr('min', maxDate);
        $('#endDate').attr('min', maxDate);

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>
</html>

<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="img/banner1.jpg" alt="First slide">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="img/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="img/banner3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="booking_ocline">
        <div class="container">
            <div class="row">
                <div class="container mt-5">
                    <h2 class="text-center mb-4" style="color: white">Search for Available Rooms</h2>
                    <form action="{{url('our_rooms')}}">
                        <div class="form-row">
                            <!-- Check-in Date -->
                            <div class="form-group col-md-3">
                                <label for="start_date" style="color: white">Check-in Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>

                            <!-- Check-out Date -->
                            <div class="form-group col-md-3">
                                <label for="end_date" style="color: white">Check-out Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>

                            <!-- Number of Adults -->
                            <div class="form-group col-md-3">
                                <label for="adults" style="color: white">Adults</label>
                                <select class="form-control" id="adults" name="adults">
                                    <option value="1">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                </select>
                            </div>

                            <!-- Number of Children -->
                            <div class="form-group col-md-3">
                                <label for="children" style="color: white">Children</label>
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
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>

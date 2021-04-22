<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NearBy Stays</title>

    <link href="http://fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&amp;display=swap" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @include("components.head")
    <link rel="stylesheet" type="text/css" href="assets/slick/datepicker.css" />
    <link rel="stylesheet" href="assets/slick/tooplate-style.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>

    @include("components.header")

    <section class="w3l-breadcrumb">
        <div class="tm-bg-white ie-container-width-fix-2">
            <div class="container ie-h-align-center-fix">
                <div class="row">
                    <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                        <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-100">
                                    <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                    <input name="city" type="text" class="form-control" id="inputCity"
                                        placeholder="Type your destination...">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-50">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-in" type="text" class="form-control" id="inputCheckIn"
                                        placeholder="Check In">
                                    <div class="qs-datepicker qs-hidden">
                                        <div class="qs-controls">
                                            <div class="qs-arrow qs-left"></div>
                                            <div class="qs-month-year">
                                                <span class="qs-month">April</span>
                                                <span class="qs-year">2021</span>
                                            </div>
                                            <div class="qs-arrow qs-right"></div>
                                        </div>
                                        <div class="qs-squares">
                                            <div class="qs-square qs-day">Sun</div>
                                            <div class="qs-square qs-day">Mon</div>
                                            <div class="qs-square qs-day">Tue</div>
                                            <div class="qs-square qs-day">Wed</div>
                                            <div class="qs-square qs-day">Thu</div>
                                            <div class="qs-square qs-day">Fri</div>
                                            <div class="qs-square qs-day">Sat</div>
                                            <div class="qs-square qs-num Sun qs-empty"></div>
                                            <div class="qs-square qs-num Mon qs-empty"></div>
                                            <div class="qs-square qs-num Tue qs-empty"></div>
                                            <div class="qs-square qs-num Wed qs-empty"></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">1</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">2</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">3</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">4</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">5</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">6</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">7</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">8</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">9</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">10</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">11</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">12</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">13</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">14</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">15</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">16</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">17</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">18</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">19</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">20</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">21</span></div>
                                            <div class="qs-square qs-num Thu qs-current"><span class="qs-num">22</span>
                                            </div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">23</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">24</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">25</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">26</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">27</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">28</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">29</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">30</span></div>
                                            <div class="qs-square qs-num Sat qs-empty"></div>
                                        </div>
                                        <div class="qs-overlay qs-hidden">
                                            <div class="qs-close">✕</div>
                                            <input type="number" class="qs-overlay-year" placeholder="4-digit year">
                                            <div class="qs-submit qs-disabled">Submit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-50">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-out" type="text" class="form-control" id="inputCheckOut"
                                        placeholder="Check Out">
                                    <div class="qs-datepicker qs-hidden">
                                        <div class="qs-controls">
                                            <div class="qs-arrow qs-left"></div>
                                            <div class="qs-month-year">
                                                <span class="qs-month">April</span>
                                                <span class="qs-year">2021</span>
                                            </div>
                                            <div class="qs-arrow qs-right"></div>
                                        </div>
                                        <div class="qs-squares">
                                            <div class="qs-square qs-day">Sun</div>
                                            <div class="qs-square qs-day">Mon</div>
                                            <div class="qs-square qs-day">Tue</div>
                                            <div class="qs-square qs-day">Wed</div>
                                            <div class="qs-square qs-day">Thu</div>
                                            <div class="qs-square qs-day">Fri</div>
                                            <div class="qs-square qs-day">Sat</div>
                                            <div class="qs-square qs-num Sun qs-empty"></div>
                                            <div class="qs-square qs-num Mon qs-empty"></div>
                                            <div class="qs-square qs-num Tue qs-empty"></div>
                                            <div class="qs-square qs-num Wed qs-empty"></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">1</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">2</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">3</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">4</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">5</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">6</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">7</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">8</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">9</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">10</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">11</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">12</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">13</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">14</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">15</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">16</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">17</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">18</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">19</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">20</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">21</span></div>
                                            <div class="qs-square qs-num Thu qs-current"><span class="qs-num">22</span>
                                            </div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">23</span></div>
                                            <div class="qs-square qs-num Sat "><span class="qs-num">24</span></div>
                                            <div class="qs-square qs-num Sun "><span class="qs-num">25</span></div>
                                            <div class="qs-square qs-num Mon "><span class="qs-num">26</span></div>
                                            <div class="qs-square qs-num Tue "><span class="qs-num">27</span></div>
                                            <div class="qs-square qs-num Wed "><span class="qs-num">28</span></div>
                                            <div class="qs-square qs-num Thu "><span class="qs-num">29</span></div>
                                            <div class="qs-square qs-num Fri "><span class="qs-num">30</span></div>
                                            <div class="qs-square qs-num Sat qs-empty"></div>
                                        </div>
                                        <div class="qs-overlay qs-hidden">
                                            <div class="qs-close">✕</div>
                                            <input type="number" class="qs-overlay-year" placeholder="4-digit year">
                                            <div class="qs-submit qs-disabled">Submit</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row tm-search-form-row" style="
                            align-items: center;
                            justify-content: center;
                        ">
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="adult" class="form-control tm-select" id="adult">
                                        <option value="">Adult</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="children" class="form-control tm-select" id="children">
                                        <option value="">Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                </div>
                                {{-- <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="room" class="form-control tm-select" id="room">
                                        <option value="">Room</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                </div> --}}
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <button type="submit" class="btn btn-primary tm-btn-search">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- load JS files -->
        <script src="lib/js/jquery-2.2.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
        <script src="lib/js/popper.min.js"></script> <!-- https://popper.js.org/ -->
        <script src="lib/js/bootstrap.js"></script> <!-- https://getbootstrap.com/ -->
        <script src="lib/js/datepicker.min.js"></script> <!-- https://github.com/qodesmith/datepicker -->
        <script src="lib/js/jquery.singlePageNav.min.js"></script>

        <script>


            $(document).ready(function () {


                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');

            });

        </script>
    </section>

    <!-- room-single-block -->
    <section class="room-single-block">
        <div class="content-with-slider">
            <div class="container">
                <div class="content-photo-1 d-grid">
                    <div class="content-photo-left text-center">
                        <h4>One Tree Farm</h4>
                        <h6>Pune , Maharashtra</h6>
                        <div class="border-line">
                            <div class="bg">
                                <span class="price">₹ 6240</span>
                                <p> Only</p>
                            </div>
                            <div class="book-btn px-2">
                                <a href="booking.html" class="btn btn-style btn-secondary mt-3">Enquire Now</a>
                            </div>
                        </div>
                        <ul class="room-amenities">
                            <li><a href="#url"><span class="fa fa-beer"></span> Entire Villa</a></li>
                            <li><a href="#url"><span class="fa fa-users"></span> 2 Guests</a></li>
                            <li><a href="#url"><span class="fa fa-bed"></span> Double Bed</a></li>
                        </ul>
                        <a href="room.html" class="back"> <span class="fa fa-long-arrow-left"></span> Back to all
                            rooms</a>
                    </div>
                    <div class="content-photo-right">
                        <div class="csslider infinity" id="slider1">
                            <input type="radio" name="slides" checked="checked" id="slides_1" />
                            <input type="radio" name="slides" id="slides_2" />
                            <input type="radio" name="slides" id="slides_3" />
                            <input type="radio" name="slides" id="slides_4" />
                            <ul class="banner_slide_bg">
                                <li>
                                    <img class="img" src="assets/images/slide1.jpg" alt="">
                                </li>
                                <li>
                                    <img class="img" src="assets/images/slide4.jpg" alt="">
                                </li>
                                <li>
                                    <img class="img" src="assets/images/slide2.jpg" alt="">
                                </li>
                                <li>
                                    <img class="img" src="assets/images/slide3.jpg" alt="">
                                </li>
                            </ul>
                            <div class="arrows">
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>
                                <label for="slides_3"></label>
                                <label for="slides_4"></label>
                            </div>
                            <div class="navigation">
                                <div>
                                    <label for="slides_1"></label>
                                    <label for="slides_2"></label>
                                    <label for="slides_3"></label>
                                    <label for="slides_4"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //room-single-block -->
    <section class="w3l-roomsingleblock1 py-5">
        <div class="container py-sm-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="assets/images/rs1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="assets/images/rs2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 roomsingle mt-lg-0 mt-4">
                    <h3 class="title-small">The Room</h3>
                    <p class="roomsingle mt-3">Duis nisi sapien, elementum finibus fermentum eget, aliquet leo. Mauris
                        hendrerit
                        vel ex.
                        Quisque vitae luctus massa. Phasellus sed aliquam leo. Vestibulum ullamcorper a massa eu
                        fringilla.
                        Integer ultrices finibus sed nisi.
                        in convallis felis dapibus sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-roomsingleblock1 py-5">
        <div class="container py-sm-4">
            <div class="row">
                <div class="col-lg-7 roomsingle">
                    <h3 class="title-small">Amenities provided by our hotel</h3>
                    <ul class="w3l-right-book mt-4">
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Flat screen TV</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Free high-speed WiFi</a>
                        </li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Private Bathroom</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Free parking space</a>
                        </li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Early Check-in</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Swimming pool</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Air-conditioning</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Welcome treatment</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Barrier-free rain
                                shower</a></li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Aesop bath amenities</a>
                        </li>
                        <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Bike rental facility</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-4">
                    <img src="assets/images/facilities.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <div id="map"></div>
    <script>
        function initMap() {
            var location = { lat: -25.363, lng: 131.044 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 2,
                center: location

            })
        }
    </script>

    @include('components.footer')

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->

    <!-- script for owlcarousel -->
    <script>
        $(document).ready(function () {
            $('.owl-testimonial').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script for owlcarousel -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>


    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>



    <div id="v-w3layouts"></div>
    <script>(function (v, d, o, ai) { ai = d.createElement('script'); ai.defer = true; ai.async = true; ai.src = v.location.protocol + o; d.head.appendChild(ai); })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
</body>

</html>

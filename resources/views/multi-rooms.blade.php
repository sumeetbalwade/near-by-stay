<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>NearBy Stay</title>

    <link href="http://fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @include("components.head")


    <link rel="stylesheet" type="text/css" href="assets/slick/datepicker.css" />
    <link rel="stylesheet" href="assets/slick/tooplate-style.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css" />
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


    <div class="best-rooms w3l-blog py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1>filters will be here</h1>
            </div>
            <div class="col-lg-9">
                <div class="container py-lg-5 py-sm-4">
                    <div class="ban-content-inf row">

                        @for ($i=0;$i < 6; $i++)
                            <div class="my-gd-1 col-lg-4 col-md-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily">
                                        <img class="img-fluid" src="assets/images/about1.jpg" alt="" />
                                        <figcaption>
                                            <div>
                                                <h4 class="top-text">
                                                    Pune, Maharastra
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                    </ul>
                                                </h4>
                                                <p>Villa</p>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="room-info mb-4">
                                        <h3 class="room-title">
                                            <a href="#url">Luxury Villa</a>
                                        </h3>
                                        <ul class="mb-3">
                                            <li>
                                                <span class="fa fa-users"></span> 10
                                                Guests
                                            </li>
                                            <li>
                                                <span class="fa fa-bed"></span> 3 Rooms
                                            </li>
                                        </ul>
                                        <span class="btn">Rs 2000</span>
                                        <p style="font-size: 13px;">per Night</p>
                                        <div class="room-info-bottom">
                                            <ul class="room-amenities">
                                                <li>
                                                    <a href="#url"><span class="fa fa-bed" title="Beds"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#url"><span class="fa fa-television"
                                                            title="Television"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#url"><span class="fa fa-bath"
                                                            title="Private Bathroom"></span></a>
                                                </li>
                                                <li>
                                                    <a href="#url"><span class="fa fa-motorcycle"
                                                            title="Bike Rental"></span></a>
                                                </li>
                                            </ul>
                                        </div>



                                        <div class="room-info-bottom justify-content-center mb-4">
                                            <a href="room-single.html" class="btn view">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor





                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5 mb-0">
                            <li class="page-item disabled">
                                <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-number" href="#1">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link page-number" href="#2">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-number" href="#3">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link page-next" href="#next">→</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    @include("components.footer")

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $(".owl-one").owlCarousel({
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
                        nav: false,
                    },
                    480: {
                        items: 1,
                        nav: false,
                    },
                    667: {
                        items: 1,
                        nav: true,
                    },
                    1000: {
                        items: 1,
                        nav: true,
                    },
                },
            });
        });
    </script>
    <!-- //script -->

    <!-- script for owlcarousel -->
    <script>
        $(document).ready(function () {
            $(".owl-testimonial").owlCarousel({
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
                        nav: false,
                    },
                    480: {
                        items: 1,
                        nav: false,
                    },
                    667: {
                        items: 1,
                        nav: true,
                    },
                    1000: {
                        items: 1,
                        nav: true,
                    },
                },
            });
        });
    </script>
    <!-- //script for owlcarousel -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".popup-with-zoom-anim").magnificPopup({
                type: "inline",

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: "auto",

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-zoom-in",
            });

            $(".popup-with-move-anim").magnificPopup({
                type: "inline",

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: "auto",

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-slide-bottom",
            });
        });
    </script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $(".navbar-toggler").click(function () {
                $("body").toggleClass("noscroll");
            });
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="assets/js/bootstrap.min.js"></script>

    <div id="v-w3layouts"></div>
    <script>
        (function (v, d, o, ai) {
            ai = d.createElement("script");
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(
            window,
            document,
            "../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js"
        );
    </script>
</body>


</html>

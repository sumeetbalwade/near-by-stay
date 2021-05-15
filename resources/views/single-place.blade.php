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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/slick/tooplate-style.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-liberty.css') }}">
</head>

<body>

    @include("components.header")

    <section class="w3l-breadcrumb">
        <div class="tm-bg-white ie-container-width-fix-2">
            @php
                $flag = 0;
                if (Session::has('sdata')) {
                    $sdata = Session::get('sdata');
                    $flag = 1;
                }
                
            @endphp


            <form id="GFG" action="{{ route('admin.search-result') }}" method="GET">


                <div id="search-section">
                    <div class="container ">
                        <div class="row p-2 rounded-pill d-flex justify-content-center">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-3 px-1 my-sm-1">
                                    <div class="
                                                input-icon-wrap
                                                d-flex
                                                align-items-center
                                                input-e
                                                rounded-pill
                                            ">
                                        <i class="fas fa-map-marker-alt"></i>

                                        @if ($flag == 1 && $sdata['location'] != '')
                                            <input value="{{ $sdata['location'] }}" type="text"
                                                class="form-e rounded-pill" id="location" placeholder="Destination"
                                                name="location" autocomplete="off" required />
                                        @else

                                            <input type="text" class="form-e rounded-pill" id="location"
                                                placeholder="Destination" name="location" autocomplete="off" required />
                                        @endif


                                    </div>
                                    <div class="list-group overflow-auto search-list">

                                    </div>
                                </div>
                                <div class="col-md-2 px-1  my-sm-1">
                                    <div class="
                                                input-icon-wrap
                                                d-flex
                                                align-items-center
                                                input-e
                                                rounded-pill
                                            ">
                                        <i class="fas fa-calendar-week"></i>

                                        @if ($flag == 1 && $sdata['check-in'] != '')
                                            <input value="{{ $sdata['check-in'] }}" type="text"
                                                class="form-e rounded-pill flatpickr-input" id="check-in"
                                                name="check-in" placeholder="Check-In" readonly="readonly" required />
                                        @else


                                            <input type="text" class="form-e rounded-pill flatpickr-input" id="check-in"
                                                name="check-in" placeholder="Check-In" readonly="readonly" required />
                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-2 px-1  my-sm-1">
                                    <div class="
                                                input-icon-wrap
                                                d-flex
                                                align-items-center
                                                input-e
                                                rounded-pill
                                            ">
                                        <i class="fas fa-calendar-week"></i>


                                        @if ($flag == 1 && $sdata['check-out'] != '')
                                            <input type="text" value="{{ $sdata['check-out'] }}"
                                                class="form-e rounded-pill flatpickr-input" id="check-out"
                                                name="check-out" placeholder="Check-Out" readonly="readonly" required />
                                        @else



                                            <input type="text" class="form-e rounded-pill flatpickr-input"
                                                id="check-out" name="check-out" placeholder="Check-Out"
                                                readonly="readonly" required />
                                        @endif

                                    </div>
                                </div>

                                <div class="col justify-content-center  my-sm-1" style="max-width: max-content">
                                    <div class="row d-flex">
                                        <div class="
                                                    input-icon-wrap
                                                    d-flex
                                                    align-items-center
                                                    input-e
                                                    rounded-pill
                                                    mx-1
                                                " style="width: fit-content">
                                            <i class="fas fa-user-alt"></i>

                                            <select name="adult" id="number-of-adults" class="form-e rounded-pill"
                                                style="width: auto">
                                                <option value="">A</option>

                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i == $sdata['adult']) <option selected
                                                    value="{{ $i }}">{{ $i }}</option>

                                                @else
                                                    <option
                                                    value="{{ $i }}">{{ $i }}</option> @endif
                                                @endfor

                                            </select>
                                        </div>

                                        <div class="
                                                    input-icon-wrap
                                                    d-flex
                                                    align-items-center
                                                    input-e
                                                    rounded-pill
                                                    mx-1
                                                " style="width: fit-content">
                                            <i class="fas fa-baby"></i>

                                            <select name="child" id="number-of-child" class="form-e rounded-pill"
                                                style="width: auto">
                                                <option value="">C</option>
                                                @for ($i = 0; $i <= 3; $i++)
                                                    @if ($i == $sdata['adult']) <option selected
                                                    value="{{ $i }}">{{ $i }}</option>

                                                @else
                                                    <option
                                                    value="{{ $i }}">{{ $i }}</option> @endif
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-1 mx-2 px-1 d-flex
                                    align-items-center justify-content-center" style="
                                    height: fit-content;
                                ">
                                    <div class="
                                                input-icon-wrap
                                                d-flex
                                                align-items-center
                                                justify-content-center
                                                input-e
                                                rounded-pill
                                            " style="width: fit-content">
                                        <a class="
                                                    btn btn-danger btn-block
                                                    w-100
                                                    rounded-pill
                                                    d-flex
                                                    align-items-center
                                                    justify-content-center
                                                    
                                                " style="color: white" onclick="submit_form()">
                                            <i class="fas fa-search" style="
                                                        padding-left: 0;
                                                        padding-right: 0.3rem;
                                                        color: white;
                                                    "></i>
                                            Search
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>




            <script>
                $(function() {
                    $('#check-in').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        showDropdowns: true,
                        autoApply: true,
                        minDate: moment().format('DD/MM/YYYY'),
                        locale: {
                            format: 'DD-MM-YYYY'
                        }

                    });

                    $('#check-in').on('apply.daterangepicker', function(ev, picker) {
                        $(this).val(picker.startDate.format('DD-MM-YYYY'));
                    });
                });

                $(function() {
                    $('#check-out').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        showDropdowns: true,
                        autoApply: true,
                        minDate: moment().format('DD/MM/YYYY'),
                        locale: {
                            format: 'DD-MM-YYYY'
                        }

                    });

                    $('#check-out').on('apply.daterangepicker', function(ev, picker) {
                        $(this).val(picker.startDate.format('DD-MM-YYYY'));
                    });
                });

            </script>

            <script src="{{ asset('js/search-head.js') }}"></script>


            <script>
                function submit_form() {
                    var query = $('#location').val();
                    var checkin = $('#check-in').val();
                    var checkout = $('#check-out').val();
                    var checkout = $('#check-out').val();
                    var child = $('#number-of-child').val();
                    var adult = $('#number-of-adults').val();
                    if (query.length > 0 && checkin != checkout && child != '' && adult != '') {
                        document.getElementById("GFG").submit();
                    } else {
                        alert('fill All Details');
                    }
                }

            </script>
        </div>

        <!-- load JS files -->
        <script src="{{ asset('lib/js/jquery-2.2.3.min.js') }}"></script>
        <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{ asset('lib/js/popper.min.js') }}"></script> <!-- https://popper.js.org/ -->
        <script src="{{ asset('lib/js/bootstrap.js') }}"></script> <!-- https://getbootstrap.com/ -->
        <script src="{{ asset('lib/js/datepicker.min.js') }}"></script>
        <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{ asset('lib/js/jquery.singlePageNav.min.js') }}"></script>

        <script>
            $(document).ready(function() {


                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');

            });

        </script>
    </section>

    <!-- room-single-block -->
    <section class="room-single-block">
        <div class="content-with-slider">
            <div class="mx-4">
                <div class="content-photo-1 d-grid">
                    <div class="content-photo-right" style="
                    width: 60vw;
                    justify-self: center;
                ">
                        <div class="csslider infinity" id="slider1">

                            @for ($i = 1; $i <= count($slider); $i++)

                                @if ($i == 1) <input type="radio"
                                name="slides" checked="checked"
                                id="slides_{{ $i }}" />

                            @else
                                <input type="radio" name="slides"
                                id="slides_{{ $i }}"/> @endif


                            @endfor
                            <ul class="banner_slide_bg">

                                @foreach ($slider as $slide)

                                    <li>
                                        <img class="img" src="{{ asset('images/' . $slide->name) }}" alt="">
                                    </li>
                                @endforeach

                            </ul>
                            <div class="arrows">
                                @for ($i = 1; $i <= count($slider); $i++)
                                    <label for="slides_{{ $i }}"></label>
                                @endfor
                            </div>
                            <div class="navigation">
                                <div>
                                    @for ($i = 1; $i <= count($slider); $i++)
                                        <label for="slides_{{ $i }}"></label>
                                    @endfor

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-photo-left text-center" style="width: 20vw;justify-self: center;">
                        <h4>{{ $property->name }}</h4>
                        <h6>{{ $property->location }}</h6>
                        <h6>{{ $property->city }} , {{ $property->state }}</h6>
                        <div class="border-line">
                            <div class="bg">
                                <span class="price">₹ {{ $property->price }}</span>
                                <p> Only</p>
                            </div>
                            <div class="book-btn px-2">
                                <a href="/enquiry/{{ $property->id}} " class="btn btn-style btn-secondary mt-3">Enquire Now</a>
                            </div>
                        </div>
                        <ul class="room-amenities">
                            <li><a href="#url"><span class="fa fa-beer"></span> Entire Villa</a></li>
                            @if ($property->gc > 0)

                                <li><a href="#"><span class="fa fa-users"></span> {{ $property->gc }} Guests</a></li>
                            @endif

                            @if ($property->nob > 0)

                                <li><a href="#url"><span class="fa fa-bed"></span> {{ $property->nob }} Bed</a></li>
                            @endif
                        </ul>
                        <a href="/" class="back"> <span class="fa fa-long-arrow-left"></span> Back to home</a>
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
                    <img src="{{ asset('images/' . $ipi1->name) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <img src="{{ asset('images/' . $ipi2->name) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 roomsingle mt-lg-0 mt-4">
                    <h3 class="title-small">About</h3>
                    <p class="roomsingle mt-3">{{ $property->description }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-roomsingleblock1 py-5">
        <div class="container py-sm-4">
            <div class="row">
                <div class="col-lg-7 roomsingle">
                    <h3 class="title-small">Amenities provided by the Place</h3>
                    <ul class="w3l-right-book mt-4">
                        @php
                            $aminities = ['television', 'wifi', 'air-conditioner', 'free-breakfast', 'free-cancellation', 'ensuite-bathroom', 'swimming-pool', 'lawn', 'valley-view', 'lake-view', 'pets-allowed', 'alcohol-allowed', 'bonfire', 'parking', 'genset', 'towels-and-toiletries', 'inverter', 'bedroom-and-laundry', 'essentials', 'towels', 'bed-sheets', 'soap-and-toilet-paper', 'hanger', 'CCTV-cameras', 'first-aid-kit', 'fire-extinguisher', 'kitchen', 'microwave', 'refrigerator', 'dishes-and-silverware', 'space-where-guests-can-cook-their-own-meals'];
                            
                        @endphp

                        @foreach ($aminities as $item)
                            @if ($property->$item)

                                <li>
                                    <a hef="#"><span class="fa fa-check"
                                            aria-hidden="true"></span>{{ $item }}</a>
                                </li>
                            @endif
                        @endforeach




                    </ul>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-4">
                    <img src="{{ asset('images/' . $ipi3->name) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <div id="map"></div>
    <script>
        function initMap() {
            var location = {
                lat: -25.363,
                lng: 131.044
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 2,
                center: location

            })
        }

    </script>

    @include('components.footer')

    <!-- Template JavaScript -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
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
        $(document).ready(function() {
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
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
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
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- disable body scroll which navbar is in active -->

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>



    <div id="v-w3layouts"></div>
    <script>
        (function(v, d, o, ai) {
            ai = d.createElement('script');
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');

    </script>
</body>

</html>

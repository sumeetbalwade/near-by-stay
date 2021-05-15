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
    <link rel="stylesheet" href="assets/slick/tooplate-style.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css" />
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
                                                    @if ($i == $sdata['child']) <option selected
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

    </section>


    <div class="best-rooms w3l-blog pt-5">

        @if (count($data) < 1)
            <div class="card-header">
                <h3 class="card-title">No Record Found</h3>
            </div>
        @else

            <div class="container py-lg-5 py-sm-4">
                <div class="ban-content-inf row">

                    @foreach ($data as $item)
                        <div class="my-gd-1 col-lg-4 col-md-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily">

                                    @php
                                        $thumbnail = App\Models\Image::where('pno', $item->id)
                                            ->where('name', 'like', '%thumbnail%')
                                            ->first();
                                    @endphp
                                    <img class="img-fluid" src="{{ asset('images/' . $thumbnail->name) }}" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4 class="top-text">
                                                {{ $item->city }}, {{ $item->state }}
                                                <ul>
                                                    @for ($rate = 0; $rate <= $item->ratings; $rate++)
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                    @endfor


                                                </ul>
                                            </h4>
                                            <p>{{ $item->type }}</p>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="room-info ">
                                    <h3 class="room-title">
                                        <a href="#">{{ $item->name }}</a>
                                    </h3>
                                    <ul class="mb-3">

                                        @if ($item->gc > 0)
                                            <li>
                                                <span class="fa fa-users"></span> {{ $item->gc }}
                                                Guests
                                            </li>
                                        @endif

                                        @if ($item->nob > 0)
                                            <li>
                                                <span class="fa fa-bed"></span> {{ $item->nob }} Rooms
                                            </li>
                                        @endif
                                    </ul>
                                    <span class="btn">Rs {{ $item->price }}</span>
                                    <p style="font-size: 13px;">per Night</p>
                                    <div class="room-info-bottom">
                                        <ul class="room-amenities">

                                            @if ($item['air-conditioner'])

                                            @endif
                                            <li>
                                                <a href="#url"><span class="fa fa-bed" title="Beds"></span></a>
                                            </li>

                                            @if ($item->television)

                                                <li>
                                                    <a href="#url"><span class="fa fa-television"
                                                            title="Television"></span></a>
                                                </li>
                                            @endif

                                            @if ($item['ensuite-bathroom'])

                                                <li>
                                                    <a href="#url"><span class="fa fa-bath"
                                                            title="Ensuite-Bathroom"></span></a>
                                                </li>
                                            @endif

                                            @if ($item->parking)

                                                <li>
                                                    <a href="#url"><span class="fa fa-motorcycle"
                                                            title="Parking"></span></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>



                                    <div class="room-info-bottom justify-content-center">
                                        <a href="/more-info/{{ $item->id }}" class="btn view">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach





                    <nav aria-label="Page navigation example">
                        {{ $data->links() }}
                    </nav>
                </div>
        @endif
    </div>



    @include("components.footer")


    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $(".navbar-toggler").click(function() {
                $("body").toggleClass("noscroll");
            });
        });

    </script>
    <!-- disable body scroll which navbar is in active -->


</body>


</html>

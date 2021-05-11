@extends('admin.template')

@section('content')

    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Property</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Property</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content mx-lg-5 py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Property</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" action="{{ route('admin.updateprop', ['id' => $property->id]) }}">
                @csrf
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Property Type</label>
                                <select class="custom-select" name="type">

                                    <option value="{{ $property->type }}">{{ $property->type }}</option>
                                    <option value="Villa">Villa</option>
                                    <option value="HomeStay">HomeStay</option>
                                    <option value="Resort">Resort</option>
                                    <option value="Cottage">Cottage</option>
                                    <option value="Service Apartment">Service Apartment</option>
                                    <option value="FarmHouse">FarmHouse</option>
                                    <option value="Bungalow">Bungalow</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="Location"
                                    required value="{{ $property->location }}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name">Property Name</label>
                        <input type="text" class="form-control" autocomplete="null" name="name" id="name"
                            placeholder="Enter Property name" value="{{ $property->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control"
                            rows="3">{{ $property->address }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control select2" name="city" style="width: 100%;">
                                    <option selected="selected">{{ $property->city }}</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>State</label>
                                <select class="form-control select2" name="state" style="width: 100%;">
                                    <option selected="selected">{{ $property->state }}</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group" id="hnob">
                                <label for="Number_of_Bedrooms">Number of Bedrooms</label>
                                <input type="number" class="form-control" name="nb" id="Number_of_Bedrooms"
                                    placeholder="Number of Bedrooms" value="{{ $property->nob }}">
                            </div>
                        </div>
                        <div class="col-md-6">


                            <div class="form-group">
                                <label for="Guest_Capacity">Guest Capacity</label>
                                <input type="number" min="0" class="form-control" name="gc" id="Guest_Capacity"
                                    placeholder="Guest Capacity" value="{{ $property->gc }}" required>
                            </div>
                        </div>
                    </div>

                    {{-- <script>
                        function hideNOB(id,elementValue) {
                            console.log(elementValue.value);
                            console.log(id);
                            if(elementValue.value == 'Villa' || elementValue.value == 'FarmHouse' || elementValue.value == 'Bungalow'){

                                document.getElementById(id).style.display = 'block';
                            } else {
                                document.getElementById(id).style.display = 'none';

                            }
                        }
                    </script> --}}


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" min="0" step="any" class="form-control" id="price" name="price"
                                    placeholder="Price" value="{{ $property->price }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="Ratings">Ratings</label>
                                <input type="number" min="0" max="5" class="form-control" id="Ratings" name="ratings"
                                    placeholder="Ratings" value="{{ $property->ratings }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"
                            rows="3">{{ $property->description }}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Aminities</label>

                        @php
                            $aminities = ['television', 'wifi', 'air-conditioner', 'free-breakfast', 'free-cancellation', 'ensuite-bathroom', 'swimming-pool', 'lawn', 'valley-view', 'lake-view', 'pets-allowed', 'alcohol-allowed', 'bonfire', 'parking', 'genset', 'towels-and-toiletries', 'inverter', 'bedroom-and-laundry', 'essentials', 'towels', 'bed-sheets', 'soap-and-toilet-paper', 'hanger', 'CCTV-cameras', 'first-aid-kit', 'fire-extinguisher', 'kitchen', 'microwave', 'refrigerator', 'dishes-and-silverware', 'space-where-guests-can-cook-their-own-meals'];
                            
                        @endphp

                        <div class="row">

                            @foreach ($aminities as $item)
                                <div class="custom-control custom-checkbox col-md-3">
                                    <input class="custom-control-input" type="checkbox" name="{{ $item }}"
                                        id="{{ $item }}" value="{{ $item }}" @if ($property->$item) checked @endif>
                                    <label for="{{ $item }}"
                                        class="custom-control-label">{{ $item }}</label>
                                </div>
                            @endforeach
                        </div>

                        {{-- <div class=" row">
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="veg-only" name="veg-only"
                                    value="veg-only">
                                <label for="veg-only" class="custom-control-label">VEG ONLY</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="pool" name="pool" value="pool">
                                <label for="pool" class="custom-control-label">POOL</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="wifi" name="wifi" value="Wi-Fi">
                                <label for="wifi" class="custom-control-label">Wi-Fi</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="pets" name="pets" value="pets">
                                <label for="pets" class="custom-control-label">Pets</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="beach" name="beach" value="beach">
                                <label for="beach" class="custom-control-label">Beach</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="television" name="television" value="television">
                                <label for="television" class="custom-control-label">Television</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="air-conditioner" name="air-conditioner" value="air-conditioner">
                                <label for="air-conditioner" class="custom-control-label">Air Conditioner</label>
                            </div>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Holiday Mood</label>
                        <div class=" row">
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="bc" id="birthday-celebration"
                                    value="birthday-celebration" @if ($property->bc) checked @endif>
                                <label for="birthday-celebration" class="custom-control-label">Birthday Celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="fg" id="family-gateway"
                                    value="family-gateway" @if ($property->fg) checked @endif>
                                <label for="family-gateway" class="custom-control-label">Family gateway</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="ce" type="checkbox" id="corporate-event"
                                    value="corporate-event" @if ($property->ce) checked @endif>
                                <label for="corporate-event" class="custom-control-label">Corporate Event</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="ac" type="checkbox" id="anniversary-celebration"
                                    value="anniversary-celebration" @if ($property->ac) checked @endif>
                                <label for="anniversary-celebration" class="custom-control-label">Anniversary
                                    celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="cp" type="checkbox" id="cocktail-party"
                                    value="cocktail-party" @if ($property->cp) checked @endif>
                                <label for="cocktail-party" class="custom-control-label">Cocktail party</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="ws" id="weekend-stay"
                                    value="weekend-stay" @if ($property->ws) checked @endif>
                                <label for="weekend-stay" class="custom-control-label">Weekend stay</label>
                            </div>
                        </div>
                    </div>






                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

@endsection

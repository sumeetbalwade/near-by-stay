@extends('admin.template')

@section('content')
<script>
    document.getElementById('addprop').className += ' active'
</script>

    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Property</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Add Property</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content mx-lg-5 py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Property</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/addproperty">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label>Property Type</label>
                        <select class="custom-select" name="type" onchange="hideNOB('hnob',this)">
                            <option value="Villa">Villa</option>
                            <option value="HomeStay">HomeStay</option>
                            <option value="Resort">Resort</option>
                            <option value="Cottage">Cottage</option>
                            <option value="Service Apartment">Service Apartment</option>
                            <option value="FarmHouse">FarmHouse</option>
                            <option value="Bungalow">Bungalow</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Property Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Property name">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control select2" name="city" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
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
                                    <option selected="selected">Alabama</option>
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
                    <div class="form-group" id="hnob">
                        <label for="Number_of_Bedrooms">Number of Bedrooms</label>
                        <input type="number" class="form-control" name="nb" id="Number_of_Bedrooms"
                            placeholder="Number of Bedrooms">
                    </div>

                    <script>
                        function hideNOB(id,elementValue) {
                            console.log(elementValue.value);
                            console.log(id);
                            if(elementValue.value == 'Villa' || elementValue.value == 'FarmHouse' || elementValue.value == 'Bungalow'){

                                document.getElementById(id).style.display = 'block';
                            } else {
                                document.getElementById(id).style.display = 'none';

                            }
                        }
                    </script>
                    <div class="form-group">
                        <label for="Guest_Capacity">Guest Capacity</label>
                        <input type="number" min="0" class="form-control" name="gc" id="Guest_Capacity"
                            placeholder="Guest Capacity" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="0" step="any" class="form-control" id="price" name="price"
                            placeholder="Price" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Aminities</label>
                        <div class=" row">
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="veg-only" name="veg-only" value="veg-only">
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
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Holiday Mood</label>
                        <div class=" row">
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="bc" id="birthday-celebration"
                                    value="birthday-celebration">
                                <label for="birthday-celebration" class="custom-control-label">Birthday Celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="fg" id="family-gateway"
                                    value="family-gateway">
                                <label for="family-gateway" class="custom-control-label">Family gateway</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="ce" type="checkbox" id="corporate-event"
                                    value="corporate-event">
                                <label for="corporate-event" class="custom-control-label">Corporate Event</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="ac" type="checkbox" id="anniversary-celebration"
                                    value="anniversary-celebration">
                                <label for="anniversary-celebration" class="custom-control-label">Anniversary
                                    celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" name="cp" type="checkbox" id="cocktail-party"
                                    value="cocktail-party">
                                <label for="cocktail-party" class="custom-control-label">Cocktail party</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" name="ws" id="weekend-stay" value="weekend-stay">
                                <label for="weekend-stay" class="custom-control-label">Weekend stay</label>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
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

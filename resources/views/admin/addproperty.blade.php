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
                        <select class="custom-select" name="type">
                            <option>Villa</option>
                            <option>Resort</option>
                            <option>HomeStay</option>
                            <option>Cottage</option>
                            <option>Service Apartment</option>
                            <option>FarmHouse</option>
                            <option>Bungalow</option>
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
                                <select class="form-control select2" style="width: 100%;">
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
                                <select class="form-control select2" style="width: 100%;">
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Number of Bedrooms</label>
                        <input type="number" class="form-control" id="exampleInputPassword1"
                            placeholder="Number of Bedrooms">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Guest Capacity</label>
                        <input type="number" min="0" class="form-control" id="exampleInputPassword1"
                            placeholder="Guest Capacity" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" min="0" step="any" class="form-control" id="exampleInputPassword1"
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
                                <input class="custom-control-input" type="checkbox" id="wifi" value="Wi-Fi">
                                <label for="wifi" class="custom-control-label">Wi-Fi</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="pets" value="pets">
                                <label for="pets" class="custom-control-label">Pets</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="beach" value="beach">
                                <label for="beach" class="custom-control-label">Beach</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Holiday Mood</label>
                        <div class=" row">
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="birthday-celebration"
                                    value="birthday-celebration">
                                <label for="birthday-celebration" class="custom-control-label">Birthday Celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="family-gateway"
                                    value="family-gateway">
                                <label for="family-gateway" class="custom-control-label">Family gateway</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="corporate-event"
                                    value="corporate-event">
                                <label for="corporate-event" class="custom-control-label">Corporate Event</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="anniversary-celebration"
                                    value="anniversary-celebration">
                                <label for="anniversary-celebration" class="custom-control-label">Anniversary
                                    celebration</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="cocktail-party"
                                    value="cocktail-party">
                                <label for="cocktail-party" class="custom-control-label">Cocktail party</label>
                            </div>
                            <div class="custom-control custom-checkbox mx-3">
                                <input class="custom-control-input" type="checkbox" id="weekend-stay" value="weekend-stay">
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

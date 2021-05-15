@extends('admin.template')

@section('content')
    <script>
        document.getElementById('searchprop').className += ' active'

    </script>
    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Search Enquiries</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Search Enquiries</li>
                    </ol>
                </div>
            </div>
            <div class="row my-md-5">
                <div class="col-md-8 offset-md-2">

                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg search-input"
                            placeholder="Type your keywords here">
                        <div class="input-group-append">
                            <a href="#"" class=" btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <div class="card">


            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>Customer Name</th>
                            <th>Mobile</th>
                            <th style="width: 10px">PID</th>
                            <th>Property Name</th>
                            <th>Check-in/out</th>
                            <th>Guests</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="search-res">

                    </tbody>

                </table>

            </div>

            <!-- /.card-body -->
        </div>
    </section>


    <!-- /.card -->


    <script src="{{ asset('js/search-enq.js') }}"></script>
@endsection
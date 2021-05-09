@extends('admin.template')

@section('content')
    <script>
        document.getElementById('viewallprop').className += ' active'

    </script>

    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Property</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">All Property</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <div class="card">
            @if (Session::has('success'))

                <div class="card-header">


                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Success!</h5>
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            @if (count($properties) < 1)

                <div class="card-header">
                    <h3 class="card-title">No Record Found</h3>
                </div>
            @else

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Property Name</th>
                                <th>Ratings</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)

                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->name }}</td>
                                    <td>
                                        <div class="row">
                                            @for ($rate = 0; $rate <= $property->ratings; $rate++)

                                                <i class="fas fa-star" style="color: #ffc60b;"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td>Rs <strong>{{ $property->price }} </strong>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <a href="" class="btn btn-primary mx-1 my-1">View</a>
                                            <a href="/editProperty/{{ $property->id }}"
                                                class="btn btn-success mx-1 my-1">Edit</a>
                                            <a href="/deleteProperty/{{ $property->id }}"
                                                class="btn btn-danger mx-1 my-1">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="card-footer clearfix">
                        {{ $properties->links() }}
                    </div>
                </div>

                <!-- /.card-body -->
            @endif
        </div>
        <!-- /.card -->

    </section>
@endsection

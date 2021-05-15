@extends('admin.template')
@section('content')
    
<script>
    document.getElementById('viewallprop').className += ' active'

</script>


<section class="content-header mx-lg-5">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>View All Enquiry</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">View All Enquiry</li>
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


        @if (Session::has('edited'))
            <div class="card-header">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ Session::get('edited') }}
                </div>
            </div>
        @endif
        @if (count($enquiries) < 1)

            <div class="card-header">
                <h3 class="card-title">No Record Found</h3>
            </div>
        @else

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
                    <tbody>
                        @foreach ($enquiries as $enquiry)

                            <tr>
                                <td>{{ $enquiry->id }}</td>
                                <td>{{ $enquiry->name }}</td>
                                <td>{{ $enquiry->mobile }}</td>
                                <td>{{ $enquiry->pid }}</td>
                                <td>{{ $enquiry->pname }}</td>
                                <td>{{ $enquiry['check-in'] }} to {{ $enquiry['check-out'] }}</td>
                                <td>{{ $enquiry->adults }}A - {{ $enquiry->child }}C</td>
                                <td>
                                    <div class="row">
                                        <a href="/viewSingleEnq/{{ $enquiry->id }}"
                                            class="btn btn-primary mx-1 my-1">View</a>
                                        <a href="/deleteEnquiry/{{ $enquiry->id }}"
                                            class="btn btn-danger mx-1 my-1">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="card-footer clearfix">
                    {{ $enquiries->links() }}
                </div>
            </div>

            <!-- /.card-body -->
        @endif
    </div>
    <!-- /.card -->

</section>
@endsection
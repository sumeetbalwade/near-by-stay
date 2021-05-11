@extends('admin.template')

@section('content')
    <script>
        document.getElementById('gallerysection').className += ' active'

    </script>

    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Gallery Image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Gallery Image</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content mx-lg-5 py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Gallery Image</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->

            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ Session::get('success') }}
                    </div>
                @endif

                <h4 class="pl-3">Horizontal Images</h4>

                <div class="card-group row">
                    @if (count($horizontal) > 0)

                        @foreach ($horizontal as $image)

                            <div class="card col-md-3 mx-3 my-3">
                                <img src="{{ asset('images/gallery/' . $image->name) }}" class="card-img-top" alt="...">
                                <div class="card-body " style="text-align: center;">

                                    <form method="post" action="{{ route('admin.editgalleryimg') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="ino" value="{{ $image->id }}">
                                        <input type="hidden" name="iname" value="{{ $image->name }}">
                                        <input type="hidden" name="type" value="horizontal">
                                        <div class="form-group " style="text-align: center;">
                                            <input class="form-control" type="file" name="image" style="height: auto;"
                                                required>
                                            <button type="submit" class="btn btn-primary my-2">upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <h4 class="pl-3">Verical Images</h4>
                <div class="card-group row">
                    @if (count($vertical) > 0)

                        @foreach ($vertical as $image)

                            <div class="card col-md-3 mx-3 my-3">
                                <img src="{{ asset('images/gallery/' . $image->name) }}" class="card-img-top" alt="...">
                                <div class="card-body " style="text-align: center;">

                                    <form method="post" action="{{ route('admin.editgalleryimg') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="ino" value="{{ $image->id }}">
                                        <input type="hidden" name="iname" value="{{ $image->name }}">

                                        <input type="hidden" name="type" value="vertical">
                                        <div class="form-group " style="text-align: center;">
                                            <input class="form-control" type="file" name="image" style="height: auto;"
                                                required>
                                            <button type="submit" class="btn btn-primary my-2">upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
            <!-- /.card-body -->
        </div>
    </section>


@endsection

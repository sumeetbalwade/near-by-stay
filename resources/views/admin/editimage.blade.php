@extends('admin.template')

@section('content')
    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Image</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content mx-lg-5 py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Image</h3>



                <div class="card-tools">
                    <a href="/viewAllProperty" class="btn btn-success">Done Editing</a>
                </div>
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


                <h4 class="pl-3">Thumbnail Image</h4>
                <div class="card-group">


                    <div class="card col-md-3 mx-3 my-3">
                        <img src="{{ asset('images/' . $thumbnail->name) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-2"> <strong>Thumbnail</strong></h5>
                            <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="pno" value="{{ $pno }}">
                                <input type="hidden" name="pname" value="{{ $thumbnail->name }}">
                                <input type="hidden" name="type" value="thumbnail">

                                <div class="form-group " style="text-align: center;">
                                    <input class="form-control" type="file" name="image" style="height: auto;" required>
                                    <button type="submit" class="btn btn-primary my-2">upload</button>

                                </div>
                            </form>
                        </div>

                    </div>


                </div>

                <h4 class="pl-3">Slider Images</h4>

                <div class="card-group row">

                    @foreach ($slider as $image)

                        <div class="card col-md-3 mx-3 my-3">
                            <img src="{{ asset('images/' . $image->name) }}" class="card-img-top" alt="...">
                            <div class="card-body " style="text-align: center;">

                                <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="pno" value="{{ $pno }}">
                                    <input type="hidden" name="pname" value="{{ $image->name }}">
                                    <input type="hidden" name="type" value="slider">

                                    <div class="form-group " style="text-align: center;">
                                        <button type="submit" class="btn btn-danger my-2">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="pno" value="{{ $pno }}">
                            <input type="hidden" name="type" value="upload">

                            <div class="form-group ">


                                <input class="form-control" type="file" name="image[]" id="formFileMultiple" multiple
                                    style="height: auto;" required>
                                <button type="submit" class="btn btn-primary my-2 mx-2">upload</button>


                            </div>
                        </form>


                    </div>
                </div>


                <h4 class="pl-3">Section 1 Images</h4>

                <div class="card-group">
                    <div class="card col-md-3 mx-3 my-3">
                        <img src="{{ asset('images/' . $ipi1->name) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-2"> <strong>Image 1</strong></h5>
                            <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="pno" value="{{ $pno }}">
                                <input type="hidden" name="pname" value="{{ $ipi1->name }}">
                                <input type="hidden" name="type" value="ipi1">

                                <div class="form-group " style="text-align: center;">


                                    <input class="form-control" type="file" name="image" style="height: auto;" required>
                                    <button type="submit" class="btn btn-primary my-2">upload</button>


                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="card col-md-3 mx-3 my-3">
                        <img src="{{ asset('images/' . $ipi2->name) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-2"> <strong>Image 2</strong></h5>
                            <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="pno" value="{{ $pno }}">
                                <input type="hidden" name="pname" value="{{ $ipi2->name }}">
                                <input type="hidden" name="type" value="ipi2">


                                <div class="form-group " style="text-align: center;">


                                    <input class="form-control" type="file" name="image" style="height: auto;" required>
                                    <button type="submit" class="btn btn-primary my-2">upload</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <h4 class="pl-3">Section 2 Images</h4>

                <div class="card-group">
                    <div class="card col-md-3 mx-3 my-3">
                        <img src="{{ asset('images/' . $ipi3->name) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title my-2"> <strong>Image 3</strong></h5>
                            <form method="post" action="{{ route('admin.editimage') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="pno" value="{{ $pno }}">
                                <input type="hidden" name="pname" value="{{ $ipi3->name }}">
                                <input type="hidden" name="type" value="ipi3">


                                <div class="form-group " style="text-align: center;">


                                    <input class="form-control" type="file" name="image" style="height: auto;" required>
                                    <button type="submit" class="btn btn-primary my-2">upload</button>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>





            </div>
            <!-- /.card-body -->
        </div>
    </section>

@endsection

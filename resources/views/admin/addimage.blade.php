@extends('admin.template')

@section('content')
    <script>
        document.getElementById('addprop').className += ' active'

    </script>


    <section class="content-header mx-lg-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Image</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Add Image</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>




    <section class="content mx-lg-5 py-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Images for {{ $pname }}</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" action="{{ route('admin.addimagepost') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <input type="hidden" name="pno" value="{{ $pno }}">
                    <div class="form-group">
                        <div class="col-md-6">

                            <label for="ThumbnailformFileMultiple" class="form-label">Thumbnail</label>

                            <input class="form-control" type="file" name="thumbnail" id="ThumbnailformFileMultiple"
                                style="height: auto;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">

                            <label for="formFileMultiple" class="form-label">Slider Image </label>

                            <input class="form-control" type="file" name="image[]" id="formFileMultiple" multiple
                                style="height: auto;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">

                            <label for="InproductImage1formFileMultiple" class="form-label">Inproduct Image 1</label>

                            <input class="form-control" type="file" name="ipi1" id="InproductImage1formFileMultiple"
                                style="height: auto;" required>
                        </div>

                    </div>
                    <div class="form-group">

                        <div class="col-md-6">

                            <label for="InproductImage2formFileMultiple" class="form-label">Inproduct Image 2</label>

                            <input class="form-control" type="file" name="ipi2" id="InproductImage2formFileMultiple"
                                style="height: auto;" required>
                        </div>

                    </div>
                    <div class="form-group">

                        <div class="col-md-6">

                            <label for="InproductImage3formFileMultiple" class="form-label">Inproduct Image 3</label>

                            <input class="form-control" type="file" name="ipi3" id="InproductImage3formFileMultiple"
                                style="height: auto;" required>
                        </div>

                    </div>




                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </section>



@endsection

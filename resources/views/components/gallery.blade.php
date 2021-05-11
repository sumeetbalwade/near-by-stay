@php

$gflag = 0;
if (count($galleryh) == 6 && count($galleryv) == 2) {
    $gflag = 1;
}

@endphp

<!-- gallery -->
<div class="gallery pt-5" id="gallery">
    <div class="row">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-center text-dark mb-sm-5 mb-1">
                <span>Gallery</span>
            </h3>
            <div class="row gallery_grids">
                <div class="col-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">

                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[0]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[0]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/1174732/pexels-photo-1174732.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="sb" title="">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/1174732/pexels-photo-1174732.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[1]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[1]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else

                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="gallery-img-grid hover14 column">


                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[2]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[2]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/1450372/pexels-photo-1450372.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/1450372/pexels-photo-1450372.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid hover14 column">

                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryv[0]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryv[0]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else

                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/1770310/pexels-photo-1770310.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/1770310/pexels-photo-1770310.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryv[1]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryv[1]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">

                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[3]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[3]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/219998/pexels-photo-219998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/219998/pexels-photo-219998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="gallery-img-grid hover14 column">

                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[4]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[4]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/7294539/pexels-photo-7294539.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/7294539/pexels-photo-7294539.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="gallery-img-grid hover14 column">

                        @if ($gflag == 1)

                            <div class="gallery_effect">
                                <a href="{{ asset('images/gallery/' . $galleryh[5]->name) }}" class="sb" title="">
                                    <figure>
                                        <img src="{{ asset('images/gallery/' . $galleryh[5]->name) }}" alt=" "
                                            class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="gallery_effect">
                                <a href="https://images.pexels.com/photos/208701/pexels-photo-208701.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="sb"
                                    title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                    <figure>
                                        <img src="https://images.pexels.com/photos/208701/pexels-photo-208701.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                            alt=" " class="img-fluid" />
                                    </figure>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

    <section class="mt-4">
        <!--Best Places-->
        <h3 class="title text-center text-dark mb-sm-5 mb-4">
            <span>Best Places to checkout</span></h3>
        <div class="row d-flex align-items-center justify-content-center">

            @php
                $bplaces = App\Models\Property::orderBy('ratings','desc')->take(4)->get();
            @endphp

            @foreach ($bplaces as $place)
                <div class="make-3D-space">
                    <div class="product-card">
                        <div id="product-front">
                            <div class="shadow"></div>

                            @php
                            $thumbnail = App\Models\Image::where('pno', $place->id)
                                ->where('name', 'like', '%ipi1%')
                                ->first();
                            @endphp
                            <img class="product-image" src="{{ asset('images/'.$thumbnail->name) }}" alt="" />
                            <div class="image_overlay"></div>
                            <a href="/more-info/{{ $place->id }}" class="view_details">View details</a>
                            <div class="stats">
                                <div class="stats-container">
                                    <span class="product_price">Rs. {{ $place->price }}</span>
                                    <span class="product_name">{{ $place->name }}</span>
                                    <p>{{ $place->location }}</p>

                                    <div class="product-options">
                                        @if ($place->gc)
                                            
                                            <strong>Guest Capacty</strong>
                                            <span>{{ $place->gc }}</span>
                                        @endif
                                        <strong>Rating</strong>
                                        <div class="colors">
                                            @for ($i=0;$i<$place->ratings;$i++)
                                                
                                                <div class="c-gold"><span></span></div>
                                            @endfor
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="product-back">
                            <div class="shadow"></div>
                            <div class="carousel">
                                <ul>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png"
                                            alt="" /></li>
                                    
                                </ul>
                                <div class="arrows-perspective">
                                    <div class="carouselPrev">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                    <div class="carouselNext">
                                        <div class="y"></div>
                                        <div class="x"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-back">
                                <div class="cy"></div>
                                <div class="cx"></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            @endforeach

        </div>

        <script src="lib\js\bestplace.js"></script>

    </section>


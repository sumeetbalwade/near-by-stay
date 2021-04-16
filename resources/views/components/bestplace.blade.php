    <section class="mt-4">
        <!--Best Places-->
        <h3 class="title text-center text-dark mb-sm-5 mb-4">
            <span>Best Places to checkout</span></h3>
        <div class="row d-flex align-items-center justify-content-center">

            @for ($i=0;$i<4;$i++)
                <div class="make-3D-space">
                    <div class="product-card">
                        <div id="product-front">
                            <div class="shadow"></div>
                            <img class="product-image" src="https://images.pexels.com/photos/1078983/pexels-photo-1078983.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            <div class="image_overlay"></div>
                            <div class="view_details">View details</div>
                            <div class="stats">
                                <div class="stats-container">
                                    <span class="product_price">Rs. 5987</span>
                                    <span class="product_name">Heroic Villa</span>
                                    <p>Best Place to stay calm</p>

                                    <div class="product-options">
                                        <strong>Rooms</strong>
                                        <span>Delux/Super Delux</span>
                                        <strong>Rating</strong>
                                        <div class="colors">
                                            <div class="c-gold"><span></span></div>
                                            <div class="c-gold"><span></span></div>
                                            <div class="c-gold"><span></span></div>
                                            <div class="c-white"><span></span></div>
                                            <div class="c-white"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-back">
                            <div class="shadow"></div>
                            <div class="carousel">
                                <ul>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png"
                                            alt="" /></li>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png"
                                            alt="" /></li>
                                    <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png"
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
                        </div>
                    </div>
                </div>
            @endfor

        </div>

        <script src="lib\js\bestplace.js"></script>

    </section>


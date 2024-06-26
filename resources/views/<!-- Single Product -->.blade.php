                            <!-- Single Product -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="img/product-img/product-1.jpg" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                        <!-- Product Badge -->
                                        <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div>
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>topshop</span>
                                        <a href="single-product-details.html">
                                            <h6>Knot Front Mini Dress</h6>
                                        </a>
                                        <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>









<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            @foreach($items as $image)
            <img src="{{$image['image']}}" alt="">
            @endforeach
            <!-- Hover Thumb -->
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            @foreach($items as $image)
            <img src="{{$image['image']}}" alt="">
            @endforeach
            <!-- Product Badge -->
            <div class="product-badge new-badge">
                <span>New</span>
            </div>

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                @foreach ($items as $product)
                <h6>{{$product['products']}}</h6>
                @endforeach
            </a>
            @foreach($items as $price )
            <p class="product-price">{{$price['price']}}</p>
            @endforeach
            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-4.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-5.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-6.jpg" alt="">

            <!-- Product Badge -->
            <div class="product-badge offer-badge">
                <span>-30%</span>
            </div>

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-6.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-7.jpg" alt="">

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-7.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-8.jpg" alt="">

            <!-- Product Badge -->
            <div class="product-badge new-badge">
                <span>New</span>
            </div>

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-8.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-9.jpg" alt="">
            
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Product -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="img/product-img/product-9.jpg" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-1.jpg" alt="">

            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
            </a>
            <p class="product-price">$80.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>






{{-- ///////////////////////////////////////////////////////////////////// --}}
@foreach($items as $item)

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img src="{{$item['image']}}" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

            <!-- Product Badge -->
            <div class="product-badge offer-badge">
                <span>-30%</span>
            </div>
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>topshop</span>
            <a href="single-product-details.html">
                <h6>{{$item['products']}}</h6>
            </a>
            <p class="product-price">{{$item['price']}}</p>
            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    </div>              
    @endforeach' ;  
    $(".cls_pr_items").append(html);

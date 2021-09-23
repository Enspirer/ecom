@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/single_product.css') }}">
@endpush

@section('content')

    <div class="container mt-4">
        <div class="row align-items-center mb-5 image">
            <div class="col-1 pr-0">
                <dic class="row">
                @php
                    $photos = explode(',', $detailedProduct->photos);
                @endphp

                    @foreach ($photos as $key => $photo)
                        <div class="col-12 mb-2">
                            <img src="{{ uploaded_asset($photo) }}" alt="" class="img-fluid" style="height: 5rem;">
                        </div>
                        <!-- <div class="col-12 mb-2">
                            <img src="{{ url('index/10.png') }}" alt="" class="img-fluid" style="height: 5rem;">
                        </div>
                        <div class="col-12 mb-2">
                            <img src="{{ url('index/9.png') }}" alt="" class="img-fluid" style="height: 5rem;">
                        </div> -->
                    @endforeach
                </dic>
            </div>

            <div class="col-5">
                <img src="{{ url('index/9.png') }}" alt="" class="img-fluid" style="height: 20rem;">
            </div>

            <div class="col-6">
                <h5>Men's Shirt New Design</h5>
                <div class="row">
                    <div class="col-7">
                        <div class="row align-items-center">
                                <div class="col-4">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="col-4">
                                <i class="fas fa-comment-alt"></i> 2 Reviews
                            </div>
                            <div class="col-4">
                                <i class="fas fa-pen"></i></i> Write a Review
                            </div>
                        </div>
                    </div>
                </div>

                <p style="color: red;">Rs.</p>
                <p><del>1950.00</del><span class="font-weight-bold ml-4" style="color: red; font-size: 1.5rem;">1950.00</span> <span class="badge px-4 text-white ml-4" style="background-color: red; font-size: 0.9rem; padding-top: 0.7rem; padding-bottom: 0.7rem;">-10%</span></p> 

                <hr>

                <p style="font-size: 0.9rem;">Regular fit, round neckline, long sleeves, 100% cotton, brushed inner side for extra comfort.</p>

                <hr>

                <h6>Available Options</h6>

                <div class="row">
                    <div class="col-5">
                        <div class="row mb-2">
                            <div class="col-5">
                                <p>Size</p>
                            </div>
                            <div class="col-7">
                                <p>Color</p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-5">
                                <select class="form-control" aria-label="Default select example">
                                    <option value="1" selected>S</option>
                                    <option value="2">M</option>
                                    <option value="3">L</option>
                                    <option value="4">XL</option>
                                </select>
                            </div>
                            <div class="col-7">
                                <button class="btn bg-white p-3 rounded-0 border"></button>
                                <button class="btn p-3 rounded-0 border" style="background-color: #8389A3;"></button>
                                <button class="btn p-3 rounded-0 border" style="background-color: #FF8800;"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <p>Quantity <i class="fas fa-minus-circle ml-4 mr-2" style="color: #8A8A8A;" type="button"></i> 4 <i class="fas fa-plus-circle ml-2" style="color: #8A8A8A;" type="button"></i></p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4">
                        <a href="#" class="btn rounded-pill text-white px-5" style="background-color: black;">Buy Now</a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn rounded-pill border px-5">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
    </div>


    <div class="container single-product" style="margin-top: 6rem;">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white active text-dark" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size: 1.1rem;">OVERVIEW</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white text-dark" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size: 1.1rem;">CUSTOMER REVIEWS (58)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white text-dark" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" style="font-size: 1.1rem;">SPECIFICATIONS</button>
            </li>

            <li class="nav-item ml-auto" role="presentation">
                <a href="#" class="nav-link" type="button">Report Item</a>
            </li>
        </ul>

        <hr>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
               
                <div class="row px-3 mt-5">
                    <div class="col-1">
                        <h3 class="font-weight-bold">4.4 <span style="font-size: 1.1rem; font-weight: 400;">/5</span></h3>
                        <p style="font-size: 0.8rem; color: #8E8E8E;">58 Ratings</p>
                    </div>

                    <div class="col-3">
                        <div class="row">
                            <div class="col-6 text-right">
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                            </div>

                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar w-100 rounded-0" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="background-color: #FACA51;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 text-right">
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar w-75 rounded-0" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color: #FACA51;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 text-right">
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar w-50 rounded-0" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="background-color: #FACA51;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 text-right">
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar w-25 rounded-0" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="background-color: #FACA51;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 text-right">
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar rounded-0" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="background-color: #FACA51;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1"></div>

                    <div class="col-7 reviews">
                        <div>
                            <div class="row">
                                <p class="ml-3" style="font-size: 1.1rem;">By Dilanka Perera</p>
                                <p class="ml-4" style="font-size: 0.9rem;">Expectations meet reality 🤗 I am so mach Happy 😊 one of the best product 💖Thank you so much seller 😍 I love it 💖😊</p>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-5 text-end">
                                    <div class="row align-items-center justify-content-end">
                                        <div class="col-3 text-right pr-0">
                                            <p style="color: #7B7B7B;">Helpful?</p>
                                        </div>
                                        <div class="col-5 text-right pl-0">
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">Yes(1)</button>
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">No(0)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div>
                            <div class="row">
                                <p class="ml-3" style="font-size: 1.1rem;">By Dilanka Perera</p>
                                <p class="ml-4" style="font-size: 0.9rem;">Expectations meet reality 🤗 I am so mach Happy 😊 one of the best product 💖Thank you so much seller 😍 I love it 💖😊</p>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-5 text-end">
                                    <div class="row align-items-center justify-content-end">
                                        <div class="col-3 text-right pr-0">
                                            <p style="color: #7B7B7B;">Helpful?</p>
                                        </div>
                                        <div class="col-5 text-right pl-0">
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">Yes(1)</button>
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">No(0)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div>
                            <div class="row">
                                <p class="ml-3" style="font-size: 1.1rem;">By Dilanka Perera</p>
                                <p class="ml-4" style="font-size: 0.9rem;">Expectations meet reality 🤗 I am so mach Happy 😊 one of the best product 💖Thank you so much seller 😍 I love it 💖😊</p>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-5 text-end">
                                    <div class="row align-items-center justify-content-end">
                                        <div class="col-3 text-right pr-0">
                                            <p style="color: #7B7B7B;">Helpful?</p>
                                        </div>
                                        <div class="col-5 text-right pl-0">
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">Yes(1)</button>
                                            <button class="btn border-1" style="color: #7B7B7B; padding: 0.2rem 0.5rem;">No(0)</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
    </div>


    <div class="container text-center" style="margin-top: 7rem; margin-bottom: 7rem;">
        <h3>Related Products</h3>
        <p class="mt-3">You may also like this product</p>

        <div class="swiper mySwiper2 mt-5">
            <div class="swiper-wrapper">
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/9.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/10.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/9.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/10.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/10.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>
                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <div class="product-image">
                                <div class="label-product label-new">New</div>
                                <a href="single-product.html">
                                    <img src="{{ url('index/10.png') }}" alt="Wayfarer Messenger Bag" title="Wayfarer Messenger Bag">
                                </a>
                                <div class="action-links">
                                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                            </div> <!-- end of product-image -->

                            <div class="product-caption">
                                <div class="product-meta d-flex justify-content-between align-items-center">
                                    <div class="product-manufacturer">
                                        <a href="#">Studio Design</a>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="rating-box">
                                            <ul class="rating d-flex">
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                <li><i class="ion ion-md-star-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">Men's Shirt New Design</h6>
                                <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">Rs. 1950.00</h5>
                            </div><!-- end of product-caption -->
                        </div><!-- end of product-inner -->
                    </div><!-- end of product-thumb -->
                </article>




            
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

@endsection



@push('after-scripts')

    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 5,
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
@endpush

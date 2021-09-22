@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/index.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper" style='background-color: #F1F0F5;'>
                <div class="swiper-slide" >
                    <div class="container">
                        <div class="row">
                            <div class="col-6" style="padding-top: 7rem;">
                                <p style="font-size: 1.2rem;"><span class="p-2 mr-2" style="color: white; background-color: #FF0000;">LIMITED EDITION</span> Sale offer 20% Off this Week</p>
                                <h1 class="mt-4 font-weight-bold">Super savvy</h1>
                                <h1 class="font-weight-bold">limited time flash sale</h1>

                                <p class="mt-3">Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world.Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world</p>
                            </div>

                            <div class="col-6 text-right">
                                <img src="{{ url('index/1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style='background-color: #F1F0F5;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-6" style="padding-top: 7rem;">
                                <p style="font-size: 1.2rem;"><span class="p-2 mr-2" style="color: white; background-color: #FF0000;">LIMITED EDITION</span> Sale offer 20% Off this Week</p>
                                <h1 class="mt-4 font-weight-bold">Super savvy</h1>
                                <h1 class="font-weight-bold">limited time flash sale</h1>

                                <p class="mt-3">Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world.Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world</p>
                            </div>

                            <div class="col-6 text-right">
                                <img src="{{ url('index/1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="swiper-slide" style='background-color: #F1F0F5;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-6" style="padding-top: 7rem;">
                                <p style="font-size: 1.2rem;"><span class="p-2 mr-2" style="color: white; background-color: #FF0000;">LIMITED EDITION</span> Sale offer 20% Off this Week</p>
                                <h1 class="mt-4 font-weight-bold">Super savvy</h1>
                                <h1 class="font-weight-bold">limited time flash sale</h1>

                                <p class="mt-3">Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world.Our latest armchair collections have been crafted by some of the best interior, woodcrafter and also designers in the world</p>
                            </div>

                            <div class="col-6 text-right">
                                <img src="{{ url('index/1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col p-0">
                <div class="row py-3 align-items-center" style="background-color: #F1F0F5;">
                    <div class="col-5">
                        <img src="{{ url('index/chair.png') }}" alt="" class="img-fluid" style="object-fit:cover; height: 11rem;">
                    </div>
                    <div class="col-7">
                        <h4>Home <b>Decor</b></h4>
                        <p>Our latest armchair collections have been crafted by some of the best interior.</p>

                        <div class="mt-3">
                            <button class="btn text-white rounded-0" style="background-color: #000000;">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col p-0">
                <div class="row pt-3 align-items-center" style="background-color: #F1F0F5;">
                    <div class="col-5">
                        <img src="{{ url('index/girl.png') }}" alt="" class="img-fluid" style="object-fit:cover; height: 11rem;">
                    </div>
                    <div class="col-7">
                        <h4>Home <b>Decor</b></h4>
                        <p>Our latest armchair collections have been crafted by some of the best interior.</p>

                        <div class="my-3">
                            <button class="btn text-white rounded-0" style="background-color: #000000;">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col p-0">
                <div class="row py-3 align-items-center" style="background-color: #F1F0F5;">
                    <div class="col-5">
                        <img src="{{ url('index/grocery.png') }}" alt="" class="img-fluid" style="object-fit:cover; height: 11rem;">
                    </div>
                    <div class="col-7">
                        <h4>Home <b>Decor</b></h4>
                        <p>Our latest armchair collections have been crafted by some of the best interior.</p>

                        <div class="text-center mt-3">
                            <button class="btn text-white rounded-0" style="background-color: #000000;">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col p-0">
                <div class="row p-3 align-items-center" style="background-color: #F1F0F5;">
                    <div class="col-12" style="border: 1px solid white;">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <h5 class="display-5" style="font-size: 1.6rem;">Women's Dresses Collection 2021</h5>
                            </div>
                            <div class="col-7">
                                <img src="{{ url('index/girl1.png') }}" alt="" class="img-fluid" style="object-fit:cover; height: 17.15rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col py-2" style="background: url('index/boy.jpg'); background-size: cover; background-position: 0 -28px; background-repeat: no-repeat;">
                <div class="p-3" style="border: 1px solid white; height: 17rem;">
                    <div class="p-3 text-center my-auto" style="background-color: white; height: 15rem; opacity: 0.8">
                        <p class="mt-4" style="font-size: 1.2rem;">New Offers 2021</p>

                        <h4 class="mt-4 mb-1">Sale 20% Off</h4>
                        <h4>All products in Store</h4>


                        <p class="mt-4" style="font-size: 0.9rem;">Good Price for everyone</p>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col p-0">
                <div class="row p-3 align-items-center" style="background-color: #F1F0F5;">
                    <div class="col-12" style="border: 1px solid white;">
                        <div class="row align-items-center py-3">
                            <div class="col-5">
                                <h5 class="display-5" style="font-size: 1.6rem;">Men's Watch Collection 2021</h5>
                            </div>
                            <div class="col-7 text-center">
                                <img src="{{ url('index/watch.png') }}" alt="" class="img-fluid" style="object-fit:cover; height: 15rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center" style="margin-top: 7rem;">
        <h3>New Trending Products</h3>
        <p class="mt-3">Description area and you can type any thing you want to display your customer</p>

        <div class="swiper mySwiper2 mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card text-left">
                        <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">

                        <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                            <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Graphic Corner</p>
                                </div>
                                <div>

                                </div>
                            </div>
                            <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                            <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card text-left">
                        <img src="{{ url('index/shirt2.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                        <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                            <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Graphic Corner</p>
                                </div>
                                <div>

                                </div>
                            </div>
                            <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                            <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card text-left">
                        <img src="{{ url('index/shirt3.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                        <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                            <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Graphic Corner</p>
                                </div>
                                <div>

                                </div>
                            </div>
                            <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                            <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card text-left">
                        <img src="{{ url('index/shirt4.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                        <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                            <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Graphic Corner</p>
                                </div>
                                <div>

                                </div>
                            </div>
                            <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                            <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card text-left">
                        <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                        <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                            <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                            <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                            <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <p>Graphic Corner</p>
                                </div>
                                <div>

                                </div>
                            </div>
                            <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                            <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                        </div>
                    </div>
                </div>
            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="container-fluid mt-5" style='background-color: #F1F0F5;'>
        <div class="container">
            <div class="row">
                <div class="col-6" style="padding-top: 7rem;">
                    <h1 class="font-weight-bold" style="color: red">Hurry Up!</h1>
                    <h3 class="mt-2 font-weight-bold" style="color: #686868">Hurry Up! Daily Deal Of The Day</h3>

                    <p class="mt-4">Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the authorities in getting to Europe. The best way to do this, he reasoned, was to acquire another family as cover, and he found one. It was all a sham, however, just a means to an end.</p>

                    <a href="" type="button" class="btn text-white rounded-pill mt-3 px-5" style="background-color: black">DISCOVER NOW</a>
                </div>

                <div class="col-6 text-center">
                    <img src="{{ url('index/girl.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center" style="margin-top: 7rem;">
        <h4>Our Categories</h4>
        <p>Description area and you can type any thing you want to display your customer</p>


        <ul class="nav nav-pills m-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white active font-weight-bold" id="pills-shop-tab" data-toggle="pill" data-target="#pills-shop" type="button" role="tab" aria-controls="pills-shop" aria-selected="true">SHOP NEW</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white font-weight-bold" id="pills-sari-tab" data-toggle="pill" data-target="#pills-sari" type="button" role="tab" aria-controls="pills-sari" aria-selected="false">SARI</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white font-weight-bold" id="pills-casual-tab" data-toggle="pill" data-target="#pills-casual" type="button" role="tab" aria-controls="pills-casual" aria-selected="false">CASUAL</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white font-weight-bold" id="pills-sunglasses-tab" data-toggle="pill" data-target="#pills-sunglasses" type="button" role="tab" aria-controls="pills-sunglasses" aria-selected="false">SUNGLASSES</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link border-0 bg-white font-weight-bold" id="pills-backpack-tab" data-toggle="pill" data-target="#pills-backpack" type="button" role="tab" aria-controls="pills-backpack" aria-selected="false">BACKPACK</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-shop" role="tabpanel" aria-labelledby="pills-shop-tab">
                <div class="swiper mySwiper2 mt-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card text-left">
                                <img src="{{ url('index/7.png') }}" class="card-img-top" alt="..." style="height: 15rem">

                                <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>Graphic Corner</p>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                    <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card text-left">
                                <img src="{{ url('index/9.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                                <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>Graphic Corner</p>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                    <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card text-left">
                                <img src="{{ url('index/10.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                                <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>Graphic Corner</p>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                    <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card text-left">
                                <img src="{{ url('index/7.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                                <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>Graphic Corner</p>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                    <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card text-left">
                                <img src="{{ url('index/10.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                                <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                    <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>Graphic Corner</p>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                    <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                    <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-sari" role="tabpanel" aria-labelledby="pills-sari-tab">b</div>
            <div class="tab-pane fade" id="pills-casual" role="tabpanel" aria-labelledby="pills-casual-tab">c</div>
            <div class="tab-pane fade" id="pills-sunglasses" role="tabpanel" aria-labelledby="pills-sunglasses-tab">...</div>
            <div class="tab-pane fade" id="pills-backpack" role="tabpanel" aria-labelledby="pills-backpack-tab">...</div>
        </div>
    </div>

@endsection

@push('after-scripts')
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>

<script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
@endpush
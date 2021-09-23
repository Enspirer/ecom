<div class="bg-white new-nav">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-9">
                <p>Special Notice area and you can type <b>any thing</b> you want to display your customer</p>
            </div>
            <div class="col-3">
                <div class="row align-items-center">
                    <div class="col-6 text-right">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
                                USD $
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">SLR</a></li>
                                <li><a class="dropdown-item" href="#">AUD</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6 text-right">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
                               English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Sinhala</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row align-items-center">
            <div class="col-4">
                <input type="password" class="form-control border-0 px-0 w-50 d-inline" id="exampleInputPassword1" placeholder="Search for Products"><i class="fas fa-search text-secondary"></i>
            </div>

            <div class="col-4 text-center">
                <img src="{{ url('logo.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-4 text-right">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <div class="row align-items-center">
                            <div class="col-6 cart-dropdown">
                                <button class="btn border-0 position-relative" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-shopping-cart" style="font-size: 1rem; background-color: #FEF1EF; border-radius: 50px; padding: 20px; color: #FA290B"></i>
                                    <span class="position-absolute translate-middle rounded-circle" style="background-color: red; padding: 0.1rem 0.2rem!important; right: 18px; top:4px; color: white;">01</span>
                                </button>
                                <div class="dropdown-menu open" aria-labelledby="dropdownMenuButton1">
                                    <div class="shopping-cart-content">
                                        <ul class="list-unstyled">
                                            <li class="single-cart-item media mb-3 border-bottom p-2 position-relative">
                                                <div class="shopping-cart-img mr-3">
                                                    <a href="#">
                                                        <img class="img-fluid" alt="Cart Item" src="{{ url('index/shirt1.png') }}" style="height: 5rem;">
                                                        <span class="position-absolute translate-middle rounded-circle" style="background-color: red; padding: 0.2rem 0.5rem!important; left: 57px; top:4px; color: white;">1</span>
                                                    </a>
                                                </div>
                                                <div class="shopping-cart-title flex-grow-1">
                                                    <p><a href="#">Rival Field Messenger</a></p>
                                                    <p class="cart-price">$120.00</p>
                                                    <div class="product-attr">
                                                        <span>Size: S</span>
                                                        <span>Color: Black</span>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fas fa-times" style="color: gray"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-cart-item media mb-3 border-bottom p-2 position-relative">
                                                <div class="shopping-cart-img mr-3">
                                                    <a href="#">
                                                        <img class="img-fluid" alt="Cart Item" src="{{ url('index/shirt2.png') }}" style="height: 5rem;">
                                                        <span class="position-absolute translate-middle rounded-circle" style="background-color: red; padding: 0.2rem 0.5rem!important; left: 57px; top:4px; color: white;">2</span>
                                                    </a>
                                                </div>
                                                <div class="shopping-cart-title flex-grow-1">
                                                    <p><a href="#">Fusion Backpack</a></p>
                                                    <p class="cart-price">$200.00</p>
                                                    <div class="product-attr">
                                                        <span>Color: White</span>
                                                        <span>Accessories: Yes</span>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fas fa-times" style="color: gray"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row px-4">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="font-weight-bold">Sub-Total : </h6>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <h6 class="font-weight-bold" style="color: red">$320.00</h6>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h6 class="font-weight-bold">Total : </h6>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <h6 class="font-weight-bold" style="color: red">$800.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-3">
                                            <a class="cart-btn mr-3" href="cart.html">view cart</a>
                                            <a class="cart-btn" href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @auth
                                <div class="col-6 profile-dropdown">
                                    <a class="nav-link" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" class="rounded-circle me-2" style="height: 40px; width: 40px;">
                                    </a>

                                    <div class="dropdown-menu text-light" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item text-light" href="">My Account</a>
                                        <a class="dropdown-item text-light" href="">My Settings</a>
                                        <a class="dropdown-item text-light" href="{{ route('logout') }}">Log Out</a>
                                    </div>
                                </div>
                            @else
                                <a class="nav-link ml-2" href="{{ route('user.login') }}" style="font-size: 0.9rem">Log In</a>
                            @endauth
                        </div>
                    </div>
            
                    
                </div>
            </div>
        </div>
    </div>

    <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2 dropdown position-relative">
                        <a class="nav-link active dropdown-toggle font-weight-bold" aria-current="page" href="#" id="homeDropdown" role="button" data-toggle="dropdown" aria-expanded="false">HOME</a>
                        
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="#">hh</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2 dropdown position-relative">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="shopDropdown" role="button" data-toggle="dropdown" aria-expanded="false">SHOP</a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdown-menu">
            <div class="container justify-content-center">
              <div class="row text-center">
                <div class="col">
                  <div class="card py-5" data-aos="flip-right" data-aos-duration="500">
                    <a href="" class="text-decoration-none">
                    <img src="{{ url('img/frontend/nav/nav-rice.svg') }}" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Rice Milling Machine</h5>
                      <p class="card-text text-body">lorem ipsum</p>
                    </div></a>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Rubber Rollers</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Electric Motors</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Spare Parts</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card py-5">
                    <img src="" class="card-img-top" alt="..." style="height: 6rem;">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #68AE42;">Other Machineries</h5>
                      <p class="card-text">lorem ipsum
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    </li>
                    <li class="nav-item mx-2 dropdown position-relative">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        BLOG PAGES</a>

                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2 dropdown position-relative">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="utilityDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        UTILITY PAGES</a>

                        <ul class="dropdown-menu mx-auto" aria-labelledby="utilityDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link font-weight-bold">ABOUT US</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link font-weight-bold">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="main-nav-area bgc-white">
                <div class="container">
                    <nav id="main_nav" class="stellarnav desktop"><a href="#" class="menu-toggle full"><i class="fa fa-bars"></i> Menu</a>
                        <ul>
                            <li class="has-sub active"><a href="index.html"><span>Home</span></a>
                                <ul class="mega-container">
                                    <li class="active"><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                    <li><a href="index-5.html">Home Page 5</a></li>
                                </ul>
                            <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                            <li class="mega has-sub" data-columns="4"><a href="shop-grid.html"><span>Shop</span></a>
                                <ul class="mega-container" style="left: 0px; max-width: 100%;">
                                    <li class="has-sub column column-3"><a href="#" class="mega-menu-title"><h3>Shop pages 01</h3></a>
                                        <ul style="max-width: 100%;">
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        </ul>
                                    <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                                    <li class="has-sub column column-3"><a href="#" class="mega-menu-title"><h3>Shop pages 02</h3></a>
                                        <ul style="max-width: 100%;">
                                            <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                            <li><a href="single-product.html">Single Product Page</a></li>
                                            <li><a href="compare.html">Product Compare</a></li>
                                        </ul>
                                    <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                                    <li class="has-sub column column-3"><a href="#" class="mega-menu-title"><h3>Shop pages 03</h3></a>
                                        <ul style="max-width: 100%;">
                                            <li><a href="cart.html">Cart Page</a></li><li>
                                            </li><li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                    <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                                    <li class="last has-sub column column-3"><a href="#" class="mega-menu-title"><h3>Shop pages 04</h3></a>
                                        <ul style="max-width: 100%;">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                                    <li class="fullwidth-banner column column-3">
                                    	<a href="#"><img src="assets/images/banners/menu-banner.jpg" alt="Menu Banner"></a>
                                    </li>
                                </ul>
                            <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                            <li class="has-sub"><a href="blog.html"><span>Blog Pages</span></a>
                                <ul class="mega-container" style="display: none;">
                                    <li><a href="blog.html">Blog Full Width</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                            <li class="has-sub"><a href="faqs.html"><span>Utility Pages</span></a>
                                <ul class="mega-container" style="display: none;">
                                    <li><a href="faqs.html">FAQs Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                            <li><a href="about.html"><span>About Us</span></a></li>
                            <li><a href="contact.html"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
</div>


@push('after-scripts')
  <script>
      $('.has-sub').hover(function() {
          $(this).find('.mega-container').stop(true, true).delay(100).fadeIn(100);
      }, function() {
          $(this).find('.mega-container').stop(true, true).delay(100).fadeOut(100);
      }); 
  </script>

@endpush


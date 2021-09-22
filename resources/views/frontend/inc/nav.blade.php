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
            
                <button class="btn border-0 position-relative" type="button" id="dropdownMenuButton" data-toggle="" aria-expanded="false">
                    <i class="fas fa-cog" style="font-size: 1rem; color: #434343;"></i>
                </button>
            </div>
        </div>
        <hr>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link active dropdown-toggle font-weight-bold" aria-current="page" href="#" id="homeDropdown" role="button" data-toggle="dropdown" aria-expanded="false">HOME</a>
                        
                        <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                            <li><a class="dropdown-item" href="#">hh</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="shopDropdown" role="button" data-toggle="dropdown" aria-expanded="false">SHOP</a>
                        
                        <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                            <li><a class="dropdown-item" href="#">sds</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="blogDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        BLOG PAGES</a>

                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2 dropdown">
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
    </nav>
</div>


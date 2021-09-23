@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/products.css') }}">
@endpush

@section('content')

    <div class="container mt-5" style="margin-bottom: 6rem;">
        <div class="row">
            <div class="col-3">

                <div class="shop"> 
                    <h6 class="font-weight-bold">Shop</h6>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link font-weight-bold" data-toggle="collapse" href="#menu-one" aria-expanded="true" aria-controls="menuone">Art Gallery<span class="collapsed"><p><b>+</b></p></span>
                                    <span class="expanded"><p><b>-</b></p></span></a>
                            </div>

                            <div id="menu-one" class="collapse">

                                <div class="card-body">
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link font-weight-bold" data-toggle="collapse" href="#menu-two" aria-expanded="true" aria-controls="menuone">Art Gallery<span class="collapsed"><p><b>+</b></p></span>
                                    <span class="expanded"><p><b>-</b></p></span></a>
                            </div>

                            <div id="menu-two" class="collapse">

                                <div class="card-body">
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link font-weight-bold" data-toggle="collapse" href="#menu-three" aria-expanded="true" aria-controls="menuone">Art Gallery<span class="collapsed"><p><b>+</b></p></span>
                                    <span class="expanded"><p><b>-</b></p></span></a>
                            </div>

                            <div id="menu-three" class="collapse">

                                <div class="card-body">
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                    <h6 class="mb-3" style="font-size: 0.8rem;">Art Gallery</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <hr>

                <div class="categories">
                    <h5 class="font-weight-bold mb-3">Categories</h5>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Shorts (192)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Dresses (50)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Shorts (192)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Shorts (192)
                        </label>
                    </div>
                </div>

                <hr>

                <div class="categories">
                    <h5 class="font-weight-bold mb-3">Brands</h5>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Puma (56)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Polo (50)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Boss (192)
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label font-weight-bold" for="flexCheckDefault" style="font-size: 0.9rem;">
                          Shorts (192)
                        </label>
                    </div>
                </div>

            </div>

            <div class="col-9">
              <h5>Shop</h5>

                <div class="row align-items-center">
                  <div class="col-1">
                    <img src="{{ url('assets/img/baseline-apps-24px.png') }}" alt="" style="height: 2rem;">
                  </div>

                  <div class="col-1 border-right">
                    <img src="{{ url('assets/img/baseline-notes-24px.png') }}" alt="" style="height: 2rem;">
                  </div>

                  <div class="col-3">
                    <p class="mb-0" style="font-size: 0.8rem;">Showing 10 to 18 of 27</p>
                  </div>

                  <div class="col-7">

                    <div class="row align-items-center justify-content-end">
                        <div class="col-2">
                            <p class="mb-0" style="font-size: 0.8rem;">Sort By: </p>
                        </div>

                        <div class="col-6">
                            <select class="form-control" aria-label="Default select example">
                                <option value="1" selected>Relevance</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                            </select>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="items mt-5">
                  <div class="row">

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                      <div class="col-4 mb-4">
                          <div class="card text-left">
                              <img src="{{ url('index/shirt1.png') }}" class="card-img-top" alt="..." style="height: 15rem">
                              <div class="action-links" style="position: absolute; top: 13rem; background-color: white;">
                                  <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                                  <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                  <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="fas fa-sync"></i></a>
                                  <a class="action-btn btn-quickview" data-bs-toggle="modal" data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                              </div>
                              <div class="card-body mt-2">
                                  <div class="row mb-3">
                                      <div class="col-7 pr-0">
                                          <p class="mb-0" style="font-size: 0.8rem;">Graphic Corner</p>
                                      </div>
                                      <div class="col-5 pl-0">
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                          <i class="far fa-star gold" style="font-size: 0.7rem;"></i>
                                      </div>
                                  </div>
                                  <h6 class="card-text font-weight-bold mt-2">Men's Shirt New Design</h6>
                                  <h5 class="font-weight-bold mt-2" style="color: #FF0000">Rs. 1950.00</h5>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>

                <hr>
            </div>
        </div>
    </div>


@endsection



@push('after-scripts')

@endpush

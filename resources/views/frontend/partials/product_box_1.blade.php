<article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next" style="width: 285px;">
    <div class="product-thumb">
        <div class="product-inner">
            <div class="product-image">
                <div class="label-product label-new">New</div>
                <a href="{{ route('product', $product->slug) }}">
                    <img onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';" src="{{ uploaded_asset($product->thumbnail_img) }}" alt="{{  $product->getTranslation('name')  }}" title="{{  $product->getTranslation('name')  }}">
                </a>
                <div class="action-links">
                    <a class="" href="#" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a>
                    <a class="" onclick="addToWishList({{ $product->id }})" href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                    <a class="" href="#" title="Add to Compare" onclick="addToCompare({{ $product->id }})"><i class="fas fa-sync"></i></a>
                    <a class="" data-bs-toggle="modal" onclick="showAddToCartModal({{ $product->id }})"  data-bs-target="#product_quick_view" href="#" title="Quick View"><i class="fas fa-search"></i></a>
                </div>
            </div> <!-- end of product-image -->

            <div class="product-caption">
                <div class="product-meta d-flex justify-content-between align-items-center">
                    <div class="product-manufacturer">
                        <a href="#">{{ home_discounted_base_price($product) }}</a>
                    </div>
                    <div class="rating rating-sm mt-1">
                        {{ renderStarRating($product->rating) }}
                    </div>
                </div>
                <h6 class="card-text font-weight-bold mt-2" style="text-align: left">{{  $product->getTranslation('name')  }}</h6>
                @if(home_base_price($product) != home_discounted_base_price($product))
                    <h5 class="font-weight-bold mt-2" style="color: #FF0000;text-align: left">{{ home_base_price($product) }}</h5>
                @endif

            </div><!-- end of product-caption -->
        </div><!-- end of product-inner -->
    </div><!-- end of product-thumb -->
</article>
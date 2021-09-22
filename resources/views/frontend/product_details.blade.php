@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/single_product.css') }}">
@endpush

@section('content')

    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-1 pr-0">
                <dic class="row">
                    <div class="col-12 mb-2">
                        <img src="{{ url('index/9.png') }}" alt="" class="img-fluid" style="height: 5rem;">
                    </div>
                    <div class="col-12 mb-2">
                        <img src="{{ url('index/10.png') }}" alt="" class="img-fluid" style="height: 5rem;">
                    </div>
                    <div class="col-12 mb-2">
                        <img src="{{ url('index/9.png') }}" alt="" class="img-fluid" style="height: 5rem;">
                    </div>
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
            </div>
        </div>
    </div>

@endsection

@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
@endpush

@section('content')
    <div class="container" style="margin-top: 5rem; margin-bottom: 6rem;">
            <h2 class="text-center">Login to your account.</h2>

            <div class="row justify-content-center" style="margin-top: 3rem;">
                <div class="col-6 shadow-lg p-5">
                    <div class="row justify-content-center align-items-center mb-5 rounded-0">
                        <div class="col-3">
                            <p class="mb-0" style="font-size: 1rem;">Email Address</p>
                        </div>
                        <div class="col-9">
                            <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-3">
                            <p class="mb-0" style="font-size: 1rem;">Password</p>
                        </div>
                        <div class="col-9">
                            
                            <div class="input-group mb-3">
                                <input type="password" class="form-control rounded-0 pass" id="exampleInputEmail1" aria-describedby="emailHelp">  
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash" type="button"></i></span>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4 mb-5">
                        <a href="#" class="font-size: 1rem;">Forgot your Password?</a>
                        <br>
                        <a href="#" class="btn text-white px-5 mt-4" style="background-color: black;">Login</a>
                    </div>

                    <hr>

                    <p class="text-center" style="font-size: 0.8rem;">No account? <a href="#" style="color: red;">Create one here.</a></p>
                </div>
            </div>
        </div>
@endsection

@section('script')
    <script type="text/javascript">
        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
        function autoFillDeliveryBoy(){
            $('#email').val('deliveryboy@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection

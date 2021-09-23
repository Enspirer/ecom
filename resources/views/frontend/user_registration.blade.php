@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
@endpush

@section('content')
    <div class="container" style="margin-top: 5rem; margin-bottom: 6rem;">
            <h2 class="text-center">{{ translate('Create an Account')}}</h2>

            <div class="row justify-content-center" style="margin-top: 2rem;">
                <div class="col-6 shadow-lg p-5">
                    <p style="font-size: 0.8rem;">Already have an account? <a href="#" style="color: red;">Login instead!</a></p>
                    <form class="form-default mt-4" role="form" action="{{ route('login') }}" method="POST">
                    {{@csrf_field()}}

                        <div class="row justify-content-center align-items-center mb-4 rounded-0">
                            <div class="col-3">
                                <p class="mb-0" style="font-size: 0.9rem;">Full Name</p>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control rounded-0" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your first and last name">
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center mb-4 rounded-0">
                            <div class="col-3">
                                <p class="mb-0" style="font-size: 0.9rem;">Email Address</p>
                            </div>
                            <div class="col-9">
                                <input type="email" class="form-control rounded-0" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center mb-5 rounded-0">
                            <div class="col-3">
                                <p class="mb-0" style="font-size: 0.9rem;">Phone Number</p>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control rounded-0" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number with country code">
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center mb-5">
                            <div class="col-3">
                                <p class="mb-0" style="font-size: 1rem;">Password</p>
                            </div>
                            <div class="col-9">
                                <div class="input-group">
                                    <input type="password" class="form-control rounded-0 pass" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">  
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash" type="button"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center mb-5">
                            <div class="col-3">
                                <p class="mb-0" style="font-size: 1rem;">Password</p>
                            </div>
                            <div class="col-9">
                                <div class="input-group">
                                    <input type="password" class="form-control rounded-0 pass" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">  
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-eye-slash" type="button"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-12 text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" style="font-size: 0.8rem;">
                                        By signing up you agree to our terms and conditions.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4 mb-5">
                            <button type="submit" class="btn text-white px-5 mt-4" style="background-color: black;">{{  translate('Register') }}</button>
                        </div>
                    </form>
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

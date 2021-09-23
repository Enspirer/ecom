@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
@endpush

@section('content')
    <div class="container" style="margin-top: 5rem; margin-bottom: 6rem;">
            <h2 class="text-center">{{ translate('Forgot your password?')}}</h2>

            <div class="row justify-content-center" style="margin-top: 3rem;">
                <div class="col-6 shadow-lg p-5">
                    <p class="mb-4" style="font-size: 0.75rem;">Enter your email address below and we’ll send you a link to reset your password</p>
                    <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                    {{@csrf_field()}}
                        <div class="row justify-content-center align-items-center mb-3 rounded-0">
                            <div class="col-5">
                                <p class="mb-0" style="font-size: 0.9rem;">Phone Number or Email</p>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control rounded-0" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Phone number or Email">
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn text-white px-5 mt-4" style="background-color: black;">{{  translate('Login') }}</button>
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

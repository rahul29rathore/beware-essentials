@extends('layouts.app')
@section('stylesheet')
    <link href="{{ asset('admin-assets/assets/css/ekka.css') }}" rel="stylesheet">
    <style>
        .btn{
            border-radius:5px;
            color:#fff;
            margin-top: 24px !important;
            background:#2e45a7;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid align-items-center form-height-login p-0">
        <div class="row p-0 m-0">
            <div class="col-lg-8 p-0 col-md-10">
               <img src="{{asset('assets/images/login.jpg')}}" class="w-100">
               <p class="type-script">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
            </div>
            <div class="col-lg-4 p-0 col-md-10 d-flex">
                <div class="row bg-white">
                    <div class="card p-5">
                        <h3 class="text-muted mb-3 text-center">Sign In</h3>
                        <div class="card-body p-lg-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row p-0">
                                    <div class="form-group col-md-12 mb-4">
                                        <input id="email" type="email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input id="password" type="password" autocomplete="off" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                            <div class="d-inline-block mr-3">
                                                <div class="control control-checkbox">
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <div class="control-indicator"></div>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <p>
                                                    <a class="text-blue" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Password?') }}
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block mb-4">{{ __('Sign In') }}</button>
                                        <p class="sign-upp">
                                            Don't have an account yet ? <a class="text-blue" href="{{ route('register') }}">Sign Up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scriptBottom')
    <script type="text/javascript" src="{{asset('assets/js/typed.min.js')}}"></script>
    <script>
        //============Typing Js========//
        var typed = new Typed('#typed', {
            strings: ["BUSINESS PROFESSIONALS", "SECURITY PROFESSIONALS", "HOME SECURITY"],
            typeSpeed: 50,
            loop: true,
            backDelay: 900,
            backSpeed: 30,
        });

        //============Typing Js End========//
    </script>
@endpush


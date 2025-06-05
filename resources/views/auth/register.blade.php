@extends('layouts.app')
@section('stylesheet')
    <link href="{{ asset('admin-assets/assets/css/ekka.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid align-items-center form-height-login p-0">
    <div class="row p-0 m-0">
        <div class="col-lg-8 p-0 col-md-10">
           <img src="{{asset('assets/images/login.jpg')}}" class="w-100">
           <p class="type-script">FIRST CHOICE FOR <span id="typed" class="text-primary"></span></p>
        </div>
        <div class="col-lg-4 col-md-10">
            <div class="row bg-white">
                <div class="card p-5">
                    <h3 class="text-muted mb-3 text-center">Create New Account</h3>
                    <div class="card-body p-lg-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row p-0">
                                <div class="form-group col-md-12 mb-4">
                                    <input id="name" type="text" placeholder="{{ __('Name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary float-none">{{ __('Create Account') }}</button><br>
                                    <p class="sign-upp mt-3">
                                        Already have an account ? Click <a class="text-blue" href="{{ route('login') }}">Sign In</a> to your account.</p>
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

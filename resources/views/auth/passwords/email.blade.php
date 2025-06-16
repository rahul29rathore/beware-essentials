@extends('layouts.app')
@section('stylesheet')
<link href="{{ asset('admin-assets/assets/css/ekka.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="/" title="Beware Essential">
                                <img class="ec-brand-icon img-fluid" src="{{asset('assets/images/logo-w.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
					    @if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

                        <form method="POST" action="{{ route('password.email') }}">
							@csrf
                            <div class="row p-0">
                                <div class="form-group col-md-12">
                                    <label>Enter your registered email address and we will send you link shortly.</label>
                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="#" onclick="history.back();" class="btn btn-danger float-none">{{ __('Go Back') }}</a>
                                    <button type="submit" class="btn btn-primary w-auto float-none">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
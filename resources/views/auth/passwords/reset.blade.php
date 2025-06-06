@extends('layouts.app')
@section('stylesheet')
<link href="{{ asset('admin-assets/assets/css/ekka.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="/" title="Beware Essential">
                                <img class="ec-brand-icon img-fluid" src="{{asset('assets/images/logo-w.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
					
						<form method="POST" action="{{ route('password.update') }}">
							@csrf

							<input type="hidden" name="token" value="{{ $token }}">

							<div class="form-group row p-0">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row p-0">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row p-0">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Reset Password') }}
									</button>
								</div>
							</div>
						</form>
					
					</div>
				</div>
        </div>
</div>
@endsection

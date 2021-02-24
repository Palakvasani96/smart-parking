@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">        
        <div class="card">
			<div class="card-header">
				<h3>{{ isset($url) ? ucwords($url) : ""}} {{ __('Sign In') }}</h3>				
			</div>

			<div class="card-body">
				@isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">                          
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>     
						{{ __('Remember Me') }}
					</div>
					<div class="form-group">
						<button type="submit" class="btn float-right login_btn">
							{{ __('Sign In') }}
						</button>                            
					</div>   
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href={{ route('register') }}>Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					@if (Route::has('password.request'))
						<a class="btn btn-link" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
					@endif
				</div>
			</div>
		</div>        
    </div>
</div>
@endsection

@extends('layouts.theme')

@section('content')



    <!--include search-sidebar-->
    <div class="ps-page--signin">
		<div class="container">
		  <form class="ps-form--signin" method="POST" action="{{ route('login') }}">
			@csrf
			<div class="ps-form__header">
			  <h3>Sign In</h3>
			  <p>Choose one of the following sign in methods.</p>
			  <div class="ps-form__method"><a class="ps-btn ps-btn--facebook" href="#"><i class="fa fa-facebook"></i> With Facebook</a><a class="ps-btn ps-btn--google" href="#"><i class="fa fa-google-plus"></i> With Google +</a></div>
			  <p>Or sign in using your email address</p>
			</div>
			<div class="ps-form__content">
			  <div class="form-group">
				<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="form-control input-text with-border  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" required/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
			  </div>
			  <div class="form-group">
				<i class="icon-material-outline-lock"></i>
						<input type="password" class="form-control input-text with-border  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
			  </div>
			</div>
			<div class="ps-form__actions">
			  <div class="ps-checkbox ps-checkbox--circle">
				<input class="form-control" type="checkbox" id="newsletter" name="newsletters"/>
				<label for="newsletter">Remember me</label>
			  </div> @if (Route::has('password.request'))
			  <a class="forgot-password" href="{{ route('password.request') }}">
				  {{ __('Forgot Your Password?') }}
			  </a>
		  @endif
			</div>
			<div class="ps-form__footer">
			  <button class="ps-btn ps-btn--fullwidth ps-btn--gradient">Login</button>
			<p>Don't have an account?<a href="{{route('register')}}"> Sign up now!</a></p>
			</div>
		  </form>
		</div>
	  </div>
  
  
  















@endsection

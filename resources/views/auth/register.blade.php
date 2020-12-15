@extends('layouts.theme')

@section('content')




    <!--include search-sidebar-->
    <div class="ps-page--signup" id="signup-freelancer">
		<div class="container">
		  <div class="row">
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
			  <div class="ps-page__left"><img src="{{asset('assets/img/pages/account/signup-freelancer.png')}}" alt="">
			  <p>Already user?<a href="{{route('login')}}"> Sign in</a></p>
			  </div>
			</div>
			<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
			<form class="ps-form--signup-freelancer" action="{{route('register')}}" method="post">
				@csrf
				<div class="ps-form__header">
				  <h3>Sign up for free.</h3>
				  <p>Choose one of the following sign up methods.</p>
				  <div class="ps-form__method"><a class="ps-btn ps-btn--facebook" href="#"><i class="fa fa-facebook"></i> With Facebook</a><a class="ps-btn ps-btn--google" href="#"><i class="fa fa-google-plus"></i> With Google +</a></div>
				  <p>Or sign up using your email address</p>
				</div>
				<div class="ps-form__content">
				  <div class="form-group">
					<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="form-control input-text with-bord @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" name="name" id="name" placeholder="Name" required/>
                   
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  </div>
				  
				  <div class="form-group">
					<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="form-control input-text with-bord @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" id="email" placeholder="Email Address" required/>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				  </div>
				  <div class="form-group">
					<i class="icon-material-outline-lock"></i>
						<input type="password" class="form-control input-text with-bord @error('password') is-invalid @enderror" name="password" name="password" id="password" placeholder="Password" required/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
				  </div>
				  <div class="form-group">
					<i class="icon-material-outline-lock"></i>
						<input type="password" class="form-control" name="password_confirmation" id="password-cornfrm" placeholder="Repeat Password" required/>
                   
				  </div>
				  <p><i class="fa fa-shield"></i> Your passwords at exxpert are encrypted and secured</p>
				  {{-- <div class="ps-checkbox ps-checkbox--circle">
					<input class="form-control" type="checkbox" id="newsletter" name="newsletters"/>
					<label for="newsletter">I would like to receive weekly and monthly newsletters from
  exxpert</label>
				  </div> --}}
				</div>
				<div class="ps-form__footer">
				  <button class="ps-btn ps-btn--fullwidth ps-btn--gradient">Sign Up</button>
				  <p>By registering you confirm that you accept the <br><a href="#"> Terms and Conditions</a> and<a href="#"> Privacy Policy</a></p>
				</div>
			  </form>
			</div>
		  </div>
		</div>
	  </div>
















@endsection
@section('script')

<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() { 
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        }); 
    }); 
    </script>
@endsection

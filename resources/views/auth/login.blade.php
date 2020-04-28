<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Oui Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link href="{{asset('cms/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('cms/css/app.min.css')}}" rel="stylesheet" type="text/css" />
   </head>
   <body class="authentication-bg authentication-bg-pattern">
      <div class="account-pages mt-100 mb-100">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-pattern">
                     <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                           <a href="index.html">
                           <span><img src="{{asset('cms/images/logo-dark.png')}}" height="22"></span>
                           </a>
                           <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="form-group mb-3">
                              <label for="emailaddress">{{ __('E-Mail Address') }}</label>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus  placeholder="Enter your email">
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							
                           <div class="form-group mb-3">
                              <label for="password">{{ __('Password') }}</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
								@enderror
						   </div>
                           <div class="form-group mb-3">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                 <label class="custom-control-label" for="checkbox-signin">{{ __('Remember Me') }}</label>
                              </div>
                           </div>
                           <div class="form-group mb-0 text-center">
                              <button class="btn btn-primary btn-block" type="submit"> {{ __('Login') }} </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer footer-alt">
         © Copyright 2020. All Rights Reserved
      </footer>
      <script src="{{asset('cms/js/vendor.min.js')}}"></script>
      <script src="{{asset('cms/js/app.min.js')}}"></script>
   </body>
</html>
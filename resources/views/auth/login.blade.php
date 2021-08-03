<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jul 2021 21:33:02 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Login V1</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="assetslogin/vendor/bootstrap/assetslogin/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/assetslogin/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assetslogin/vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="assetslogin/vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="assetslogin/vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="assetslogin/css/util.css">
      <link rel="stylesheet" type="text/css" href="assetslogin/css/main.css">
      <meta name="robots" content="noindex, follow">
   </head>
   <body>
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100">
               <div class="login100-pic js-tilt" data-tilt>
                  <img src="assetslogin/images/img-01.png" 
                  width="400"
                  height="400px"
                  alt="">
               </div>
               <form class="login100-form validate-form">
                  <span class="login100-form-title">
                  Bienvenidos a DocNet
                  </span>
                <div class="wrap-input100 validate-input">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="wrap-input100 validate-input">
                                <input id="email" class="input100" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="wrap-input100 validate-input">
                                <input id="password" class="input100" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="login100-form-btn" style="background-color: blue" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    <div class="text-center p-t-136">
                     <span class="txt1">
                     No tienes una cuenta?
                     </span>
                     <a class="txt2" href="/register" style="color: blue">
                     Registrarse
                     </a>
                     <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                     </a>
                  </div>

                    </form>
                </div>
                </div>
         </div>
      </div>
<script src="assetslogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assetslogin/vendor/bootstrap/js/popper.js"></script>
      <script src="assetslogin/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="assetslogin/vendor/select2/select2.min.js"></script>
      <script src="assetslogin/vendor/tilt/tilt.jquery.min.js"></script>
      <script>
         $('.js-tilt').tilt({
         	scale: 1.1
         })
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script src="js/main.js"></script>
      <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6740451f89d74ffb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
   </body>
   <!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jul 2021 21:33:05 GMT -->
</html>

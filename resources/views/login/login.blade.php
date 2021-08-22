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
               <form class="login100-form validate-form" method="POST" action="/login" >
               @csrf

                  <span class="login100-form-title">
                  Bienvenidos a DocNet
                  </span>
                  <!-- correo -->
                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                     <input class="input100" type="email" name="correo" id="correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>

                  <!-- contraseña -->
                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                     <input class="input100" type="password" id="contrasena" name="contrasena" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <label for="Tipo" class="col-md-4 col-form-label text-md-right"> Tipo</label>
                     
                     <select class="input100" name="Tipo" id="Tipo">
                        <option value="1">Admin</option>
                        <option value="2">Medico</option>

                     </select>
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                  </div>

                  <div class="container-login100-form-btn">
                     <button class="login100-form-btn" style="background-color: blue"  onclick="Login()">
                     Login
                     </button>
                  </div>

                  <div class="text-center p-t-12">
                     <span class="txt1">
                     Haz olvidó tu
                     </span>
                     <a class="txt2" href="#" style="color: blue">
                     contraseña?
                     </a>
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
      <script>
      // function Login(){
      //             var urlajax="http://localhost:8000/api/medico/login";
      //             var correo = $("#correo").val();
      //             var contrasena = $("#contrasena").val();
      //             var datos= {
      //                         correo: correo,
      //                         contrasena:contrasena,
      //                   }; 
      //             $.ajax({                    
      //                   url: urlajax,
      //                   data: {
      //                         correo: correo,
      //                         contrasena:contrasena} , 
      //                   type : 'POST',
      //                   dataType: "json",
                                          
      //                   beforeSend:function( ) {   
      //                   //   $("#btncarga").show();
      //                   },                    
      //                   success:function(response) {
      //                         console.log(Response);
      //                   },
      //                error: function (data) {
      //                   // console.log(data.responseText);
      //                   console.log(data);
      //                },               
      //                complete:function( ) {
      //                   //var gnNumeroTransaccion,gnSwVerificacionQr;
      //                },
      //             });
      //       }

function error(tnIdImput)
{             
$(tnIdImput).css("border-color", "red");
$(tnIdImput).css("border-style", "outset");
$(tnIdImput).css("border-width", "revert");
}

function valido(tnIdImput)
{             
$(tnIdImput).css("border-color", "#47FB13");
$(tnIdImput).css("border-style", "outset");
$(tnIdImput).css("border-width", "revert");
}
</script>
</body>
   <!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jul 2021 21:33:05 GMT -->
</html>
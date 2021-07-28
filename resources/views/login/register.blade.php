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
       <!-- alt="IMG" -->
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100">
               <div class="login100-pic js-tilt" data-tilt>
                <img src="assetslogin/images/img-01.png" 
                width="400"
                height="400px"
                alt=""
                style="margin-top: 3px; margin-inside: 3px"
                >
               </div>
               <div class="login100-form validate-form">
                <span class="login100-form-title">
                Registrarse
                </span>
                <div id ="cajadatospersonales">
                <!-- nombre completo -->
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="Nombre" placeholder="Nombre Completo"  >
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- fecha de nacimiento -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="date" name="pass" placeholder="Fecha de Naciemiento">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- seleccionar genero -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <select class="input100" name="" id="">
                        <option value="">Seleccionar </option>
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                    
                </div>
                <!-- añadir foto -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="file" name="pass" placeholder="Añadir Foto">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

            </div>

            <div id ="cajadatoslaborales"  style ="display:none">
            <!-- especialidad -->
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="Nombre" placeholder="Especialidad">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- numero de matricula -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Numero de Matricula">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- cv -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Curriculum Vitae">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- direccion laboral -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Direccion Laboral">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- telefono -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Telefono">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- ciudad -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Ciudad">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- horario -->
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Horario">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

            </div>

            <div id ="cajaregister"  style ="display:none">
            <!-- correo -->
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="Nombre" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
            </div>
            <!-- contraseña -->
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="Nombre" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
            </div>
            <!-- confirmar contraseña -->
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="Nombre" placeholder="Confirmar Contraseña">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
            </div>

            </div>

            <div id = "boton1" class="container-login100-form-btn">
                <button class="login100-form-btn"
                style="background-color: blue"
                onclick="siguiente1()">
                Siguiente
                </button>
            </div>

            <div id="boton0"class="container-login100-form-btn">
                <button class="login100-form-btn"
                style="background-color: blue">
                    login
                </button>
            </div>

            <div id="boton2" class="container-login100-form-btn" style ="display:none">
                <button class="login100-form-btn" 
                style="background-color: blue"
                onclick="siguiente2()">
                Siguiente
                </button>
            </div>

            <div id="boton3" class="container-login100-form-btn" style ="display:none">
                <button class="login100-form-btn"
                style="background-color: blue"
                onclick="mensaje()">
                    Registrarse
                </button>
            </div>

            <!-- <div id="boton0"class="container-login100-form-btn">
                <button class="login100-form-btn">
                    login
                </button>
            </div> -->

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
      <!-- <script async src="https://blogs.iadb.org/salud/wp-content/uploads/sites/15/2019/03/GS-NOTA.jpg"></script> -->
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-23581568-13');
      </script>
      <script src="js/main.js"></script>
      <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6740451f89d74ffb","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
    <script>
        // function mostrarBoton () {
        //     btn_1.style.display = 'none';
        //     btn_2.style.display = 'inline';
        // }
        function siguiente1(){
            
            $('#cajadatoslaborales').show();$('#cajadatospersonales').hide();
            $('#boton0').hide();
            $('#boton1').hide();
            $('#boton2').show();
            $('#boton3').hide();

        }
        function siguiente2(){
            $('#cajadatoslaborales').hide();$('#cajaregister').show();
            $('#boton0').hide();
            $('#boton1').hide();
            $('#boton2').hide();
            $('#boton3').show();

        }

        function mensaje(){
           alert("Registro Exitoso!");
        }
    </script>
</body>
<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jul 2021 21:33:05 GMT -->
</html>
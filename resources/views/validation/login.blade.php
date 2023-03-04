<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/Logo.svg" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
    <!-- Buttom to top -->
    <button class="ir-arriba btn btn-primary btn-xl btn-icon">
        <i class="fas fa-flag"></i>
    </button>

    <div class="bgheader">
        <!-- Header Grover Grocery Section -->
        <header class="_header_grover_grocery_wrapper">
            <!-- Navbar -->

        </header>
        <!-- Header Ends -->
        <div id="header" class="_header_grover_grocery_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 marginB">
                      
                        <div class="_header_grover_grocery_content">
                            <div class="_header_grover_grocery_content_txt">
                                <h1 class="_header_grover_grocery_content_title">!Prueba tecnica¡</h1>
                                <p class="_header_grover_grocery_content_para">igni s.a.s</p>
                            </div>
                            <div class="_header_grover_grocery_btn_wrap">
                                <div class="row row-3">
                                    <div class="col-xl-4 col-lg-5 col-md-3 col-sm-4 col-4 ms-md-0">
                                        <div class="_header_grover_grocery_btn">
                                            <div class="ghost-hidden"></div>
                                            <div class="_header_grover_grocery_btn">
                                                <button class="_header_now_btn" style="background: #E6511E;"
                                                    onclick="ocultar()">Log in</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-md-3 col-sm-4 col-4 ms-md-0">
                                        <div class="_header_grover_grocery_btn">
                                        <a href="{{url('/register')}}" class="_header_now_btn"  style="background: #000000;">Registrate</a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div id="indeximg1" class="_header_grover_grocery_content_img">
                            <img src="img/cohett.svg" alt="" class="_header_grover_grocery_img">
                        </div>
                        <!-- Apartado del Login -->
                        <div class="collapse" id="login">
                            <div class="login-container">            
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form"action="{{url('/login')}}" method="post" class="form" >
                                       @csrf
                                        <script>
                                            ocultar();
                                        </script>
                                        <div class="">
                                            <input type="email" name="email" id="email" class="input_login"
                                                placeholder="Correo Electrónico">
                                        </div>
                                        <div class="">
                                            <input type="text" name="password" id="password" class="input_login"
                                                placeholder="Contraseña">
                                        </div>
                                        <div class="" style="text-align: center; padding-top: 6px; padding-right: 19px">
                                           
                                        </div><br>
                                        <div class="botones_login">
                                            <div id="btn_login">
                                                <input type="submit" name="submit" class="_header_now_btn"
                                                    value="Iniciar">
                                            </div>
                                            <div id="btn_register">
                                                <div class="">
                                                   <a href="{{url('/register')}}" class="_header_now_btn">Registrate</a>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Apartado de ¿Olvidaste la contraseña? -->
         
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <img src="img/cloud.png" alt="">

</body>
@include('sweetalert::alert') 

    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        function ocultar() {
            if (document.getElementById("indeximg1").style.display = "block") {
                document.getElementById("indeximg1").style.display = "none";
                document.querySelector(".ghost-hidden").classList.add("over-hidden");
                document.getElementById("login").style.display = "block";
            }
        }

        function ocultar2() {
            if (document.getElementById("login").style.display = "block") {
                document.getElementById("login").style.display = "none";
                document.getElementById("recuperar").style.display = "block";
            }
        }

        $(document).ready(function () {

            $('.ir-arriba').click(function () {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(300);
                } else {
                    $('.ir-arriba').slideUp(300);
                }
            });

        });
    </script>

</html>

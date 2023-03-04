<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                document.getElementById("recuperarPass").style.display = "block";
            }
        }
    </script>

</head>

<body>
    <!-- Header Grover Grocery Section -->
    <header class="_header_grover_grocery_wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light _grover_grocery_navbar">
            <div class="container">
                <div class="_logo_wrap">
                    <a class="_logo_link" href="index.html">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->
    <!---<hr>-->
    <br>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-n10">
                <!-- Wizard card example with navigation-->
                    <!-- Wizard navigation-->
                    <div class="form-divider nav nav-pills nav-justified" style="margin-left: 22%;" id="cardTab"
                        role="tablist">
                        <!-- Wizard navigation item 1-->
                        <a class="form-divider nav-item nav-link active" id="wizard1-tab" href="#wizard1"
                            data-bs-toggle="tab" role="tab" aria-controls="wizard1" aria-selected="true">
                            <div class="wizard-step-text">
                                <div class="wizard-step-text-name" style="color: #363636;">Datos</div>
                            </div>
                        </a>
                    </div>
                <div class="row row-2">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 card-body">
                        <div class="card">
                            <div class="tab-content" id="cardTabContent">
                                <!-- Wizard tab pane item 1-->
                                <div class="tab-pane py-2 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                                    aria-labelledby="wizard1-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-10">
                                            <h2 class="form-title"> Formulario de registro </h2><br>
                                            <form action="{{url('/register')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <input type="text" class="col-12 input-text input-div"
                                                            placeholder="Nombre" aria-label="Nombre" name="name"
                                                            required>
                                                    </div>
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <input type="email" class="col-12 input-text input-div"
                                                            placeholder="Email" aria-label="Apellido" name="email"
                                                            required>
                                                    </div>
 
                                                </div>

                                                <div class="row gx-3 mb-4">
                                                    <div class="col-md-6 mb-6 mb-md-0">
                                                        <div class="col-md-12 mb-3 mb-md-0">
                                                        <input type="password" class="col-12 input-text input-div"
                                                            placeholder="Contraseña" name="password" required>
                                                        </div>   
                                                    </div>
                                                    <div class="col-md-6 mb-1 mb-md-0">
                                                        <input type="file" class="col-12 input-text input-div"
                                                             name="img" required accept="image/png, image/jpeg">
                                                    </div>
   
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                <input class="btn-register"
                                                    style="border: none;
                                                    width: 162px;
                                                    height: 62px;
                                                    left: 369px;
                                                    top: 611px;
                                                    border-radius: 14px;color: #fff;
                                                    background-color: #E6511E" type="submit"
                                                    value="Enviar">
                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div id="indeximg1" class="_header_grover_grocery_content_img">
                                <img src="img/astro.png" alt="Header Image" class="_header_grover_grocery_img">
                            </div>
                        </div> -->
            </div>
    </div>
    </main>
    </div>
    <img src="img/cloud.png" alt="">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>

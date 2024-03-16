<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoveYou</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../public/dist/css/StylesLv.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="body-login sidebar-collapse">




    <header id="sticky-wrapper" class="navbar navbar-expand-lg navbar-light bg-black sticky-wrapper">

    </header>

            <!-- Navbar -->
            <?php require_once INCLUDES_TEMPLATE . "navbarMain.php"; ?>
        </php>
        <!-- /.navbar -->

    <section>
        <div class="container-fluid " id="login-background">
        <!--<div class="bodyMenu"><h1> LoveYou </h1></div> -->
            <!--AQUI INICIA LOGIN-->
            <div class="bodyMenu">
                <div class="wrapperLogin">
                    <div class="item menu">
                        <div class="linee linee1"></div>
                        <div class="linee linee2"></div>
                        <div class="linee linee3"></div>
                    </div>
                    <div class="item gallery">
                        <div class="dot dot1"></div>
                        <div class="dot dot2"></div>
                        <div class="dot dot3"></div>
                        <div class="dot dot4"></div>
                        <div class="dot dot5"></div>
                        <div class="dot dot6"></div>
                    </div>
                    <div class="item add">
                        <div class="circle navbar-toggler" href="#demo" data-bs-toggle="collapse">
                            <div class="close">
                                <div class="line line1"></div>
                                <div class="line line2"></div>
                            </div>
                        </div>
                        <input type="search" placeholder="Login" class="search" />
                        <!-- login card -->
                        <div id="demo" class="collapse ">
                            <div class="login-box" id="Colorbox">
                                <!-- /.login-logo -->
                                <div class="container py-11 h-100">
                                    <div class=" card-header text-center">
                                        <a id="link-hover" href="../../index2.html"
                                            class="h1 text-center"><b>Love</b>You</a>
                                        <br>
                                    </div>
                                    <div class="card-body">
                                        <p class="login-box-msg ">Iniciar Sesión</p>

                                        <form action="../web/cmdAutenticar" method="post">
                                            <div class="input-group mb-3">
                                                <input type="email" name="Email" class="form-control"
                                                    placeholder="Correo Electrónico">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-envelope"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="password" name="Password" class="form-control"
                                                    placeholder="Contraseña">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="icheck-primary">
                                                        <input type="checkbox" id="remember">
                                                        <label for="remember">
                                                            Remember Me
                                                        </label>
                                                        <p class="mb-1">
                                                            <a href="../web/cmdeDefaultRecuperaPassword">Olvidé la
                                                                Contraseña</a>
                                                        </p>
                                                        <p class="mb-0">
                                                            <a href="../web/cmdDefaultRegistrarUsuario"
                                                                class="text-center">Registrarme</a>
                                                        </p>
                                                    </div>
                                                </div>

                                                <!-- /.col -->
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-info btn-block">Ingresar</button>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </form>
                                        <!--
                                        <div class="social-auth-links text-center mt-2 mb-3">
                                            <a href="#" class="btn btn-block btn-primary">
                                                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                                            </a>
                                            <a href="#" class="btn btn-block btn-danger">
                                                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                                            </a>
                                        </div>      -->
                                        <!-- /.social-auth-links -->


                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- fin Logn card -->
                    </div>


                    <div class="nav-items items2">
                        <i></i>
                        <a class="fas fa-camera" href="..\web\cmdGalery"></a>
                    </div>
                    <div class="nav-items items3">
                        <i></i>
                        <a class="fas fa-folder" href="..\web\cmdNews"></a>
                    </div>
                    <div class="nav-items items4">
                        <i>
                            <a class="fas fa-heart" href="..\web\cmdTestimonial"></a>
                        </i>
                    </div>
                    <div class="box">
                        <div class="box-line box-line1"></div>
                        <div class="box-line box-line2"></div>
                        <div class="box-line box-line3"></div>
                        <div class="box-line box-line4"></div>
                    </div>
                </div>
            </div>

            <div class="effect"></div>
            <!--AQUI finaliza LOGIN-->
        </div>
    </section>
    <br>
    <br>





    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="../public/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
    <!-- menu  -->
    <script src="../public/dist/js/pages/StyleLogin.js"></script>

    <script>
        //Implmenta el mensaje en la parte superior derecha
        //cada vez que se ejecuta una accion

        $(function () {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000
            });
            //Se valida que el atributo mensaje venga lleno para mostar el mensaje
            <?php if (isset($d) && $d->message != ""): ?>             
            Toast.fire({ icon: '<?php echo ($d->result == "success") ? "success" : "warning"; ?>', title: '<?php echo $d->message; ?>' })
            <?php endif ?>
        });
    </script>

    <!-- Importo el footer -->
    <?php require_once INCLUDES_TEMPLATE . "footer.php"; ?>
    </php>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?>
</php>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once INCLUDES_TEMPLATE . "navbar.php"; ?>
        </php>
        <!-- /.navbar -->

    
        <!-- Content Wrapper. Contains page content -->
        <div class="" id="Registro-background">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Registro de Usuario</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="web/">Inicio</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="col-5">

                <!-- Default box -->
                <div class="container py-5 h-100" id="Colorbox">
                    <div class=" card-header text-center">
                        <h1 class="h1" id="link-hover"><b>Registrar Usuario</b></h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdRegistrarUsuario" method="POST">
                        <div class="card-body">

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Nombre" id="Nombre"
                                    placeholder="Ingrese Nombre">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Apellidos" id="Apellidos"
                                    placeholder="Ingrese Apellidos">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Tipo_Identificacion"
                                    id="Tipo_Identificacion" placeholder="Tipo Identificacion">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Numero_Identificacion"
                                    id="Numero_Identificacion" placeholder="Numero de Identificacion">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Nacionalidad" id="Nacionalidad"
                                    placeholder="Nacionalidad">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Edad" id="Edad"
                                    placeholder="Edad">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Genero" id="Genero"
                                    placeholder="Genero">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Telefono" id="Telefono"
                                    placeholder="Telefono">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Pais" id="Pais"
                                    placeholder="Pais">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Ciudad_Residencia"
                                    id="Ciudad_Residencia" placeholder="Ciudad de Residencia">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Calle_Principal"
                                    id="Calle_Principal" placeholder="Calle Principal">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" value="" name="Calle_Secundaria"
                                    id="Calle_Secundaria" placeholder="Calle Secundaria">
                            </div>

                            <div class="form-group">

                                <input type="Email" class="form-control" value="" name="Email" id="Email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">

                                <input type="Password" class="form-control" value="" name="Password" id="Password"
                                    placeholder="Contraseña">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>


                        <input type="hidden" value="1" name="Estado" id="Estado">

                    </form>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Importo el footer -->
        <?php require_once INCLUDES_TEMPLATE . "footer.php"; ?>
        </php>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php require_once INCLUDES_TEMPLATE . "scripts.php"; ?>
    </php>

</body>

</html>
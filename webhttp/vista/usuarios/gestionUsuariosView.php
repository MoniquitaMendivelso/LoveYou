<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?>
</php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once INCLUDES_TEMPLATE . "navbar.php"; ?>
        </php>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLATE . "aside.php"; ?>
        </php>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style='color:#FF69B4'>Gestion de Usuarios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="<?php print_r('web/cmdDefaultCrearUsuario/' . $d->data[0]->Id_Usuario); ?>" class="btn btn-outline-danger" style='color:#FF69B4; '>Adicionar</a>
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th>Acciones</th>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Tipo de Identificacion</th>
                                <th>Numero de Identificacion</th>
                                <th>Email</th>
                                <th>Tipo de Suscripción</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                                <?php
                                //los parametros llegan en un arreglo llamado $d
                                $r = json_encode($d,JSON_PRETTY_PRINT); //codifica el arreglo en formato json
                                //print_r("<div>" . $r  . "</div>");//imprime el arreglo json
                                //recorre cada elemento "data" del arreglo, para imprimir los valores del usuario
                                foreach ($d->data as $usuario) {
                                    print_r("<tr>");
                                    print_r("<td>
                                              <a href='web/cmdDefaultEditarUsuario/" . $usuario->Id_Usuario . "'><i class='nav-icon fas fa-edit'></i></a>
                                              <a href='web/cmdEliminarUsuario/" . $usuario->Id_Usuario . "'><i class='nav-icon fas fa-trash'></i></a>
                                            </td>");
                                    print_r("<td>$usuario->Id_Usuario</td>");
                                    print_r("<td>$usuario->Nombre</td>");
                                    print_r("<td>$usuario->Apellidos</td>");
                                    print_r("<td>$usuario->Tipo_Identificacion</td>");
                                    print_r("<td>$usuario->Numero_Identificacion</td>");
                                    print_r("<td>$usuario->Email</td>");
                                    print_r("<td>Tipo_Suscripcion</td>");
                                    print_r("<td>$usuario->Estado</td>");
                                    print_r("</tr>");
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

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
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
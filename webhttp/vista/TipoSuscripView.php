<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Pago</title>
    <!-- Agrega las referencias de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    //los parametros llegan en un arreglo llamado $d
    //$r = json_encode($d, JSON_PRETTY_PRINT); //codifica el arreglo en formato json
    //print_r("<div class='card-body'>" . $r . "</div>"); ?>
    <div class="content-wrapper" id="Editar-background">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="col-5">

            <!-- Default box -->
            <div class="container py-5 h-100 body-editFormulario " id="Colorbox">
                <div class=" card-header text-center">
                    <h1 class="h1" id="link-hover"><b>Método de Pago</b></h1>
                </div>
                <!-- formulario de pago -->
                <div class="container">

                    <form action="">
                        <div class="mb-3">
                            <label for="nombre-titular" class="form-label">Nombre del Titular</label>
                            <input type="text" class="form-control" id="nombre-titular"
                                placeholder="Escribe el nombre del titular">
                        </div>
                        <div class="mb-3">
                            <label for="numero-tarjeta" class="form-label">Número de Tarjeta</label>
                            <input type="text" class="form-control" id="numero-tarjeta"
                                placeholder="Escribe el número de la tarjeta">
                        </div>
                        <div class="mb-3">
                            <label for="fecha-expiracion" class="form-label">Fecha de Expiración</label>
                            <input type="text" class="form-control" id="fecha-expiracion" placeholder="MM/YY">
                        </div>
                        <div class="mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV">
                        </div>
                        <button type="submit" class="btn btn-info">Pagar</button>
                    </form>
                    <div>
                        <a class="btn-bootstrap"
                            href="<?php print_r('..\cmdPerfilPrivado/' . $d->data[0]->Id_Usuario); ?>"
                            role="button">Return</a>
                    </div>
                </div>

</body>

</html>
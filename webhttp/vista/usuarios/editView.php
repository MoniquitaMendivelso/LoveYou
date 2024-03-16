<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?>
</php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php 
        $r = json_encode($d, JSON_PRETTY_PRINT); //codifica el arreglo en formato json
        print_r("<div class='card-body'>" . $r . "</div>"); //imprime el arreglo json

        require_once INCLUDES_TEMPLATE . "navbar.php"; ?>
        </php>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLATE . "aside.php"; ?>
        </php>

        <!-- Content Wrapper. Contains page content -->
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
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="col-9">

                <!-- Default box -->
                <div class="container py-5 h-100 body-editFormulario " id="Colorbox">
                    <div class=" card-header text-center">
                        <h1 class="h1" id="link-hover"><b>Editar Usuario</b></h1>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdActualizarUsuario" method="POST">
                        <div class="card-body">
                            <div class="form-floating mb-3 col-2">
                                
                                <input type="text" class="form-control" readonly="false"
                                    value="<?php print_r($d->data[0]->Id_Usuario); ?>" name="Id" id="Id"
                                    placeholder="Ingrese Id">
                                
                            </div>
                            <!-- imagen -->
                            <div class="form-group card card-body">
                                <img src="public/dist/img/user2-160x160.jpg" class="img-thumbnail " alt="..." style="max-width: 70%;">
                                <label for="Imagen" class="form-label p-2 g-col-6"> Ingrese una imagen de Perfil </label>
                                <input type="file" class="" name="Imagen" id="Imagen" >
                                
                            </div>

                            <div  class="row">

                                <div class="form-group mb-3 col">
                                    <input type="text" class="form-control" value="<?php print_r($d->data[0]->Nombre); ?>"
                                        name="Nombre" id="Nombre" placeholder="Ingrese Nombre">
                                </div>                             
                        
                                <div class="form-group col">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Apellidos); ?>" name="Apellidos" id="Apellidos"
                                        placeholder="Ingrese Apellidos">
                                </div>
                            </div>
                            <div  class="row">
                                <div class="form-group col">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Tipo_Identificacion); ?>"
                                        name="Tipo_Identificacion" id="Tipo_Identificacion"
                                        placeholder="Tipo_Identificacion">
                                </div>

                                <div class="form-group col">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Numero_Identificacion); ?>"
                                        name="Numero_Identificacion" id="Numero_Identificacion"
                                        placeholder="Numero_Identificacion">
                                </div>
                            </div>
                            <div  class="row">
                                <div class="form-group col">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Nacionalidad); ?>" name="Nacionalidad"
                                        id="Nacionalidad" placeholder="Nacionalidad">
                                </div>
                                <div class="form-group col">

                                        <input type="text" class="form-control" value="<?php print_r($d->data[0]->Pais); ?>"
                                            name="Pais" id="Pais" placeholder="Pais">
                                </div>
                            </div>
                            <div class="form-group col-5">                                
                                    <input type="number" class="form-control" value="<?php print_r($d->data[0]->Edad); ?>" id="Edad" name="Edad" min="18" max="128">
                            </div>

                            <div class="form-group mb-3" >

                                <?php $Genero = $d->data[0]->Genero;
                                //print_r('<div>' . $Genero . '</div>');
                                if($Genero == "Femenino"){
                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox1" id="Genero" value="Femenino" name="Genero"  checked>');
                                    print_r('<label class="form-check-label">Femenino</label>');
                                    print_r('</div>');

                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox2" id="Genero" value="Masculino" name="Genero" >');
                                    print_r('<label class="form-check-label">Masculino</label>');
                                    print_r('</div>');
                                    
                                }elseif ($Genero == "Masculino"){
                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox1" id="Genero" value="Femenino" name="Genero"  >');
                                    print_r('<label class="form-check-label">Femenino</label>');
                                    print_r('</div>');

                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox2" id="Genero" value="Masculino" name="Genero" checked>');
                                    print_r('<label class="form-check-label">Masculino</label>');
                                    print_r('</div>');
                                }else{
                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox1" id="Genero" value="Femenino" name="Genero"  >');
                                    print_r('<label class="form-check-label">Femenino</label>');
                                    print_r('</div>');

                                    print_r('<div class="form-check form-check-inline">');
                                    print_r('<input class="form-check-input" type="radio" id="inlineCheckbox2" id="Genero" value="Masculino" name="Genero" >');
                                    print_r('<label class="form-check-label">Masculino</label>');
                                    print_r('</div>');
                                }
                                ?>
                                



                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Telefono); ?>" name="Telefono" id="Telefono"
                                        placeholder="Telefono">
                                </div>

                                

                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Ciudad_Residencia); ?>"
                                        name="Ciudad_Residencia" id="Ciudad_Residencia" placeholder="Pais">
                                </div>

                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Calle_Principal); ?>" name="Calle_Principal"
                                        id="Calle_Principal" placeholder="Calle_Principal">
                                </div>

                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        value="<?php print_r($d->data[0]->Calle_Secundaria); ?>" name="Calle_Secundaria"
                                        id="Calle_Secundaria" placeholder="Calle_Secundaria">
                                </div>

                                <div class="form-group">

                                    <input type="Email" class="form-control"
                                        value="<?php print_r($d->data[0]->Email); ?>" name="Email" id="Email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control"
                                        value="<?php print_r($d->data[0]->Password); ?>" name="Password" id="Password"
                                        placeholder="Password"> <!-- readonly="true" -->
                                </div>


                                <br>
                                <br>
                                <div class="container">

                                    <!--Aqui inicia Acerca de mi-->
                                    <div>
                                        <a class="btn btn-info" type="button" href="#Acerca"
                                            data-bs-toggle="collapse">Acerca
                                            de mi</a><!-- href="#demo" data-bs-toggle="collapse"-->
                                    </div>

                                    <div class="form-group collapse container" id="Acerca">

                                        <label>Acerca de mi:</label>
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes1"
                                                    value="interes1">
                                                <label class="form-check-label" for="interes1">
                                                    Lectura
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes2"
                                                    value="interes2">
                                                <label class="form-check-label" for="interes2">
                                                    Cine
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    escuchar musica
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Bailar
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Deportes
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Estudiar
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Viajar
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Amistades
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Relación Seria
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <!--Aqui inicia descripcion fisica-->
                                    <div>
                                        <a class="btn btn-info " type="button" href="#Fisica"
                                            data-bs-toggle="collapse">Descripción Física
                                        </a><!-- href="#demo" data-bs-toggle="collapse"-->
                                    </div>
                                    <div class="form-group collapse container" id="Fisica">
                                        <label>Como me describo Fisicamente:</label>
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes1"
                                                    value="interes1">
                                                <label class="form-check-label" for="interes1">
                                                    Alto
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes2"
                                                    value="interes2">
                                                <label class="form-check-label" for="interes2">
                                                    Mediano
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Bajo
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes4">
                                                    Acuerpado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes5">
                                                    Atlético
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes6">
                                                    Delgado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes7">
                                                    Blanco
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes8">
                                                    Trigueño
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes9">
                                                    Moreno
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes10">
                                                    Afro
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div>
                                        <a class="btn btn-info mb-3" type="button" href="#Describe"
                                            data-bs-toggle="collapse">Caracteristicas que me describen
                                        </a><!-- href="#demo" data-bs-toggle="collapse"-->
                                    </div>
                                    <!--Aqui inicia caracteristicas personales-->

                                    <div class="form-group collapse container mb-3" id="Describe">
                                        <label>Caracteristicas poseo:</label>
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes1"
                                                    value="interes1">
                                                <label class="form-check-label" for="interes1">
                                                    Creativo
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes2"
                                                    value="interes2">
                                                <label class="form-check-label" for="interes2">
                                                    Original
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes3"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Arriesgado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes4"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Divertido
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes5"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Serio
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes6"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Malhumorado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes7"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Inseguro
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes8"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Sensible
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="interes9"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Intolerante
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes10"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Cariñoso
                                                </label>
                                            </div>

                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes11"
                                                    value="interes1">
                                                <label class="form-check-label" for="interes1">
                                                    Nervioso
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes12"
                                                    value="interes2">
                                                <label class="form-check-label" for="interes2">
                                                    Celoso
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes13"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Tranquilo
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes14"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Trabajador
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes15"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Optmimista
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes16"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Negativo
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes17"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Aváro
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes18"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Noble
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes19"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Pesimista
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes20"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Egoísta
                                                </label>
                                            </div>

                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes21"
                                                    value="interes1">
                                                <label class="form-check-label" for="interes1">
                                                    Sincero
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes22"
                                                    value="interes2">
                                                <label class="form-check-label" for="interes2">
                                                    Soñador
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes23"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Cruel
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes24"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Confiado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes25"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Honesto
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes26"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Desordenado
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes27"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Tímido
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes28"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Coqueto
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes29"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Fiel
                                                </label>
                                            </div>
                                            <div class="form-check col">
                                                <input class="form-check-input" type="checkbox" id="interes30"
                                                    value="interes3">
                                                <label class="form-check-label" for="interes3">
                                                    Orgulloso
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">

                                    <?php 
                                        $Estado = (int)$d->data[0]->Estado;
                                        //print_r('<div>' . $Estado . '</div>');
                                        if($Estado > 1)
                                        {
                                            print_r('<input type="text" class="form-control"
                                            value="' . $Estado . '" name="Estado" id="Estado"
                                            placeholder="Ingrese el estado">');
                                        } else
                                        {
                                            print_r('<input type="hidden" class="form-control"
                                            value="' . $Estado . '" name="Estado" id="Estado"
                                            placeholder="Ingrese el estado">');
                                        }
                                        
                                    ?>

                                       <!-- <input type="text" class="form-control"
                                            value="<?php //print_r($d->data[0]->Estado); ?>" name="Estado" id="Estado"
                                            placeholder="Ingrese el estado"> 

                                    -->    
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer mb-3">
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                <div class="d-grid gap-2 d-md-block mb-3">
                                    <a class="btn btn-info" type="button"
                                        href="<?php print_r('..\LoveYou/web/cmdTipoSuscrip/' . $d->data[0]->Id_Usuario); ?>">¡Hazte
                                        Premium!</a>
                                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
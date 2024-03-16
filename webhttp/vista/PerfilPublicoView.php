<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?>
</php>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        //los parametros llegan en un arreglo llamado $d
        $r = json_encode($d, JSON_PRETTY_PRINT); //codifica el arreglo en formato json
        print_r("<div class='card-body'>" . $r . "</div>"); //imprime el arreglo json
        //$Estado = $d->data[0]->Estado;
        //print_r("<div class='card-body'>" . $Estado . " Estado </div>");
        //if ($Estado > 1) {
        require_once INCLUDES_TEMPLATE . "navbar.php";
        require_once INCLUDES_TEMPLATE . "aside.php";
        //}
        //require_once INCLUDES_TEMPLATE . "navbar.php"; ?>
        </php>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php //require_once INCLUDES_TEMPLATE . "aside.php"; ?>
        </php>

        <!-- Content Wrapper. Contains page content -->
        <section class="h-100 PerfilPrivadoStyle content-wrapper">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="">
                        <div class="card">
                            <div class="rounded-top  d-flex flex-row"
                                style="background-color:#FFEFD5; height:100%; width:100%;">
                                <div class="p-3 ms-4 mt-5 d-flex flex-column" style="width: 30%;">
                                    <img src="https://i.pinimg.com/originals/7c/29/54/7c2954ce5950d12279318734d40f2a91.jpg"
                                        alt="Generic placeholder image"
                                        class="ImgtPerfil img-fluid img-thumbnail mt-4 mb-2" style=" z-index: 1">


                                </div>

                                <div class="ms-3" style="margin-top: 130px;">
                                    <h5 style='color:#FF69B4'>
                                        <?php print_r($d->data[0]->Nombre . " " . $d->data[0]->Apellidos); ?>
                                    </h5>
                                    <p>
                                        <?php print_r($d->data[0]->Nacionalidad); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                <div>
                                    <?php 
                                    //$Id = $d->data[0]->Id_Usuario;
                                    //print_r('<a class="btn btn-outline-dark" href="..\LoveYou/web/cmdDefaultEditarUsuario/' . $Id . ' " role="button"> Editar Perfil </a>'); 
                                    ?>

                                </div>
                                <div class="d-flex justify-content-end text-center py-1">

                                </div>
                            </div>
                            <div class="card-body p-4 text-black">
                                <div class="mb-5">
                                    <p class="lead fw-normal mb-1">Información Personal</p>
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p>
                                        <label for="fname">Nombre:</label>
                                            <?php print_r( "<label id='fname' class='text-secondary'>".$d->data[0]->Nombre . " " . $d->data[0]->Apellidos."</label>"); ?><br>
                                            <label for="Nacionalidad">Nacionalidad:</label>
                                            <?php print_r("<label id='Nacionalidad' class='text-secondary'>".$d->data[0]->Nacionalidad."</label>"); ?><br>
                                            <label for="País">País de Residencia:</label>
                                            <?php print_r( "<label id='País' class='text-secondary'>".$d->data[0]->Pais."</label>"); ?><br>
                                            <label for="Ciudad">Ciudad de Residencia:</label>
                                            <?php print_r("<label id='Ciudad' class='text-secondary'>".$d->data[0]->Ciudad_Residencia . "</label>"); ?><br>
                                            <label for="Edad">Edad:</label>
                                            <?php print_r("<label id='Edad' class='text-secondary'>".$d->data[0]->Edad . "</label>"); ?><br>
                                            <label for="Género">Género:</label>
                                            <?php print_r("<label id='Género' class='text-secondary'>".$d->data[0]->Genero."</label>"); ?><br>
                    
                                        </p>

                                    </div>

                                    <div class="card-body p-4 text-black">
                                        <div class="mb-5">
                                            <p class="lead fw-normal mb-1">Acerca de mi</p>
                                            <div class="p-4" style="background-color:beige;">
                                                <p class="font-italic mb-1">Amante de lo animales</p>
                                                <p class="font-italic mb-1">Me encanta leer</p>
                                                <p class="font-italic mb-0">Me gusta viajar</p>
                                            </div>

                                            <div class="card-body p-4 text-black">
                                                <div class="mb-5">
                                                    <p class="lead fw-normal mb-1">Intereses</p>
                                                    <div class="p-4" style="background-color:antiquewhite;">
                                                        <p class="font-italic mb-1">Encontrar el amor verdadero</p>
                                                        <p class="font-italic mb-1">Divertido</p>
                                                        <p class="font-italic mb-0">Aventurero</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <p class="lead fw-normal mb-0">Recent photos</p>
                                                    <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-2">
                                                        <img class="ImgtPerfil"
                                                            src="https://i.pinimg.com/originals/4a/a7/4f/4aa74ff40723a424c5d2172640c282d2.jpg"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>
                                                    <div class="col mb-2">
                                                        <img class="ImgtPerfil"
                                                            src="https://doramakun.ru/users/7581/PHOTO-GALLERY/Kim-Ok-Bin/Esquire-Korea-2012/Esquire02.jpg"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>
                                                    <div class="col">
                                                        <img class="ImgtPerfil"
                                                            src="https://i.pinimg.com/736x/9a/26/12/9a261254cd328354845073dc61c01359--summer-glau-body-shots.jpg"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col">
                                                        <img class="ImgtPerfil"
                                                            src="https://th.bing.com/th/id/R.4a6ef6d3bd9734fcf0f5c233c3215d61?rik=0HZg356WOQ4AvA&riu=http%3a%2f%2fimages.fanpop.com%2fimages%2fimage_uploads%2fSummer-Glau-summer-glau-637959_1362_1920.jpg&ehk=N%2bgzhKqLNYWXX9aZuimRriGhD0WNhlgGvghlv5KsYqQ%3d&risl=&pid=ImgRaw&r=0"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>
                                                    <div class="col">
                                                        <img class="ImgtPerfil"
                                                            src="https://1.bp.blogspot.com/-KXhH2rrDLV0/TbQUI2Vi3CI/AAAAAAAABF0/bMLMCk68PC4/s1600/Summer-Glau-Patrick-Hoelck-Photoshoot-for-EW-summer-glau-10888771-450-600.jpg"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>
                                                    <div class="col">
                                                        <img class="ImgtPerfil"
                                                            src="https://farm9.static.flickr.com/8110/8545249758_44c2649411_b.jpg"
                                                            alt="image 1" class="w-100 rounded-3">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

            
            
        </section>
        <!-- /.content-wrapper -->
        
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        
    </div>

    <!-- ./wrapper -->
    <?php require_once INCLUDES_TEMPLATE . "scripts.php"; ?>
    </php>

    <!-- Importo el footer -->
    <?php require_once INCLUDES_TEMPLATE . "footer.php"; ?>
            </php>
        

</body>

</html>
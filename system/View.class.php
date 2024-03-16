<?php

class View
{

    public static function render($params = [])
    {
        //print_r($params);
        $d = json_decode(json_encode($params));

        if (!is_dir(VIEWS)) {
            //die("LE directorio de vista no existe :(");
            showError("El directorio de vistas no existe:(", true);
        }
        //Arma el nombre de la vista que llega en el arreglo params ["view"]
        $filename = VIEWS . $params["view"] . "View.php";
        //print_r("prueba params.view " . $params["view"]);
        //print_r(" filename " . $filename . " algo ");
        if (!is_file($filename)) //valida si esxiste al vista
            //die("la Vista no existe :(");
            showError("la Vista no existe :(", true);

        require_once  $filename; //llama la vista
        exit();
    }
}

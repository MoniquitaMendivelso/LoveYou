<?php

class cmdAutenticar
{
    private $default_request_method = "POST";

    public function execute($params)
    {
        
        valid_method($this->default_request_method); 

        extract($_REQUEST);

        //print_r($params);
       
        $u = new usuariosControl();
        if (count($params) > 0)
            $result = $u->autenticar($params[0], $params[1]);
        else
            $result = $u->autenticar($Email, $Password);

        if (is_array($result)) {
            $response = [
                "result" => "success",
                "data" => $result,
                "message" => "Usuario Valido",
                "view" => "perfilPrivado"
            ];
            //require "vista/home.php";   ///<-----------
        }
        if ($result == 0) { //falta datos
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view" => "login"
            ];

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) { // Credenciales no coinciden
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario Invalido o inactivo",
                "view" => "login"
            ];
            // require "vista/login.php"; ///<-----------
        }
        return $response;
    }
}
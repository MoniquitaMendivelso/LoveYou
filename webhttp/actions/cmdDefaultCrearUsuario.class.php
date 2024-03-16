<?php

class cmdDefaultCrearUsuario
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        if (!is_array($params))
        $response = [
            "result" => "fail",
            "data" => "",
            "message" => "Faltan Parametros" 
        ];

        else{

            $id = $params[0];
            extract($_REQUEST);
            //print_r($_REQUEST);
            $u = new usuariosControl();
            $resultUA = $u->buscarUsuario($id);


            $response = [
                "result" => "succes",
                "data" => $resultUA,
                "message" => "",
                "view" => "usuarios/create"

            ];


            return $response;

        }
        //print_r(json_encode($response));
    }
}

<?php

class cmdConsultarUsuarios
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        //print_r($params);
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
            $u = new usuariosControl();
            $resultUA = $u->buscarUsuario($id);
            $listUsuarios = $u->listarUsuarios();
            $result = array_merge($resultUA, $listUsuarios);
            //$result = $listUsuarios;

            if (is_array($resultUA)) { 
                $response = [
                    "result" => "success",
                    "data" => $result ,
                    "message" => "Listado Generado",
                    "view" => "usuarios/gestionUsuarios"

                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan Datos"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Usuario No Encontrado",
                    "view" => "login"


                ];
            }

           
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML
            

        return $response;
    }
}

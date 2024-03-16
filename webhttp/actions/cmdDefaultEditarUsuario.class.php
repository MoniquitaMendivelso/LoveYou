<?php

class cmdDefaultEditarUsuario
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

        else {

            $id = $params[0];
            extract($_REQUEST);
            $u = new usuariosControl();
            $result = $u->buscarUsuario($id);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "",
                    "view" => "usuarios/edit"

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
                    "view" => "usuarios/index"


                ];
            }
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML

            return $response;


        //print_r(json_encode($response));
    }
}

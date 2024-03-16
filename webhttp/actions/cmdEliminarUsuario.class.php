<?php
class cmdEliminarUsuario
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        if (!is_array($params)) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Parametros"
            ];
        } else {

            $id = $params[0];
            extract($_REQUEST);
            $u = new usuariosControl();
            $result = $u->eliminar($id);
            $datos = $u->listarUsuarios();

            switch ($result) {
                case 0:

                    $response = [
                        "result" => "fail",
                        "data" => $datos,
                        "message" => "Faltan Datos",
                        "view" => "usuarios/gestionUsuarios"
                    ];
                    break;
                case 1:
                    $response = [
                        "result" => "fail",
                        "data" => $datos,
                        "message" => "Usuario ya existe con ese Id",
                        "view" => "usuarios/gestionUsuarios"
                    ];
                    break;
                case 2:
                    $response = [
                        "result" => "fail",
                        "data" => $datos,
                        "message" => "Usuario no eliminado",
                        "view" => "usuarios/gestionUsuarios"
                    ];
                    break;
                case 3:
                    $response = [
                        "result" => "success",
                        "data" => $datos,
                        "message" => "Usuario eliminado satisfactoriamente",
                        "view" => "usuarios/gestionUsuarios"
                    ];
                    break;
            }
        }
        return $response;
    }
}

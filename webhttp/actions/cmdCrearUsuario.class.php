<?php
class cmdCrearUsuario
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $id = $params[0];
        $u = new usuariosControl();
        $resultUA = $u->buscarUsuario($id);
        $result = $u->registrar(
            $Nombre,
            $Apellidos,
            $Tipo_Identificacion,
            $Numero_Identificacion,
            $Nacionalidad,
            $Edad,
            $Genero,
            $Telefono,
            $Pais,
            $Ciudad_Residencia,
            $Calle_Principal,
            $Calle_Secundaria,
            $Email,
            $Password,
            $Estado
        );
        //print_r(json_encode($result));
        $listadoUsuarios = $u->listarUsuarios();
        $datos = array_merge($resultUA, $listadoUsuarios);
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
                    "message" => "Usuario ya existe con el mismo email",
                    "view" => "usuarios/gestionUsuarios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no creado",
                    "view" => "usuarios/gestionUsuarios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario Creado satisfactoriamente",
                    "view" => "usuarios/gestionUsuarios"
                ];
                break;
        }
        return $response;
    }
}
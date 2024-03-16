<?php
class cmdRegistrarUsuario
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        print_r($_REQUEST);
        $u = new usuariosControl();
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
        $datos = $u->listarUsuarios();

        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "message" => "Faltan Datos",
                    "view" => "usuarios/register"
                    
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "message" => "Usuario ya existe con el mismo email",
                    "view" => "usuarios/register"
                    
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no creado",
                    "view" => "login"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario Creado satisfactoriamente",
                    "view" => "login"
                ];
                break;
        }
        return $response;
    }
}
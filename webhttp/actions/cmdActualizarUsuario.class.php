<?php
class cmdActualizarUsuario
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificar(
            $Id,
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
        $datos = $u->listarUsuarios();
        switch ($result) {
            case 0:
                if ($Estado > 1){
                    $response = [
                        "result" => "fail",
                        "data" => $datos,
                        "message" => "Faltan Datos 0"//,
                        //"view" => "usuarios/index"
                    ];
                }else{
                    $datos = $u->buscarUsuario($Id);
                    $response = [
                        "result" => "fail",
                        "data" => $datos,
                        "message" => "Faltan Datos 0e"//,
                        //"view" => "perfilPrivado"
                    ];
                }
                
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario No existe con ese ID",
                    "view" => "usuarios/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no actualizado",
                    "view" => "usuarios/index"
                ];
                break;
            case 3:
                if ($Estado > 1){//estado mayor a 1 es un usuario admin
                    $response = [
                        "result" => "success",
                        "data" => $datos,
                        "message" => "Usuario Actualizado satisfactoriamente",
                        "view" => "usuarios/index"// por ser admin lleva a pantalla admin
                    ];
                }else{
                    $datos = $u->buscarUsuario($Id);
                    $response = [
                        "result" => "success",
                        "data" => $datos,
                        "message" => "Usuario Actualizado satisfactoriamente",
                        "view" => "perfilPrivado"
                    ];
                }
                break;
        } //Fin Switch
        return $response;
    }
}
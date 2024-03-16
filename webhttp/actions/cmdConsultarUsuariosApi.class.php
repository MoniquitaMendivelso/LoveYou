<?php

class cmdConsultarUsuariosApi
{
    private $default_request_method = "GET";
    public function execute()
    {
        //print_r($params);
        valid_method($this->default_request_method);

       

            
            extract($_REQUEST);
            $u = new usuariosControl();
           
            $listUsuarios = $u->listarUsuarios();
           
            $result = $listUsuarios;

            if (is_array($result)) { 
                $response = [
                    "result" => "success",
                    "data" => $result ,
                    "message" => "Listado Generado"
                    

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
                    "message" => "Usuario No Encontrado"
                    


                ];
            }

           
        
        
            

        return $response;
    }
}

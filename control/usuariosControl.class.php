<?php

class usuariosControl
{
    var $modelo;

    function __construct()
    {
        $this->modelo = new usuariosModelo();
    }

    public function Autenticar($Email, $Password)
    {
        if (
            !empty($Email) && $Email != "" && $Email != NULL &&
            !empty($Password) && $Password != "" && $Password != NULL
        ) {
            $result = $this->modelo->validarUsuario($Email, md5($Password));
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else {
            return 0;
        }
    }


    public function listarUsuarios()
    {
        return $this->modelo->getAllUsuarios();
    }

    public function buscarUsuario($Id)
    {
        if (!empty($Id) && $Id != "" && $Id != NULL) {
            $result = $this->modelo->getById($Id);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else
            return 0;
    }

    public function registrar(
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
    ) {
        //print_r("conttller  ");
        /*print_r(" " . $Nombre . " " . $Apellidos . " " . $Tipo_Identificacion
            . " " . $Numero_Identificacion . " " . $Nacionalidad . " " . $Edad . " " . $Genero . " " .
            $Telefono . " " . $Pais . " " . $Ciudad_Residencia . " " . $Calle_Principal . " " . $Calle_Secundaria
            . " " . $Email . " " . $Password . " " . $Estado . " ");
            */

        if (
            !empty($Nombre) && $Nombre != "" && $Nombre != NULL &&
            !empty($Apellidos) && $Apellidos != "" && $Apellidos != NULL &&
            !empty($Tipo_Identificacion) && $Tipo_Identificacion != "" && $Tipo_Identificacion != NULL &&
            !empty($Numero_Identificacion) && $Numero_Identificacion != "" && $Numero_Identificacion != NULL &&
            !empty($Nacionalidad) && $Nacionalidad != "" && $Nacionalidad != NULL &&
            !empty($Edad) && $Edad != "" && $Edad != NULL &&
            !empty($Genero) && $Genero != "" && $Genero != NULL &&
            !empty($Telefono) && $Telefono != "" && $Telefono != NULL &&
            !empty($Pais) && $Pais != "" && $Pais != NULL &&
            !empty($Ciudad_Residencia) && $Ciudad_Residencia != "" && $Ciudad_Residencia != NULL &&
            !empty($Calle_Principal) && $Calle_Principal != "" && $Calle_Principal != NULL &&
            !empty($Calle_Secundaria) && $Calle_Secundaria != "" && $Calle_Secundaria != NULL &&
            !empty($Email) && $Email != "" && $Email != NULL &&
            !empty($Password) && $Password != "" && $Password != NULL &&
            $Estado != "" && $Estado != NULL
        ) {
            //print_r($Nombre);
            $result = $this->modelo->getByEmail($Email);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->Insertar(
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
                    md5($Password),
                    $Estado
                );
                if ($result)
                    return 3; // Usuario creado exitosamente
                else
                    return 2; //Usuario no creado

            } else
                return 1; //Usuario ya existe con el mismo email
        } else
            return 0; //Faltan Datos
    }

    public function Modificar(
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
    ) {

        if (
            !empty($Id) && $Id != "" && $Id != NULL &&
            !empty($Nombre) && $Nombre != "" && $Nombre != NULL &&
            !empty($Apellidos) && $Apellidos != "" && $Apellidos != NULL &&
            !empty($Tipo_Identificacion) && $Tipo_Identificacion != "" && $Tipo_Identificacion != NULL &&
            !empty($Numero_Identificacion) && $Numero_Identificacion != "" && $Numero_Identificacion != NULL &&
            !empty($Nacionalidad) && $Nacionalidad != "" && $Nacionalidad != NULL &&
            !empty($Edad) && $Edad != "" && $Edad != NULL &&
            !empty($Genero) && $Genero != "" && $Genero != NULL &&
            !empty($Telefono) && $Telefono != "" && $Telefono != NULL &&
            !empty($Pais) && $Pais != "" && $Pais != NULL &&
            !empty($Ciudad_Residencia) && $Ciudad_Residencia != "" && $Ciudad_Residencia != NULL &&
            !empty($Calle_Principal) && $Calle_Principal != "" && $Calle_Principal != NULL &&
            !empty($Calle_Secundaria) && $Calle_Secundaria != "" && $Calle_Secundaria != NULL &&
            !empty($Email) && $Email != "" && $Email != NULL &&
            $Estado != "" && $Estado != NULL
        ) {
            $result = $this->modelo->getById($Id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->Actualizar(
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
                if ($result)
                    return 3; // Usuario actualizado exitosamente
                else
                    return 2; //Usuario no actualizado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return 0; //Faltan Datos
    }

    public function Eliminar($Id)
    {
        if (
            !empty($Id) && $Id != "" && $Id != NULL
        ) {
            $result = $this->modelo->getById($Id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->Eliminar($Id);
                if ($result)
                    return 3; // Usuario eliminado exitosamente
                else
                    return 2; //Usuario no eliminado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return 0; //Faltan Datos
    }
}
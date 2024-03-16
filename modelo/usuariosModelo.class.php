<?php


class usuariosModelo
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->getConexion();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuario";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($Id)
    {
        $sql = "SELECT * FROM usuario WHERE Id_Usuario = $Id";
        //print_r($sql);
        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validarUsuario($Email, $Password)
    {
        $sql = "SELECT * 
                FROM usuario 
                WHERE Email = '$Email' 
                AND   Password = '$Password'
                AND   Estado > 0";
        //print_r($sql);
        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getByEmail($Email)
    {
        $sql = "SELECT * 
                FROM usuario 
                WHERE Email = '$Email'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function Insertar(
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
        $sql = "INSERT 
                INTO usuario 
                VALUES (null,
                        '$Nombre',
                        '$Apellidos', 
                        '$Tipo_Identificacion',
                        $Numero_Identificacion, 
                        '$Nacionalidad', 
                        $Edad,
                        '$Genero',
                        '$Telefono',
                        '$Pais',
                        '$Ciudad_Residencia',
                        '$Calle_Principal',
                        '$Calle_Secundaria',
                        '$Email',
                        '$Password',
                        $Estado)";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function Actualizar(
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
        $sql = "UPDATE  usuario
                SET Nombre= '$Nombre',
                            Apellidos= '$Apellidos', 
                            Tipo_Identificacion= '$Tipo_Identificacion',
                            Numero_Identificacion= $Numero_Identificacion, 
                            Nacionalidad= '$Nacionalidad', 
                            Edad= $Edad,
                            Genero= '$Genero',
                            Telefono= '$Telefono',
                            Pais= '$Pais',
                            Ciudad_Residencia= '$Ciudad_Residencia',
                            Calle_Principal= '$Calle_Principal',
                            Calle_Secundaria= '$Calle_Secundaria',
                            Email= '$Email',
                            Password = '$Password',
                            Estado = $Estado

                    WHERE   Id_Usuario= $Id";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function ActualizarPassword($Id, $Password)
    {
        $sql = "UPDATE  usuario
                SET Password ='$Password',
                WHERE Id_Usuario = $Id";

        $result = $this->conexion->query($sql);

        return $result;
    }


    public function Eliminar($Id)
    {
        $sql = "DELETE FROM  usuario WHERE Id_Usuario = $Id";

        $result = $this->conexion->query($sql);

        return $result;
    }
}
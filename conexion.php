<?php
    function conexion(){
        $servidor ='localhost';//127.0.0.1 loopback
        $usuario = 'root'; // por defecto tiene root
        $password = ''; // por defecto no tiene password
        $base='webconexion4';
        $puerto =3306;

        $conexion =mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $base,
            $puerto
        );
        return $conexion;
    }

?>
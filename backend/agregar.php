<?php
    include "../conexion.php";
    $conexion = conexion();
    $nombrePais = $_POST ['nombrePais'];
    $continente = $_POST ['continente'];
    $bandera = $_POST ['bandera'];
    $sql = "INSERT INTO t_paises (nombrePais,continente,bandera) VALUES ( '$nombre_pais','$continenete','$bandera')";
    $respuesta = mysqli_query($conexion,$sql);

    if ($respuesta) {
        header ('location:../index.php');
    }else{
        echo "No se pudo insertar";
    }
?>
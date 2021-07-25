<?php
    $idPersonas = $_POST['idPersonas'];             
    $nombre = $_POST['nombre'];
    $apellidopaterno   = $_POST['apellidopaterno'];
    $apellidomaterno = $_POST['apellidomaterno'];
    $fechanacimiento   = $_POST['fechanacimiento'];
    $sexo= $_POST['sexo'];
                          
    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_registros_personas
                SET nombre ='$nombre ', 
                apellidopaterno ='$apellidopaterno ', 
                apellidomaterno ='$apellidomaterno ', 
                fechanacimiento ='$fechanacimiento ', 
                sexo ='$sexo'
            WHERE id_personas = '$idPersonas'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }
?>
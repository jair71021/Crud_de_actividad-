<?php

    $nombre=$_POST['nombre'];
    $apellidopaterno=$_POST['apellidopaterno'];
    $apellidomaterno=$_POST['apellidomaterno'];
    $fechanacimiento=$_POST['fechanacimiento'];
    $sexo=$_POST['sexo'];

    include "conexion.php";
    $conexion=conexion();
    $sql ="INSERT INTO t_registros_personas (nombre,apellidopaterno,
                                            apellidomaterno,fechanacimiento,
                                            sexo) 
                                            VALUES ('$nombre',
                                                    '$apellidopaterno',
                                                    '$apellidomaterno',
                                                    '$fechanacimiento',
                                                    '$sexo') ";
    $respuesta = mysqli_query($conexion, $sql);
    
    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque :(";
    }



?>
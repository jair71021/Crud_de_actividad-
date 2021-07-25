<?php

$idPersona = $_POST['idPersonas'];

include "conexion.php";
$conexion = conexion();

$sql = "DELETE FROM t_registros_personas WHERE id_personas= '$idPersona'";

$respuesta = mysqli_query($conexion, $sql);

if ($respuesta) {
    header("location:../index.php");
} else {
    echo "No se pudo eliminar,";
}
?>
<?php
    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "registropersona";

        $conexion = mysqli_connect($servidor, $usuario, $password, $db);

        return $conexion;
    }
?>
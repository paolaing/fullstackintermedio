<?php
    /*Archivo de conexión a base de datos*/

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "compra_divisas";
    
    $conexion = new mysqli($server, $user, $pass, $db);

    if ($conexion->connect_errno) {
        echo "error de conexion";
        exit();
    } 


?>
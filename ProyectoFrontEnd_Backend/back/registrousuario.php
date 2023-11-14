<?php

    include '../db/conexion.php';
    
    if (isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $identificacion = $_POST['identificacion'];
        $celular = $_POST['celular'];
        $pass = $_POST['pass'];

        $pass_en = base64_encode($pass);

        $validacion = mysqli_query($conexion, "SELECT * FROM usuarios where identificacion = '$identificacion'");
        $cant = mysqli_num_rows($validacion);

        if ($cant == 1) {
            header('location:../registro.php?status=2');
        }else{  
            $sql = mysqli_query($conexion, "INSERT INTO usuarios 
            (nombre, identificacion, correo, celular, password) VALUES
            ('$names', '$identificacion', '$email', '$celular', '$pass')");
            header('location:../registro.php?status=1');
        }
    }
?>
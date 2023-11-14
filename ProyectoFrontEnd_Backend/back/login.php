<?php

include '../db/conexion.php';

if (isset($_POST['ingresar'])) {
    $identificacion = $_POST['identificacion'];
    $pass = $_POST['pass'];
   

    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios where identificacion = '$identificacion' and password = '$pass'");
                            
    $exist = mysqli_num_rows($consulta);

    if ($exist == 1) {
        
       header('location:../ingresar.php?status=1');
       
    } else {
        header('location:../ingresar.php?status=3');
    }
}

?>
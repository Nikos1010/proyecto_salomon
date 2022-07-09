<?php 
    include_once('../coneccion.php');
    if(isset($_REQUEST['nombre']) && isset($_REQUEST['email']) && isset($_REQUEST['telefono'])){
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $telefono = $_REQUEST['telefono'];

        $insert = mysqli_query($con, "INSERT INTO usuario (nombre, email, telefono)
            VALUES('$nombre','$email','$telefono');")
            or die("Problemas en el select ".mysqli_error($con));
        if (isset($insert)) {
            echo "<script>
                location.href='../contacto.php';
                </script>";
        } else {
            echo "<script>
                location.href='../contacto.php';
                alert('Los datos no se guardaron');
                </script>";
        }
    }

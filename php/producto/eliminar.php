<?php
    include_once('../coneccion.php');
    if(isset($_REQUEST['codigo'])) {
        $codigo = $_REQUEST['codigo'];

        $registros = mysqli_query($con, "SELECT * FROM Productos WHERE codigo = '$codigo'");
        if($reg = mysqli_fetch_array($registros)){
            $upda = mysqli_query($con, "DELETE FROM Productos WHERE codigo = '$codigo'")
            or die("Problemas en el select ".mysqli_error($con));
            echo "<script>
            location.href='../producto.php';
            </script>";
        }else{
            echo "<script>
            alert('El registro no pudo ser eliminado');
            location.href='../producto.php';
            </script>";
        }
    }

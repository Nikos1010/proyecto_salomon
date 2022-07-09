<?php
    include_once('../coneccion.php');
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['codigo']) && isset($_REQUEST['imagen']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['precio'])) {
        $codigo = $_REQUEST['codigo'];
        $nombre = $_REQUEST['nombre'];
        $imagen = $_REQUEST['imagen'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];

        $registros = mysqli_query($con, "SELECT * FROM Productos WHERE codigo = '$codigo'");
        if ($reg = mysqli_fetch_array($registros)) {
            $upda = mysqli_query($con, "UPDATE Productos SET nombre='$nombre', img='$imagen', descripcion='$descripcion', precio='$precio' WHERE codigo = '$codigo'")
                or die("Problemas en el select " . mysqli_error($con));
            echo "<script>
                location.href='../producto.php';
                </script>";
        } else {
            echo "<script>
                    location.href='../producto.php';
                    alert('Los datos no se guardaron');
                    </script>";
        }
    }
?>
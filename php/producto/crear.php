<?php 
    include_once('../coneccion.php');
    if(isset($_REQUEST['nombre']) && isset($_REQUEST['imagen']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['precio'])){
        $nombre = $_REQUEST['nombre'];
        $imagen = $_REQUEST['imagen'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];

        $insert = mysqli_query($con, "INSERT INTO productos (nombre, img, descripcion, precio)
            VALUES('$nombre','$imagen','$descripcion','$precio');")
            or die("Problemas en el select ".mysqli_error($con));
        if (isset($insert)) {
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
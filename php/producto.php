<!DOCTYPE html>
<html lang="es">

<?php
include_once('./component/head.php');
include_once('./coneccion.php');
?>

<body>
    <?php include_once('./component/menu.php') ?>


    <main class="contenedor seccion">
        <div class="tabla">
            <table>
                <tr>
                    <th>Codigo</th>
                    <th>Img</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th></th>

                </tr>
                <?php
                $registros = mysqli_query($con, "SELECT * FROM Productos");
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<tr>
                                <td>$reg[codigo]</td>
                                <td><img class='img_p' src='../IMÁGENES/$reg[img].png' alt='$reg[nombre]'></td>
                                <td>$reg[nombre]</td>
                                <td>$reg[precio]</td>
                                <td>
                                    <a class='boton-edit' href='./crear_producto.php?accion=editar&codigo=$reg[codigo]'>Editar</a>
                                    <a class='boton-rojo' href='./producto/eliminar.php?codigo=$reg[codigo]'>Borrar</a>
                                </td>
                            </tr>";
                }
                ?>
            </table>
        </div>
        <div class="tabla">
            <a href="./crear_producto.php?accion=crear" class="boton boton-crear">Crear Producto</a>
        </div>
    </main>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
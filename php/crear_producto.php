<!DOCTYPE html>
<html lang="es">

<?php
include_once('./component/head.php');
include_once('./coneccion.php');
?>

<body>
    <?php
    include_once('./component/menu.php');
    if (isset($_REQUEST['accion'])) {
        if ($_REQUEST['accion'] == 'crear') {
        }
    }
    ?>
    <main class="contenedor seccion imagen-contacto-form">
        <form class="formP" method="POST" action="producto/crear.php">
            <div class="inputt">
                Nombre:
                <br>
                <input class="uno inputP" type="text" name="nombre">
                <br>
                Nombre Imagen:
                <br>
                <input class="dos inputP" type="text" name="imagen">
                <br>
                Descripcion:
                <br>
                <textarea class="tres inputP" cols="30" rows="10" name="descripcion"></textarea>
                <br>
                Precio:
                <br>
                <input class="cuatro inputP" type="number" min="1000" name="precio">
                <br>
                <input class="boton boton-crear" type="submit" value="Crear Producto">
            </div>
        </form>
    </main>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
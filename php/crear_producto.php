<!DOCTYPE html>
<html lang="es">

<?php
include_once('./component/head.php');
include_once('./coneccion.php');
?>

<body>
    <?php
    include_once('./component/menu.php');
    ?>

    <main class="contenedor seccion imagen-contacto-form">
        <?php
        if (isset($_REQUEST['accion'])) {
            $accion = $_REQUEST['accion'];
            if ($accion == 'crear') {
        ?>
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
                <?php } else if ($accion == 'editar') {
                if (isset($_REQUEST['codigo'])) {
                    $registros = mysqli_query($con, "SELECT * FROM Productos WHERE codigo = $_REQUEST[codigo]")
                        or die("Problemas en el select " . mysqli_error($con));
                    if ($reg = mysqli_fetch_array($registros)) {
                ?>
                        <form class="formP" method="POST" action="producto/editar.php">
                            <div class="inputt">
                                Nombre:
                                <br>
                                <input class="uno inputP" type="text" name="nombre" value="<?php echo $reg['nombre'] ?>">
                                <br>
                                Nombre Imagen:
                                <br>
                                <input class="dos inputP" type="text" name="imagen" value="<?php echo $reg['img'] ?>">
                                <br>
                                Descripcion:
                                <br>
                                <textarea class="tres inputP" cols="30" rows="10" name="descripcion"><?php echo $reg['descripcion'] ?></textarea>
                                <br>
                                Precio:
                                <br>
                                <input class="cuatro inputP" type="number" min="1000" name="precio" value="<?php echo $reg['precio'] ?>">
                                <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
                                <br>
                                <input class="boton boton-crear" type="submit" value="Editar Producto">
                            </div>
                        </form>
            <?php
                    }
                }
            }
            ?>
        <?php } ?>
    </main>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
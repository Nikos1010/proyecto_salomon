<!DOCTYPE html>
<html lang="es">
<?php include_once('./component/head.php') ?>

<body>
    <?php include_once('./component/menu.php');
    include_once('./coneccion.php');
    if (isset($_REQUEST['codigo'])) {
        $codigo = $_REQUEST['codigo'];
        $registros = mysqli_query($con, "SELECT * FROM Productos WHERE codigo = '$codigo'");
        if ($reg = mysqli_fetch_array($registros)) {
    ?>
            <main class="contenedor contenido-centrado">
                <h1><?php echo $reg['nombre'] ?></h1>
                <img class="img_single" src="../IMÁGENES/<?php echo $reg['img'] ?>.png" loading="lazy" alt="Shampoo Salomé">
                <div class="resumen-producto">
                    <p class="precio">$<?php echo $reg['precio'] ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="../ICO/libre-de-sal.png" alt="icono sin sal" title="Sin sal">
                        </li>
                        <li>
                            <img src="../ICO/no-toxico.png" alt="no tóxico" title="No tóxico">
                        </li>
                        <li>
                            <img src="../ICO/shampoo.png" alt="Envase" title="Envase">
                        </li>
                    </ul>
                    <p><?php echo $reg['descripcion'] ?>!</p>
                </div>
            </main>
    <?php
        }
    }
    ?>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
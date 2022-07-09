<!DOCTYPE html>
<html lang="es">
<?php include_once('./component/head.php') ?>

<body>
    <?php include_once('./component/menu.php') ?>

    <main class="contenedor seccion">
        <h2>Sala de Belleza Luz</h2>
        <div class="contenedor-anuncio">
            <div class="contenedor-anuncio">
                <?php
                include_once('./coneccion.php');
                $registros = mysqli_query($con, "SELECT * FROM Productos")
                    or die("Problemas en el select " . mysqli_error($con));
                while ($reg = mysqli_fetch_array($registros)) {
                ?>
                        <div class="anuncio">
                            <img class="img_anun" src="../IMÁGENES/<?php echo $reg['img'] ?>.png" alt="Producto">
                            <div class="contenido-anuncio">
                                <h3><?php echo $reg['nombre'] ?></h3>
                                <p><?php echo $reg['descripcion'] ?></p>
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
                                <a href="./single_product.php?codigo=<?php echo $reg['codigo'] ?>" class="boton-amarillo-block">Ver producto</a>
                            </div>
                        </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>


    <?php include_once('./component/footer.php') ?>

</body>

</html>
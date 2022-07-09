<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual:SBL</title>
    <link rel="Icon" href="./ICO/belleza.png" type="png">
    <link rel="stylesheet" href="./CSS/app.css" type="text/css">
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
</head>

<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="Barra">
                <a href="./index.php">
                    <img src="./ICO/logo_small.png" alt="Logo">
                </a>
                <nav class="Navegacion">
                    <a href="./index.php">Inicio</a>
                    <a href="./php/nosotros.php">Nosotros</a>
                    <a href="./php/anuncios.php">Anuncios</a>
                    <a href="./php/producto.php">Productos</a>
                    <a href="./php/contacto.php">Contáctenos</a>
                </nav>
            </div>
            <h1>Venta de productos y servicios de belleza</h1>
        </div>
    </header>



    <main class="contenedor seccion">
        <h2>Sala de Belleza Luz</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="./ICO/seguridad.png" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Nuestra web es confiable por lo que sus datos personales y toda la información que nuestro usuario ingrese estará protegida y solo para uso con el fin de poder hacer contacto y aclarar dudas o inquietudes con nuestros asesores.</p>
            </div>
            <div class="icono">
                <img src="./ICO/dinero.png" alt="Icono de dinero" loading="lazy">
                <h3>Precio</h3>
                <p>Brindamos productos y servicios económicos. Ofrecemos diferentes formas de pago seguras además realizamos reembolso solo en caso de que el producto enviado no haya sido el solicitado para esto debe ponerse en contacto con nuestros asesores.</p>
            </div>
            <div class="icono">
                <img src="./ICO/tiempo.png" alt="Icono de tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Los productos llegarán en un tiempo determinado dependiendo de su ubicación, entregas rápidas a la hora especificada también garantizamos que el producto llegue en buen estado.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Productos en Venta</h2>
        <div class="contenedor-anuncio">
            <?php
            include_once('./php/coneccion.php');
            $registros = mysqli_query($con, "SELECT * FROM Productos")
                or die("Problemas en el select " . mysqli_error($con));
            $count = 1;
            while ($reg = mysqli_fetch_array($registros)) {
                if ($count <= 3) {
            ?>
                    <div class="anuncio">
                        <img class="img_anun" src=" ./IMÁGENES/<?php echo $reg['img'] ?>.png" alt="Producto">
                        <div class="contenido-anuncio">
                            <h3><?php echo $reg['nombre'] ?></h3>
                            <p><?php echo $reg['descripcion'] ?></p>
                            <p class="precio">$<?php echo $reg['precio'] ?></p>
                            <ul class="iconos-caracteristicas">
                                <li>
                                    <img src="./ICO/libre-de-sal.png" alt="icono sin sal" title="Sin sal">
                                </li>
                                <li>
                                    <img src="./ICO/no-toxico.png" alt="no tóxico" title="No tóxico">
                                </li>
                                <li>
                                    <img src="./ICO/shampoo.png" alt="Envase" title="Envase">
                                </li>
                            </ul>
                            <a href="./php/single_product.php?codigo=<?php echo $reg['codigo'] ?>" class="boton-amarillo-block">Ver producto</a>
                        </div>
                    </div>
            <?php
                    $count++;
                } else {
                    break;
                }
            }
            ?>
        </div>
        <div class="ver-todas">
            <a href="./php/anuncios.php" class="boton boton-verde">Ver todos</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra los mejores productos para cabello de la Ciudad</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="./php/contacto.php" class="boton boton-amarillo">Contáctenos</a>
    </section>


    <footer class="Footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="Navegacion">
                <a href="./index.php">Inicio</a>
                <a href="./php/nosotros.php">Nosotros</a>
                <a href="./php/anuncios.php">Anuncios</a>
                <a href="./php/producto.php">Productos</a>
                <a href="./php/contacto.php">Contáctenos</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados &copy;</p>
    </footer>

</body>

</html>
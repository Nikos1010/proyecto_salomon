<!DOCTYPE html>
<html lang="es">

<?php include_once('./component/head.php') ?>

<body>
    <?php include_once('./component/menu.php') ?>

    <main class="contenedor seccion imagen-contacto-form">
        <form class="formP" method="POST" action="contacto/crear.php">
            <div class="inputt">
                Nombre:
                <input class="inputP" type="text" name="nombre">
                <br>
                Correo:
                <input class="inputP" type="text" name="email">
                <br>
                Telefono:
                <input class="inputP" type="text" name="telefono">
                <br>
                <input class="boton boton-crear" type="submit" value="Enviar">
            </div>
        </form>
    </main>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
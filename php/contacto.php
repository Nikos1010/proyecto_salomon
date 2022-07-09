<!DOCTYPE html>
<html lang="es">

<?php include_once('./component/head.php') ?>

<body>
    <?php include_once('./component/menu.php') ?>

    <main class="contenedor seccion imagen-contacto-form">
        <form class="formP" method="POST" action="contacto/crear.php">
            <div class="inputt">
                Nombre:
                <input class="uno inputP" type="text" name="Nom">
                <br>
                Correo:
                <input class="dos inputP" type="text" name="corre">
                <br>
                Telefono:
                <input class="cuatro inputP" type="text" name="examen">
                <br>
                <input class="cinco inputP" type="submit" value="enviar">
            </div>
        </form>
    </main>

    <?php include_once('./component/footer.php') ?>

</body>

</html>
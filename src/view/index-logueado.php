<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css">
    <title>Inicio de Pagina</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<?php

$correo = $_POST['correo'];
$clave = $_POST['clave'];

if ($correo == 'german@ejemplo.com' && $clave == '1234') {

?>

    <body>
        <h1 class="title">Venta de Productos Carnicos, Bienvenid@: <?php echo $correo ?></h1>
        <header class="encabezado">
            <nav>
                <ul class="elements">
                    <li><a href="../view/index.php">Home</a></li>
                    <li><a href="../view/register.php">Register</a></li>
                    <li><a href="../view/login.php">Login</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <div class="banner">
            <img src="../public/img/banner.jpg" alt="" class="img-banner">
        </div>
        <h2 class="subtitle">Productos Disponibles</h2>
        <section class="productos-disponibles">

            <article class="producto">
                <img src="../public/img/carne.jpg" alt="" class="img-producto">
                <p class="title-producto">Carne de res</p>
                <p class="ver-mas"><a href="#">Ver Mas</a></p>
            </article>

            <article class="producto">
                <img src="../public/img/cerdo.png" alt="" class="img-producto">
                <p class="title-producto">Carne de cerdo</p>
                <p class="ver-mas"><a href="#">Ver Mas</a></p>
            </article>

            <article class="producto">
                <img src="../public/img/pollo.jpg" alt="" class="img-producto">
                <p class="title-producto">Pollo</p>
                <p class="ver-mas"><a href="#">Ver Mas</a></p>
            </article>

        </section>

        <h2 class="subtitle">Aliados</h2>
        <section class="aliados">

            <article class="producto">
                <img src="../public/img/angus.jpg" alt="" class="img-producto">
                <p class="title-producto">Angus</p>
                <p class="ver-mas"><a href="#">Mostrar Detalles</a></p>
            </article>

            <article class="producto">
                <img src="../public/img/porkolombia.png" alt="" class="img-producto">
                <p class="title-producto">Porkcolombia</p>
                <p class="ver-mas"><a href="#">Mostrar Detalles</a></p>
            </article>

            <article class="producto">
                <img src="../public/img/macpollo.png" alt="" class="img-producto">
                <p class="title-producto">Macpollo</p>
                <p class="ver-mas"><a href="#">Mostrar Detalles</a></p>
            </article>

        </section>

        <footer>
            <p class="texto-footer">Derechos Reservados. 2022 - 2022 &copy; German Arciniegas, Venta de Productos Carnicos y Asociados</p>
        </footer>
    </body>

<?php
} else {
?>

    <body>
        <h1 style="color: red; font-weight: bold; font-size: 50px; display: flex; justify-content: center; align-items: center; text-align: center;">OOOOOPS!!! NO SE ENCONTRO USUARIO EN LA BASE DE DATOS</h1>
        <div>
            <ion-icon name="alert-circle" class="alert-icon"></ion-icon>
        </div>
    </body>

<?php
}
?>



</html>
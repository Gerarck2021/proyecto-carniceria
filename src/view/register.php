<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="../public/css/styles.css" type="text/css">
</head>

<body>
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

    <h1 class="title">Registro de Usuarios</h1>
    <form action="../view/index.php" method="post" class="registro">
        <label for="documento" class="title-data">Documento:</label>
        <input type="number" name="documento" id="documento" class="data">

        <label for="nombres" class="title-data">Nombres y Apellidos:</label>
        <input type="text" name="nombres" id="nombres" class="data">

        <label for="correo" class="title-data">Correo:</label>
        <input type="email" name="correo" id="correo" class="data">

        <label for="clave" class="title-data">Contraseña:</label>
        <input type="password" name="clave" id="clave" class="data">

        <div class="buttons">
            <input type="submit" value="Enviar" class="button">
            <input type="reset" value="Limpiar" class="button">
        </div>
    </form>

    <footer>
        <p class="texto-footer">Derechos Reservados. 2022 - 2022 &copy; German Arciniegas, Venta de Productos Carnicos y Asociados</p>
    </footer>
</body>

</html>
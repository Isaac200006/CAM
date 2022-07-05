<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://kit.fontawesome.com/3baea3c6d3.js"></script>
    <link rel="stylesheet" href="css/EstiloFormulario.css">
    <link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Crear cuenta</title>
</head>

<body>
    <form id="formulario" method="post">
        <h1>Crear cuenta</h1>
        <div class="grupo">
            <input type="text" name="realname" required placeholder="Nombre">
            <i class="fas fa-user"></i>
        </div>
        <div class="grupo">
            <input type="text" name="nick" required placeholder="Correo">
            <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="grupo">
            <input type="password" name="pass" required placeholder="Contraseña">
            <i class="fas fa-lock"></i>
        </div>
        <div class="grupo">
            <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit" name="submit">Crear cuenta</button>

        <div class="IniciarSesion">
            <a href="IniciarSesion.php">Inicia tu sesion</a>
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        require("database/registro.php");
    }
    ?>
</body>

</html>
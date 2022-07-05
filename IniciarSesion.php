<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://kit.fontawesome.com/3baea3c6d3.js"></script>
    <link rel="stylesheet" href="css/EstiloFormulario.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Iniciar sesión</title>
    <link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon">
</head>

<body>
    <form id="formulario" action="database/validar.php" method="post">
        <h1>Iniciar sesión</h1>
        <div class="grupo">
            <input type="text" name="mail" required placeholder="Correo">
            <i class="fas fa-envelope-open-text"></i>
        </div>
        <div class="grupo">
            <input type="password" name="pass" required placeholder="Contraseña">
            <i class="fas fa-lock"></i>
        </div>
        <button type="submit">Iniciar</button>
        <h4 style="text-align: center;">¿No tienes un usuario?</h4>
        <div class="crear-usuario">
            <a href="CrearCuenta.php" style="display: block;">Crea tu usuario<i class="fas fa.angle-double-right"></i></a>
        </div>
    </form>

</body>

</html>
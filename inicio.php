<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:IniciarSesion.php");
} elseif ($_SESSION['rol'] == 1) {
    header("Location:admin.php");
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conservadores ambientales</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon">
    <!--FONT OSWALD-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="Contenido">
        <nav class="nav-main">
            <img src="img/logonavegacion.png" alt="Logo ambiental" class="nav-brand">


            <ul class="nav-menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="#">Reportes</a></li>
                <li><a href="#">Configuracion</a></li>
                <li><a href="#">Ayuda</a></li>
                <li><a href="#">Opciones</a></li>
                <li><a href="database/desconectar.php">Cerrar</a></li>
                <li><a href="#">
                        <i class="fas fa-search"></i>
                    </a></li>
            </ul>
        </nav>
        <hr>
        <!--SHOCASE-->
        <header class="showcase-inicio">
            <img src="img/inicio.jpg" alt="" width="650" height="350">
            <h2>Bienvenidos a CAM</h2>
            <p>Somos una entidad sin animo de lucro que lo que busca dar soluciones
                a los problemas de contaminacion que se ven presentes en playas. Nos enfocamos mas que todo
                en ayudar a estos sectores con campañas de limpiezas, donde tu como
                ciudadano puedes participar.</p>
            <div>
                <ul class="">

                    <h3 style="color: red;">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong></h3>
                </ul>
            </div>
        </header>

        <section class="social">
            <p>Siguenos CAM</p>
            <div class="links">
                <a href="#"><i class="fab fa-facebook-f">

                    </i></a>
                <a href="#"><i class="fab fa-twitter">

                    </i></a>

                <a href="#"><i class="fab fa-instagram">

                    </i></a>
            </div>
        </section>

</body>
<footer class="footer1">
    <h4>CAM Copyright</h4>
</footer>

</html>
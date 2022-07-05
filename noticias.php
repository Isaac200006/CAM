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
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="#">Noticias</a></li>
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
        <header class="showcase">
            <h2>Contaminacion ambiental en playas</h2>
            <p>Entre las acciones humanas más dañinas para las playas y océanos,
                encontramos los vertimientos de aguas residuales y el uso de materiales
                no biodegradables, o cuyo tiempo de degradación es muy largo, como el
                plástico. Esto sucede al poner condiciones sanitarias, de practicidad
                o comodidad por encima de la protección del medio ambiente..</p>
        </header>
        <!--Noticias-->
        <div class="noticias">
            <div>
                <img src="img/1.jpeg" alt="">
                <h3>Basuras en la orilla de la playa.</h3>
                <p>El vertimiento de basura que podemos encontrar en la orilla de las playas, ya es algo
                    innevitable debido a la falta de cultura que pueden tener muchas
                    personas.</p>
                <a href="https://www.ecologiaverde.com/contaminacion-de-las-playas-causas-y-consecuencias-2310.html">Leer más <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/2.jpeg" alt="">
                <h3> Aguas negras en playa de Acapulco.</h3>
                <p>Acapulco, Gro. La Secretaría del Medio Ambiente y Recursos Naturales (Semaren) estatal,
                    informó que solicitará de manera oficial una investigación por el vertimiento de aguas
                    negras ocurrido el pasado jueves en playa Icacos, en la bahía de Acapulco, a la Procuraduría
                    Federal de Protección al Ambiente (Profepa) y la Comisión Nacional del Agua (Conagua),
                    con el objetivo de deslindar responsabilidades..</p>
                <a href="https://www.jornada.com.mx/ultimas/estados/2020/06/26/pediran-investigacion-por-aguas-negras-en-playa-de-acapulco-7469.html">Leer más <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/3.jpg" alt="">
                <h3>Contaminacion en salgar.</h3>
                <p>En las playas de Salgar se observaron concentraciones de enterococos fecales,
                    los cuales indicaron que existió un riesgo entre 5 y 10% de contraer enfermedades
                    gastrointestinales y entre 1,9 y 3,9% de contraer enfermedad respiratoria febril aguda.</p>
                <a href="https://www.elheraldo.co/atlantico/playas-en-el-atlantico-presentan-niveles-de-contaminacion-700282">Leer más <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/4.jpeg" alt="">
                <h3>Daños y perjuicios que generas los platicos al medio ambiente.</h3>
                <p>Las bolsas de plástico provienen de la misma fuente que todos los plásticos:
                    petróleo crudo. Como todo lo demás fabricado a partir de este recurso no renovable,
                    tiene dos grandes inconvenientes; fabricarlo emite cantidades considerables de contaminación
                    y el producto no es biodegradable. En otras palabras, es difícil de producir y casi imposible
                    deshacerse de él una vez producido.</p>
                <a href="https://sersaludable.org/cuanto-dano-generan-las-bolsas-de-plastico-al-medio-ambiente/#:~:text=Las%20bolsas%20de%20pl%C3%A1stico%20representan%20un%20grave%20peligro,y%20obstrucciones%20en%20los%20drenajes%20de%20aguas%20pluviales.">Leer más <i class="fas fa.angle-double-right"></i></a>
            </div>
        </div>
        <section class="noticia-banner">
            <div class="content">
                <h2>¿Que es contaminacion?</h2>
                <p>La contaminación ambiental o polución es la introducción
                    de sustancias u otros elementos físicos en un medio,
                    que provocan que este sea inseguro o no apto para su uso.
                    ​ El medio ambiente puede ser un ecosistema, un medio físico o un ser vivo.
                    El contaminante puede ser una sustancia química o energía
                    (como sonido, calor, luz o radiactividad). Es siempre una alteración
                    negativa del estado natural del medio ambiente y, por lo general, se
                    produce como consecuencia de la actividad humana considerándose una
                    forma de impacto ambiental.</p>
            </div>
        </section>
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
    </div>
    <div class="footer-links">
        <footer class="footer">
            <h4>CAM Copyright</h4>
        </footer>
</body>

</html>
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
            <p>Entre las acciones humanas m??s da??inas para las playas y oc??anos,
                encontramos los vertimientos de aguas residuales y el uso de materiales
                no biodegradables, o cuyo tiempo de degradaci??n es muy largo, como el
                pl??stico. Esto sucede al poner condiciones sanitarias, de practicidad
                o comodidad por encima de la protecci??n del medio ambiente..</p>
        </header>
        <!--Noticias-->
        <div class="noticias">
            <div>
                <img src="img/1.jpeg" alt="">
                <h3>Basuras en la orilla de la playa.</h3>
                <p>El vertimiento de basura que podemos encontrar en la orilla de las playas, ya es algo
                    innevitable debido a la falta de cultura que pueden tener muchas
                    personas.</p>
                <a href="https://www.ecologiaverde.com/contaminacion-de-las-playas-causas-y-consecuencias-2310.html">Leer m??s <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/2.jpeg" alt="">
                <h3> Aguas negras en playa de Acapulco.</h3>
                <p>Acapulco, Gro. La Secretar??a del Medio Ambiente y Recursos Naturales (Semaren) estatal,
                    inform?? que solicitar?? de manera oficial una investigaci??n por el vertimiento de aguas
                    negras ocurrido el pasado jueves en playa Icacos, en la bah??a de Acapulco, a la Procuradur??a
                    Federal de Protecci??n al Ambiente (Profepa) y la Comisi??n Nacional del Agua (Conagua),
                    con el objetivo de deslindar responsabilidades..</p>
                <a href="https://www.jornada.com.mx/ultimas/estados/2020/06/26/pediran-investigacion-por-aguas-negras-en-playa-de-acapulco-7469.html">Leer m??s <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/3.jpg" alt="">
                <h3>Contaminacion en salgar.</h3>
                <p>En las playas de Salgar se observaron concentraciones de enterococos fecales,
                    los cuales indicaron que existi?? un riesgo entre 5 y 10% de contraer enfermedades
                    gastrointestinales y entre 1,9 y 3,9% de contraer enfermedad respiratoria febril aguda.</p>
                <a href="https://www.elheraldo.co/atlantico/playas-en-el-atlantico-presentan-niveles-de-contaminacion-700282">Leer m??s <i class="fas fa.angle-double-right"></i></a>
            </div>
            <div>
                <img src="img/4.jpeg" alt="">
                <h3>Da??os y perjuicios que generas los platicos al medio ambiente.</h3>
                <p>Las bolsas de pl??stico provienen de la misma fuente que todos los pl??sticos:
                    petr??leo crudo. Como todo lo dem??s fabricado a partir de este recurso no renovable,
                    tiene dos grandes inconvenientes; fabricarlo emite cantidades considerables de contaminaci??n
                    y el producto no es biodegradable. En otras palabras, es dif??cil de producir y casi imposible
                    deshacerse de ??l una vez producido.</p>
                <a href="https://sersaludable.org/cuanto-dano-generan-las-bolsas-de-plastico-al-medio-ambiente/#:~:text=Las%20bolsas%20de%20pl%C3%A1stico%20representan%20un%20grave%20peligro,y%20obstrucciones%20en%20los%20drenajes%20de%20aguas%20pluviales.">Leer m??s <i class="fas fa.angle-double-right"></i></a>
            </div>
        </div>
        <section class="noticia-banner">
            <div class="content">
                <h2>??Que es contaminacion?</h2>
                <p>La contaminaci??n ambiental o poluci??n es la introducci??n
                    de sustancias u otros elementos f??sicos en un medio,
                    que provocan que este sea inseguro o no apto para su uso.
                    ??? El medio ambiente puede ser un ecosistema, un medio f??sico o un ser vivo.
                    El contaminante puede ser una sustancia qu??mica o energ??a
                    (como sonido, calor, luz o radiactividad). Es siempre una alteraci??n
                    negativa del estado natural del medio ambiente y, por lo general, se
                    produce como consecuencia de la actividad humana consider??ndose una
                    forma de impacto ambiental.</p>
            </div>
        </section>
        <section class="social">
            <p>Siguenos CAM</p>
            <div class="links">
                <a href="#"><i class="fab fa-facebook-f"> </i></a>
                <a href="#"><i class="fab fa-twitter"> </i></a>
                <a href="#"><i class="fab fa-instagram"> </i></a>
            </div>
        </section>
    </div>
    <div class="footer-links">
        <footer class="footer">
            <h4>CAM Copyright</h4>
        </footer>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="=width=device-width, initial-scale=1">
        <title>Ecommerce</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,900;1,500;1,800&family=Space+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--Header Section-->
        <header>
            <a href="#" class="logo"><img src="logo.jpg"></a>
            <ul class="navbar">
                
                <li><a href="listado_alumno.php"class="active" >ALUMNOS</a></li>
                <li><a href="escuela1_gral.html" >INICIO</a></li>
                <li><a href="listado_curso.php">CURSOS</a></li>
            </ul>
            <div class="icons">
                <a href="#"><i class="ri-search-line"></i></a>
                <a href="#"><i class="ri-user-line"></i></a>
                <a href="#"><i class="ri-shopping-cart-fill"></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
<body>
<section>
<div class="feature-content">
    <div class="row row3">
        <div class="main-row">
            <div class="row-text">
    <h1>RESULTADO DE LA BUSQUEDA</H1>
    <?php
            include("class/clase_calificaciones.php");
            $obj_calificaciones=new calificaciones("","","","","","","","","","","","","");
            $obj_calificaciones->listar_calificaciones();
            ?>
            </div> 
            <BR>
            <a href="listado_alumno.php" class="btn">PARA AGREGAR/MODIFICAR CALIFICACIONES</a>          
            <BR>
            <a href="buscar_alumno.php" class="btn">VOLVER</a> 
 </div>
        </div>
    </div>
</div>   
 <!--contact Section-->
 <section class="contact">
        <div class="main-contact">
            <div class="contact-content">
                <h5>Comienza ahora</h5>
                <li><a href="#">Últimas notas</a></li>
                <li><a href="#">Guía actualizada</a></li>
                <li><a href="#">Soporte</a></li>
                <li><a href="#">Modo Oscuro</a></li>
            </div>

            <div class="contact-content">
                <h5>Explora</h5>
                <li><a href="#">Prototipo</a></li>
                <li><a href="#">Diseño de Sistemas</a></li>
                <li><a href="#">Precios</a></li>
                <li><a href="#">Seguridad</a></li>
            </div>

            <div class="contact-content">
                <h5>Recursos</h5>
                <li><a href="#">Mejores Prácticas</a></li>
                <li><a href="#">Soporte</a></li>
                <li><a href="#">Desarrolladores</a></li>
                <li><a href="#">Aprende diseño</a></li>
            </div>

            <div class="contact-content">
                <h5>Comunidad</h5>
                <li><a href="#">Foros</a></li>
                <li><a href="#">Código de Conducta</a></li>
                <li><a href="#">Contribución</a></li>
                <li><a href="#">API de Referencia</a></li>
            </div>
        </div>
</section>
    <!--Copyright, se modifica nombre-->
    <div class="end-text">
        <p>© 2024 All Rights Reserved by Miguel Castillo</p>
    </div>

    <!--ScrollReveal Script-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--JS Link-->
    <script type="text/javascript" src="./js/script.js"></script>   
</body>
</html>
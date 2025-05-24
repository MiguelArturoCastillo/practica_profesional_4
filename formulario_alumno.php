<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="=width=device-width, initial-scale=1">
    <title>AULA</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,900;1,500;1,800&family=Space+Mono&display=swap"
        rel="stylesheet">
    <title>SISTEMA ESCUELA</title>
    <a href="#" class="logo"><img src="logo.jpg"></a>
            <ul class="navbar">
                <li><a href="listado_curso.php" class="active">CURSOS</a></li>
                <li><a href="escuela1_gral.html" >INICIO</a></li>
                <li><a href="listado_alumno.php">ALUMNOS</a></li>                
            </ul> 
</HEAD>
<body>
<section>
<div class="feature-content">
    <div class="row row3">
        <div class="main-row">
        <h1>FORMULARO ALUMNO</H1>
        </DIV>
        <form method="POST" action="procesa_alumno.php">
        Apellido: <input type="text" name="txt_apellido">
        <br><br>
        Nombre: <input type="text" name="txt_nombre">
        <br><br>
        Fecha nacimiento: <input type="text" name="txt_fecha">
        <br><br>
        teléfono padre: <input type="text" name="txt_celu">
        <br><br>
        <select name="lst_tete1">
        GUIA DE ID ESCUELA: 
        <option value="escuela guardiola">escuela guardiola </option>
        <option value="escuela beltran">escuela beltran </option>
        <option value="escuela boero">escuela boero </option>
        <option value="escuela cecilia avila">escuela cecilia avila</option>
        <option value="nuevo cuyo">nuevo cuyo </option>
        <option value="escuela 25 de mayo">escuela 25 de mayo </option>
        </select>
        <br>
        <br>
        SELECCIONE UN ID ESCUELA Y COLOQUE EN EL CASILLERO: <!--<input type="number" name="txt_escuela">-->
        <br>
        <br>
        <select name="lst_tete2">
        GUIA DE ID CURSO: 
        <option  value="3 ero 1 era">3 ero 1 era</option>
        <option  value="3 ero 2 da">3 ero 2 da </option>
        <option  value="4 to 2 da">4 to 2 da </option>
        <option  value="6 to 2 da">6 to 2 da </option>
        <option  value="2 do 9 na">2 do 9 na </option>
        </select>
        <br>
        <br>
        SELECCIONE UN ID CURSO Y COLOQUE EN EL CASILLERO: <!--<input type="number" name="txt_curso">-->
        <br>
        <br>
        Materia:
        <select name="lst_mat01">
            <option value="FISICA"> FISICA </option>
            <option value="QUIMICA"> QUIMICA </option>
            <option value="BROMATOLOGIA"> BROMATOLOGIA </option>
        </select> 
        <br>
        <br>
        <input type="submit" class="btn" value="Guardar">
        <br>
        <br>
        <a href="listado_alumno.php" class="btn">VOLVER</a>
        </form>  
    </div>
<DIV>
        <BR>
</DIV>
</SECTION>
<SECTION>
   
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
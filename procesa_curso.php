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
            <br>
        <select>
        GUIA DE ID CURSO: 
        <option  value="3 ero 1 era">3 ero 1 era </option>
        <option  value="3 ero 2 da">3 ero 2 da </option>
        <option  value="4 to 2 da">03_ 4 to 2 da </option>
        <option  value="6 to 2 da">04_ 6 to 2 da </option>
        <option  value="2 do 9 na">05_ 2 do 9 na </option>
        </select>
        <br>
        <br>
<?php
 include("class/clase_curso.php");
 $nom_cu=$_REQUEST['lst_tio1'];
 $tur=$_REQUEST['lst_turno'];
 $ciclo=$_REQUEST['lts_ciclo']
 $obj_curso=new curso($nom_cu,$tur,$ciclo);
 echo "<h3>MOSTRANDO OBJETO CURSO CREADO:</h3>";
 echo "ID CURSO SELECCIONADO: ";
 echo $obj_curso->nombre_curso;
 echo "<br>";
 echo "TURNO: ";
 echo $obj_curso->turno;
 echo "<br>";
 echo "CICLO ESCOLAR: ";
 echo $obj_curso->ciclo;
 echo "<br>";
  
 $obj_curso->guardar();
 echo "<br>Curso guardado en la Base de Datos";
?>
<br>
<br>
<hr>
<br>
<br>
<a href="listado_curso.php"class="btn" >VOLVER</a>
            </div>
        </div>
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
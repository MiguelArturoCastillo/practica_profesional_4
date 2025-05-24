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
<?php
 include("class/clase_alumno.php");
 $ape=$_REQUEST['txt_apellido'];
 $nom=$_REQUEST['txt_nombre'];
 $fec=$_REQUEST['txt_fecha'];
 $tel=$_REQUEST['txt_celu'];
 $es=$_REQUEST['lst_tete1'];
 $nom_cu=$_REQUEST['lst_tete2'];
 $mat=$_REQUEST['lst_mat01'];
 $obj_alumno=new alumno($ape,$nom,$fec,$tel,$es,$nom_cu,$mat);
 echo "<h3>MOSTRANDO OBJETO ALUMNO CREADO:</h3>";
 echo "APELLIDO: ";
 echo $obj_alumno->apellido;
 echo "<br>";
 echo "NOMBRE: ";
 echo $obj_alumno->nombre;
 echo "<br>";
 echo "FECHA NACIMIENTO: ";
 echo $obj_alumno->fecha_nacimiento;
 echo "<br>";
 echo "TELEFONO PADRE: ";
 echo $obj_alumno->telefonopadre;
 echo "<br>";
 echo "ESCUELA: ";
 echo $obj_alumno->escuela;
 echo "<br>";
 echo "CURSO: ";
 echo $obj_alumno->nombre_curso;
 echo "<br>";
 echo "MATERIA: ";
 echo $obj_alumno->nombre_materia;
 echo "<br>";
 
 $obj_alumno->guardar();
 echo "<br>Alumno guardado en la Base de Datos";
?>
<br>
<br>
<a href="listado_alumno.php"class="btn">VOLVER</a>
</div>
        </div>
    </div>
</div>     

</div>
        </div>
            <div class="row-img">
            <img src="boero.jpg">
            </div>
    </div>
</div>
</SECTION>
<!--Feacture Section, escuela guardiola-->
<section class="feacture">

<div class="feature-content">

    <div class="row row3">
        <div class="main-row">
            <div>
                <h3>Escuela Guardiola</h3>
                <a href="formulario_alumno.html" class="btn">OPRIMA PARA INGRESAR DATOS </a>
            </div>
        </div>
    </div>
</div>  
</body>
</html>
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
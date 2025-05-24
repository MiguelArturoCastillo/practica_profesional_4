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
                <li><a href="formulario_docente.php" class="active">DOCENTES</a></li>
                <li><a href="listado_alumno.php" >ALUMNOS</a></li>
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
    <H1>PLANILLA ESCOLAR DE LA MATERIA</H1>
    <?php
    include("class/clase_planilla.php");
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $nombre_curso=$_REQUEST['nombre_curso'];
    $nombre_materia=$_REQUEST['nombre_materia'];
    /*$obj_libreta=new planilla("","","","","","","","","","","","","","","","");
    $obj_libreta->edicion_planilla($id);*/
    ?>
<br>
<br>
<?php

$mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
$cadena="SELECT a.idalumno, a.nombre, a.apellido, a.nombre_curso, a.nombre_materia, c.nota1_1, c.nota1_2, c.nota1_3, c.promedio_pri_cuatri_1, c.recuperacion_1, c.promedio_pri_cuatri_2, c.nota2_1, c.nota2_2, c.nota2_3, c.promedio_seg_cuatri_1, c.recuperacion_2, c.promedio_seg_cuatri_2  FROM alumnos a INNER JOIN calificaciones c ON a.idalumno=c.idalumno WHERE a.idalumno='$id'";
$registros=$mysql->query($cadena) or die($mysql->error);
echo "<table border=1>";
    /*echo"<td>Materias</td>";*/
    echo"<td>idalumno</td>";
    echo"<td>Nombre</td>";
    echo"<td>Apellido</td>";
    echo"<td>Curso</td>";
    echo"<td>Materia</td>";
    echo"<td>n1</td>";
    echo"<td>n2</td>";
    echo"<td>n3</td>";
    echo"<td>prom.1</td>";
    echo"<td>recup.1</td>";
    echo"<td>Prom.2</td>";
    echo"<td>n1</td>";
    echo"<td>n2</td>";
    echo"<td>n3</td>";
    echo"<td>Prom.1</td>";
    echo"<td>recup.2</td>";
    echo"<td>Prom.2</td>";   
while ($reg = $registros->fetch_array()) {
    echo "<tr>";
    /*echo "<td>".$reg['nombre_materia']."</td>";*/
    echo "<td>".$reg['idalumno']."</td>";
    echo "<td>".$reg['nombre']."</td>";
    echo "<td>".$reg['apellido']."</td>";
    echo "<td>".$reg['nombre_curso']."</td>";
    echo "<td>".$reg['nombre_materia']."</td>"; 
    echo "<td>".$reg['nota1_1']."</td>";
    echo "<td>".$reg['nota1_2']."</td>";
    echo "<td>".$reg['nota1_3']."</td>"; 
    echo "<td>".$reg['promedio_pri_cuatri_1']."</td>";
    echo "<td>".$reg['recuperacion_1']."</td>";
    echo "<td>".$reg['promedio_pri_cuatri_2']."</td>";
    echo "<td>".$reg['nota2_1']."</td>";
    echo "<td>".$reg['nota2_2']."</td>";
    echo "<td>".$reg['nota2_3']."</td>"; 
    echo "<td>".$reg['promedio_seg_cuatri_1']."</td>";
    echo "<td>".$reg['recuperacion_2']."</td>";
    echo "<td>".$reg['promedio_seg_cuatri_2']."</td>";       
    echo "</tr>";   
    }
    echo "</table>";
    $mysql->close();

    /*$id=$_REQUEST['id'];*/
    ?>
    <BR>
    <h1>REALIZAR EDICION DE DATOS</h1>
<form action="procesa_actualizar.php" method="POST">
    <input type="hidden" name="txt_idalumno" value="<?php echo $id;?>">
    NOMBRE:<input type="text" name="txt_nombre" value="<?php echo $nombre;?>">
    APELLIDO:<input type="text" name="txt_apellido" value="<?php echo $apellido;?>">
    <br>
    CURSO:<input type="text" name="txt_curso" value="<?php echo $nombre_curso;?>">
    MATERIA:<input type="text" name="txt_materia" value="<?php echo $nombre_materia;?>">
<br>
<br>
<br>
<input type="submit" value="GUARDAR CAMBIOS"class="btn" >
</form>
    <br>   
    <a href="listado_materia.php" class="btn">VOLVER AL REGISTRO DE MATERIA</a>
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
</div> 
</body>
</html>
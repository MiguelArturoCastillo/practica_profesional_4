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
                <li><a href="listado_alumno.php" class="active">ALUMNOS</a></li>
                <li><a href="listado_curso.php" >CURSOS</a></li>
                <li><a href="escuela1_gral.html" >INICIO</a></li>
                >                
            </ul> 
</HEAD>
<body>
<section>
<div class="feature-content">
    <div class="row row3">
        <div class="main-row">
            <div class="row-text">
    <?php
    $id=$_REQUEST['id'];
    ?>
    <h1>REGISTRAR CALIFICACIONES</h1>
<form action="procesa_registrar.php" method="POST">
    IDalumno:<input type="number" name="txt_idalumno" value="<?php echo $id;?>">
    <!--Materia:<select name="lst_curr">
            <option value="FISICA"> FISICA </option>
            <option value="QUIMICA"> QUIMICA </option>
            <option value="BROMATOLOGIA"> BROMATOLOGIA </option>
            </select>-->
<br>
<!--IDMateria:<input type="number" name="lst_curr">-->
<br>
CALIFICACION 1_1:<input type="number" name="txt_calificacion1_1">
<br>
<br>
CALIFICACION 1_2:<input type="number" name="txt_calificacion1_2">
<br>
<br>
CALIFICACION 1_3:<input type="number" name="txt_calificacion1_3">
<br><br>
RECUPERACION 1:<input type="number" name="txt_recuperacion1">
<br><br>
<!--PROMEDIO RECUPERACION 1:<input type="number" name="txt_pri_cuatri_2">
<br>
<br>-->
CALIFICACION 2_1:<input type="number" name="txt_calificacion2_1">
<br>
<br>
CALIFICACION 2_2:<input type="number" name="txt_calificacion2_2">
<br>
<br>
CALIFICACION 2_3:<input type="number" name="txt_calificacion2_3">
<br><br>
RECUPERACION 2:<input type="number" name="txt_recuperacion2">
<br><br>
<!--<br><br>
PROMEDIO RECUPERACION 2:<input type="number" name="txt_seg_cuatri_2">
-->
<br>
<br>
<input type="submit" value="GUARDAR"class="btn" >
</form>
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

</body>
</html>
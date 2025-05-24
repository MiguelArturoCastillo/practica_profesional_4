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
                <li><a href="escuela1_gral.html" class="active">INICIO</a></li>
                <li><a href="listado_materia.php">MATERIAS</a></li>
                <li><a href="listado_alumnos.php">ALUMNOS</a></li>
                <li><a href="listado_curso.php">CURSOS</a></li>
            </ul> 
</HEAD>
<body>
</section>
<div class="feature-content">
    <div class="row row3">
        <div class="main-row">
            <div class="row-text">
<?php
include("class/clase_materia.php");
    $id=$_REQUEST['id'];
    $obj_materia=new materia("","");
    $obj_materia->eliminar($id);
?>
<br>
<a href="listado_materia.php">VOLVER AL REGISTRO DE MATERIAS</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$n1=$_REQUEST['txt_calificacion1_1'];
$n2=$_REQUEST['txt_calificacion1_2'];
$n3=$_REQUEST['txt_calificacion1_3'];
$re_1=$_REQUEST['txt_recuperacion1'];
$prom_1=($n1+$n2+$n3)/3;

$prom_1_1="";
if ($prom_1>=6)
{
    $prom_1_1=$prom_1;
}
else
{
    $prom_1_1="AD";
}
echo "EL RESULTADO OBTENIDO EN PROMEDIO FINAL DEL PRIMER CUATRIMESTRE/TRIMESTRE ES: ".$prom_1_1;
echo "<br>";
$n1_=$_REQUEST['txt_calificacion2_1'];
$n2_=$_REQUEST['txt_calificacion2_2'];
$n3_=$_REQUEST['txt_calificacion2_3'];
$re_2=$_REQUEST['txt_recuperacion2'];
$prom_2=($n1_+$n2_+$n3_)/3;

$prom_1_2="";
if ($prom_2>=6)
{
    $prom_1_2=$prom_2;
}
else
{
    $prom_1_2="AD";
}
echo "EL RESULTADO OBTENIDO EN PROMEDIO FINAL DEL SEGUNDO CUATRIMESTRE/TRIMESTRE ES: ".$prom_1_2;
echo "<br>";


 $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
 if ($mysql->connect_error)
 die('Problemas con la conexion a la base de datos');

 $cadena='insert into calificaciones(idcalificacion,idalumno,nota1_1,nota1_2,nota1_3,promedio_pri_cuatri_1,recuperacion_1,promedio_pri_cuatri_2,nota2_1,nota2_2,nota2_3,promedio_seg_cuatri_1,recuperacion_2,promedio_seg_cuatri_2) values (null,"'.$_REQUEST['txt_idalumno'].'","'.$_REQUEST['txt_calificacion1_1'].'","'.$_REQUEST['txt_calificacion1_2'].'","'.$_REQUEST['txt_calificacion1_3'].'","'.$prom_1.'","'.$re_1.'","'.$prom_1_1.'","'.$_REQUEST['txt_calificacion2_1'].'","'.$_REQUEST['txt_calificacion2_2'].'","'.$_REQUEST['txt_calificacion2_3'].'","'.$prom_2.'","'.$re_2.'","'.$prom_1_2.'")';

 $mysql->query($cadena) or die($mysql->error);

 $mysql->close();
?>
<h3>LAS CALIFICACIONES SE GUARDARON EXITOSAMENTE</H3>
<br>
<a href="listado_alumno.php">VOLVER AL REGISTRO DE ALUMNOS</a>

</body>
</html>
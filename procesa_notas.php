<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre=$_REQUEST["txt_nombre"];
    $n1=$_REQUEST["txt_nota1"];
    $n2=$_REQUEST["txt_nota2"];
    $n3=$_REQUEST["txt_nota3"];
    $materia=$_REQUEST["lst_materia"];
    $promedio=($n1+$n2+$n3)/3;
    echo "El Alumno: ".$nombre;
    echo "<br>";
    echo "<h3>Tiene promedio:<h3> ".$promedio;
    echo "<br> Estado en la materia:".$materia;
    if($promedio>=6)
    {
        echo "<br> El alumno est&aacute; aprobado";
    }
    else{
        echo "<br> El alumno  no est&aacute; aprobado";
    }

    ?>
    <table border="1">
        <tr><td>MATERIA</TD><TD>NOTA 1</TD><TD>NOTA 2</TD><TD>NOTA 3</TD></TR>
        <tr><td>&nbsp;</TD><TD>&nbsp;</TD><TD>&nbsp;</TD><TD>&nbsp;</TD></TR>
</body>
</html>
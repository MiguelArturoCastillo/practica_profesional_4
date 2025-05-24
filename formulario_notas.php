<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="procesa_notas.php">
        ALUMNO: <input type="text" name="txt_nombre">
        <br>
        Materia:
        <select name="lst_materia">
            <option value="FISICA"> FISICA </option>
            <option value="QUIMICA"> QUIMICA </option>
            <option value="BROMATOLOGIA"> BROMATOLOGIA </option>
        </select> 
        <BR>   
        Nota 1: <input type="number" name="txt_nota1">
        <br>
        Nota 2: <input type="number" name="txt_nota2">
        <br>
        Nota 3: <input type="number" name="txt_nota3">
        <br>
        <br>
        <input type="submit" value="ENVIAR">


    </form>
</body>
</html>
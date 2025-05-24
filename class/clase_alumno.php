<?php
class alumno {
    public $idalumno;
    public $apellido;
    public $nombre;
    public $fecha_nacimiento;
    public $telefonopadre;
    public $escuela;
    public $nombre_curso;
    public $nombre_materia;

    public function __construct($ape,$nom,$fec,$tel,$es,$nom_cu,$mat)
    {
        $this->apellido=$ape;
        $this->nombre=$nom;
        $this->fecha_nacimiento=$fec;
        $this->telefonopadre=$tel;
        $this->escuela=$es;
        $this->nombre_curso=$nom_cu;
        $this->nombre_materia=$mat;
    }

    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into alumnos(idalumno,apellido,nombre,fecha_nacimiento,telefonopadre,escuela,nombre_curso,nombre_materia) values (null,"'.$this->apellido.'","'.$this->nombre.'","'.$this->fecha_nacimiento.'","'.$this->telefonopadre.'","'.$this->escuela.'","'.$this->nombre_curso.'","'.$this->nombre_materia.'")';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="select idalumno,apellido,nombre,fecha_nacimiento,telefonopadre,escuela,nombre_curso,nombre_materia  from alumnos order by idalumno";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "<table border=1>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['idalumno']."</td>";
            echo "<td>".$reg['apellido']."</td>";
            echo "<td>".$reg['nombre']."</td>";
            echo "<td>".$reg['fecha_nacimiento']."</td>";
            echo "<td>".$reg['telefonopadre']."</td>";
            echo "<td>".$reg['escuela']."</td>";
            echo "<td>".$reg['nombre_curso']."</td>";
            echo "<td>".$reg['nombre_materia']."</td>";
            echo '<td><a class="row-btn" href="eliminar_alumno.php?id='.$reg["idalumno"].'">Eliminar</td>';
            echo '<td><a class="row-btn" href="formularios_calificaciones.php?id='.$reg["idalumno"].'&alumno='.$reg['apellido'].'">CALIFICACION</td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function mostrar_alumno($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="select idalumno,apellido,nombre,fecha_nacimiento,telefonopadre,escuela, nombre_curso,nombre_materia from alumnos where idalumno=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        if ($reg = $registros->fetch_array()) {
            echo "Idalumno:".$reg['idalumno'];
            echo "<br>Apellido:".$reg['apellido'];
            echo "<br>";
            echo "Nombre:".$reg['nombre'];
            echo "<br>";
            echo "Fecha Nacimiento:".$reg['fecha_nacimiento'];
            echo "<br>";
            echo "Telefono padre:".$reg['telefonopadre'];
            echo "Escuela:".$reg['escuela'];
            echo "<br>";
            echo "Curso:".$reg['nombre_curso'];
            echo "<br>";
            echo "MATERIA:".$reg['nombre_materia']; 
            echo "<br>";
            echo "<hr>";
            }
            else
            {
                echo "No se encuentra el registro";
            }
            $mysql->close();
    }  
    public function eliminar($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="delete from alumnos where idalumno=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
}
?>
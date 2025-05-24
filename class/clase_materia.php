<?php
class materia {
    public $idmateria;
    public $nombre_materia;

    public function __construct($no_ma)
    {
        $this->nombre_materia=$no_ma;
    }

    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into materias(idmateria,nombre_materia) values (null,"'.$this->nombre_materia.'")';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="select idmateria,nombre_materia from materias order by idmateria";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "<table border=1>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['idmateria']."</td>";
            echo "<td>".$reg['nombre_materia']."</td>";
            echo '<td><a class="row-btn" href="eliminar_materia.php?id='.$reg["idmateria"].'">Eliminar</td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function mostrar_materia($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="select idmateria,nombre_materia from materias where idmateria=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        if ($reg = $registros->fetch_array()) {
            echo "Idmateria:".$reg['idmateria'];
            echo "<br>Nombre materia:".$reg['nombre_materia'];
            echo "<br>";
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
        $cadena="delete from materias where idmateria=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
}
?>
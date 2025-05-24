<?php
class curso {
    public $idcurso;
    public $nombre_curso;
    public $turno;
    public $ciclo;

    public function __construct($nom_cu,$tur,$ciclo)
    {
        $this->nombre_curso=$nom_cu;
        $this->turno=$tur;
        $this->ciclo=$ciclo;
    }
    
    public function guardar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

        $cadena='insert into cursos(nombre_curso,turno,ciclo) values ("'.$this->nombre_curso.'","'.$this->turno.'","'.$this->ciclo.'")';

        $mysql->query($cadena) or die($mysql->error);

        $mysql->close();
    }

    public function listar()
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="select idcurso,nombre_curso,turno,ciclo from cursos order by nombre_curso";
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "<table border=1>";
        while ($reg = $registros->fetch_array()) {
            echo "<tr>";
            echo "<td>".$reg['idcurso']."</td>";
            echo "<td>".$reg['nombre_curso']."</td>";
            echo "<td>".$reg['turno']."</td>";
            echo "<td>".$reg['ciclo']."</td>";
            echo '<td><a href="eliminar_curso.php?id='.$reg["idcurso"].'">Eliminar</td>';
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function eliminar($id)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="delete from cursos where idcurso=".$id;
        $registros=$mysql->query($cadena) or die($mysql->error);
        echo "Se elimino el registro";
        $mysql->close();
    }
    
}
?>
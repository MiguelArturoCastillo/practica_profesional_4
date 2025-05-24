<?php
class planilla {
    public $idalumno;
    public $nombre_materia;
    public $apellido;
    public $nombre;
    public $nombre_curso;
    public $nota1_1;
    public $nota1_2;
    public $nota1_3;
    public $promedio_pri_cuatri_1;
    public $recuperacion_1;
    public $promedio_pri_cuatri_2;
    public $nota2_1;
    public $nota2_2;
    public $nota2_3;
    public $promedio_seg_cuatri_1;
    public $recuperacion_2;
    public $promedio_seg_cuatri_2;

    public function __construct($mat,$ape,$nom,$nom_cu,$no1_1,$no1_2,$no1_3,$pr_cu1,$re1,$pr_cu2,$no2_1,$no2_2,$no2_3,$seg_cu1,$re2,$seg_cu2)
    {
        $this->nombre_materia=$mat;
        $this->apellido=$ape;
        $this->nombre=$nom;
        $this->nombre_curso=$nom_cu;
        $this->nota1_1=$no1_1;
        $this->nota1_2=$no1_2;
        $this->nota1_3=$no1_3;
        $this->promedio_pri_cuatri_1=$pr_cu1;
        $this->recuperacion_1=$re1;
        $this->promedio_pri_cuatri_2=$pr_cu2;
        $this->nota2_1=$no2_1;
        $this->nota2_2=$no2_2;
        $this->nota2_3=$no2_3;
        $this->promedio_seg_cuatri_1=$seg_cu1;
        $this->recuperacion_2=$re2;
        $this->promedio_seg_cuatri_2=$seg_cu2;
    }
    
    public function listar_planilla($nom_cu)
    {
        $mysql = new mysqli("localhost", "root", "", "bdescuela",3308);
        $cadena="SELECT a.idalumno, a.nombre, a.apellido, a.nombre_curso, a.nombre_materia, c.nota1_1, c.nota1_2, c.nota1_3, c.promedio_pri_cuatri_1, c.recuperacion_1, c.promedio_pri_cuatri_2, c.nota2_1, c.nota2_2, c.nota2_3, c.promedio_seg_cuatri_1, c.recuperacion_2, c.promedio_seg_cuatri_2  FROM alumnos a INNER JOIN calificaciones c ON a.idalumno=c.idalumno WHERE nombre_curso='$nom_cu'";
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
            echo"<td>OPERACION</td>";
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
            echo '<td><a class="row-btn" href="listado_planilla.php?id='.$reg["idalumno"].'&nombre='.$reg["nombre"].'&apellido='.$reg["apellido"].'&nombre_curso='.$reg["nombre_curso"].'&nombre_materia='.$reg["nombre_materia"].'">EDITAR</td>';        
            echo "</tr>";
            }
            echo "</table>";
            $mysql->close();
    }
    public function edicion_planilla($id)
    {
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
    }        
}  
?>
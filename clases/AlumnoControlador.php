<?php 
class AlumnoControlador extends Alumno{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO alumnos.alumno ";
        $variableSql .= "(id,nombre,apellido,fecha_nacimiento,";
        $variableSql .= "direccion,carnet,seccion) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."',";
        $variableSql.="'".$objAlumno[5]."',";
        $variableSql.="'".$objAlumno[6]."');";
        return consultaA($con,$variableSql);
        }
        public function modificardatos( $con,$objAlumno){
            $variableSql ="UPDATE Alumno SET  ";
            $variableSql .= "nombre = '".$objAlumno[1]."'";
            $variableSql .= " ,apellido = '".$objAlumno[2]."'";
            $variableSql .= " ,fecha_nacimiento = '".$objAlumno[3]."'";
            $variableSql .= " ,direccion = '".$objAlumno[4]."'";
            $variableSql .= " ,carnet = '".$objAlumno[5]."'";
            $variableSql .= " ,seccion = '".$objAlumno[5]."'";
            $variableSql .= "WHERE id = ".$objAlumno[0].";";
            return consultaA($con,$variableSql)
        }
    }
    
        $bandera = mysql_query($variableSql);
        
        if($bandera){
            $msg =" Datos almacenados";
        }else{
            $msg = "Error al almacenar los Datos # de error: ";
            $msg .= mysql_errno();
            $msg .="<br>";
            $msg .=mysql_error();
        }
        
        return $msg;
    }
   
}

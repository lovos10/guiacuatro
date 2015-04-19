<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./lbs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        </head>
      <body>
   <?php
      	include './clases/Coneccion.php';
		include './clases/Alumno.php';
		include './clases/AlumnoControlador.php';

		$alumnoA = new AlumnoControlador();

		if(isset($_REQUEST['bot'])){
   	 $alumnoA->setId($_REQUEST['id']);
    $alumnoA->setNombre($_REQUEST['nombre']);
    $alumnoA->setApellido($_REQUEST['apellido']);
    $alumnoA->setCarnet($_REQUEST['carnet']);
    $alumnoA->setDir($_REQUEST['dir']);
    $alumnoA->setFechaNac($_REQUEST['fecha_nac']);
    $alumnoA->setSeccion($_REQUEST['seccion']);
    $datosObj=array($alumnoA->getId(),
                    $alumnoA->getNombre(),
                    $alumnoA->getApellido(),
                    $alumnoA->getFechaNac(),
                    $alumnoA->getDir(),
                    $alumnoA->getCarnet(),
                    $alumnoA->getSeccion());

    print "div id='dialogo' title='Exito' style='display: none;'>";
    print '<p>Mensaje: ';
    print $alumnoA->modificarDatos($con,$datosObj);
    print '<span class="badge glyphicon glyphicon-ok"></span></p>';
    print '<a href=\'manejadorAlumno.php?accion=con\'>Ver datos</a>';
    print ="</div>";

}	
?>
<script >
$(document).ready (function(){
	$("#dialogo").dialogo();

});
</script>
	</body>
		</html>
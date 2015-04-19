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


switch ($accion){
  case 'save':

    if(isset($_REQUEST['bot'])){
    $alumnoA->setId('NULL');
    $alumnoA->setnombre($_REQUEST['nombre']);
    $alumnoA->setapellido($_REQUEST['apellido']);
    $alumnoA->setcarnet($_REQUEST['carnet']);
    $alumnoA->setdir($_REQUEST['dir']);
    $alumnoA->setfechaNac($_REQUEST['fecha_nac']);
    $alumnoA->setseccion($_REQUEST['seccion']);
    $datosObj=array($alumnoA->getid(),
                    $alumnoA->getnombre(),
                    $alumnoA->getapellido(),
                    $alumnoA->getfechaNac(),
                    $alumnoA->getdir(),
                    $alumnoA->getcarnet(),
                    $alumnoA->getseccion());

    print $alumnoA->guardarDatos($con,$datosObj);
    print '<a href=\'manejadorAlumno.php?accion=con\'>Ver datos</a>';
  }else{
    print 'No se ha enviado datos ';
}
break;
case 'con':
  $sql='SELECT * FROM alumno';
  $datoss =consultaD($con,$sql);
  print imprimetabla($datoss,"alumno","table table-bordered",1);
  break;
  default:
  print 'No hay Accion que realizar';
  break;

}  
?>
  </body>
</html>

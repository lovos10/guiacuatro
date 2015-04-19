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
    $sql="DELETE FROM alumno WHERE id=".$_REQUEST['id'].";";
    print"<div id='dialogo' title='Exito' style='display: nome;'>";
    print '<p>Mensaje: ';
    print consultaA($con, $sql);
    print '<span class="badge glyphicon glyphicon-ok"></span></p>';
    print 'a href=\'manejadorAlumno.php?accion=con\'>ver datos</a>';
    print "</div>";
?>
<script >
$(document).ready(function(){
    $("#dialogo").dialog();
});
</script>
    </body>
</html>


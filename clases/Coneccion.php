<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coneccion
 *
 * @author alphyon
 */

  $dsn='mysql:dbname=pruebas;host=127.0.0.1';
  $usuario='root';
  $clave='';
   try{
     $con = new PDO($dsn,$usuario,$clave);
   } catch (PDOException $e){
   	print "<div id='dialogo' title='error salida' style='display:none;'>";
   	print '<p> Error Generado:</p>';
   	print '<p><span class ="label label-warnig glyphicon glyphicon-remove">Codigo:</aspan></p>';
    print $e->getcode();
    print '<p><span class ="label label-warnig glyphicon glyphicon-remove">Mensaje de Error: </aspan></p>';
    print $e->getMenssage();
    print "</div>";

   }

   function inprimetabla($objeto,$form,$estilo="table",$editar=0){
   if ($objeto !=NULL) {
   	if (is_array($objeto)){	
   	$tabla = "<table class=\"$estilo\">";
   	$tabla.="<tr class='info'>";
   		foreach (array_keys($objeto[0]) as $value){
   		   $tabla .="<th>";
         $tabla .=$value;
         $tabla .="</th>";
   		} 
      if($editar !="0"){
        $tabla .="<td>Modificar</td><td>Eliminar</td>";
      }
      $tabla .="</tr><tr>";
       foreach ($objeto as $datos) {
          foreach ($datos as $registros) {
            $tabla .="<td>";
            $tabla .=$registros;
            $tabla .="</td>";
       }
       if($editar !="0"){
        $tabla .= "<td><a href=".$form."Buscar.php?id=".$datos['id'].">Modificar</a></td>";
        $tabla .= "<td><a href=".$form."Borrar.php?id=".$datos['id'].">Eliminar</a></td>";
       }
       $tabla .="</tr>";
       }
       $tabla .="</table>";
   }else{
    $tabla ="no hay registros que mostrar ";
   }
   }
   else{
    $tabla ="Debe pasarse un arreglo como parametro";
   }
   return $tabla;
   }
   
 ?>
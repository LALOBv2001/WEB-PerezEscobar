<?php
 $NombrePiloto = $_POST['NombrePiloto'];

 $servidor='localhost';
 $basedatos='BaseWebVuelo';
 $usuario='root';
 $password='';
 $port='3306';
 
 
 $con = mysqli_connect($servidor, $usuario, $password, $basedatos, $port) or die("No se puede conectar");
 $consulta = "delete from vuelo where NombrePiloto = '$NombrePiloto'";
 $registros = mysqli_query($con, $consulta) or die("Problemas al traer los datos");
  
?>
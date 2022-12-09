<?php
 $servidor='localhost';
 $basedatos='BaseWebVuelo';
 $usuario='root';
 $password='';
 $port='3306';
 $NombrePiloto = $_POST['NombrePiloto'];

 
 $con = mysqli_connect($servidor, $usuario, $password, $basedatos,$port) or die("No se puede conectar");
 $consulta = "delete from vuelo where NombrePiloto = '$NombrePiloto'";
 $registros = mysqli_query($con, $consulta) or die("Problemas al traer los datos");
 $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)
?>
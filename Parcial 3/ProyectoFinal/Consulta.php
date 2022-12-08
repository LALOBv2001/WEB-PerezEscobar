<?php

    $nombre=$_POST['NombrePiloto'];
    $servidor='localhost';
    $basedatos='BaseWebVuelo';
    $usuario='root';
    $password='';
    $port='3306';
    
    $con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die ("No se puede conectar");
    $consulta= "select * from vuelo where NombrePiloto= '$nombre'";
    $registros= mysqli_query($con,$consulta) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)
?>
<?php
$servidor='localhost';
$basedatos='BaseWebVuelo';
$usuario='root';
$password='';
$port='3306';

$con =mysqli_connect($servidor,$usuario,$password,$basedatos) or die("problemas con la conexion ");
$consulta="select * from Vuelo";
$registros=mysqli_query($con,$consulta) or die ("problemas con la consulta");

$result=mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);//lo regresamos en un objeto json a js

?>
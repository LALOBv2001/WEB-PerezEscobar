<?php
//echo $id;
$id = $_POST['NIP'];

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta = "select * from registrodatos.registro where NIP='$id'";
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
<?php
//echo $id;
$id = $_POST['NIP'];
$Email = $_POST['Email'];
$Nombre = $_POST['Nombre'];
$Contrasena = $_POST['Contrasena'];
$Direccion = $_POST['Direccion'];
$CodigoPostal = $_POST['CodigoPostal'];
$Ciudad = $_POST['Ciudad'];
$Usuario = $_POST['Usuario'];
$Estado = $_POST['Estado'];

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta = "UPDATE registro SET Nombre = '$Nombre', Ciudad = '$Ciudad', Estado = '$Estado', CodigoPostal = '$CodigoPostal', Usuario = '$Usuario', Contrasena = '$Contrasena', Direccion = '$Direccion', Email = '$Email' WHERE NIP='$id'"; 
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");

if ($registros) {
    header("Location:Formulario.html");
}
else {
    echo "Faltan datos";
}
?>
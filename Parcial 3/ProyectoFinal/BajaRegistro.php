<?php
//echo $id;
$id = $_POST['NIP'];

$servidor="localhost";
$basedatos="registrodatos";
$usuario="root";
$password="";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se puede conectar");
$consulta = "DELETE FROM registro WHERE NIP LIKE $id";
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");



if ($registros) {
    header("Location:Formulario.html");
}
else {
    echo "Faltan datos";
}
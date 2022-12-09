<?php
//echo $id;
$NombrePiloto = $_POST['NombrePiloto'];
$NombreCopiloto = $_POST['NombreCopiloto'];
$CapacidadPasajeros = $_POST['CapacidadPasajeros'];
$CapacidadGalonesCombustible = $_POST['CapacidadGalonesCombustible'];
$PaisDespegue = $_POST['PaisDespegue'];
$PaisAterrizaje = $_POST['PaisAterrizaje'];
$CostoBoleto = $_POST['CostoBoleto'];
$CapacidadEquipajePasajero = $_POST['CapacidadEquipajePasajero'];
$DuracionVueloHoras = $_POST['DuracionVueloHoras'];

$servidor='localhost';
$basedatos='BaseWebVuelo';
$usuario='root';
$password='';
$port='3306';

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die ("No se puede conectar");
$consulta = "UPDATE vuelo SET NombrePiloto = '$NombrePiloto', NombreCopiloto = '$NombreCopiloto', CapacidadPasajeros = '$CapacidadPasajeros', CapacidadGalonesCombustible = '$CapacidadGalonesCombustible', PaisDespegue = '$PaisDespegue', PaisAterrizaje = '$PaisAterrizaje', CostoBoleto = '$CostoBoleto', CapacidadEquipajePasajero = '$CapacidadEquipajePasajero', DuracionVueloHoras = '$DuracionVueloHoras' WHERE NombrePiloto='$NombrePiloto'"; 
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");


?>
<?php
//echo $id;
$NombrePiloto= $_POST["NombrePiloto"];
$NombreCopiloto= $_POST["NombreCopiloto"];
$CapacidadPasajeros= $_POST["CapacidadPasajeros"];
$CapacidadGalonesCombustible= $_POST["CapacidadGalonesCombustible"];
$PaisDespegue= $_POST["PaisDespegue"];
$PaisAterrizaje= $_POST["PaisAterrizaje"];
$CostoBoleto= $_POST["CostoBoleto"];
$CapacidadEquipajePasajero= $_POST["CapacidadEquipajePasajero"];
 $DuracionVueloHoras= $_POST["DuracionVueloHoras"];

$servidor='localhost';
$basedatos='BaseWebVuelo';
$usuario='root';
$password='';
$port='3306';

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die ("No se puede conectar");
$consulta = "INSERT INTO Vuelo(NombrePiloto, NombreCopiloto, CapacidadPasajeros, CapacidadGalonesCombustible,PaisDespegue, PaisAterrizaje, CostoBoleto, CapacidadEquipajePasajero , DuracionVueloHoras) VALUES('$NombrePiloto', '$NombreCopiloto', '$CapacidadPasajeros', '$CapacidadGalonesCombustible', '$PaisDespegue', '$PaisAterrizaje', '$CostoBoleto', '$CapacidadEquipajePasajero','$DuracionVueloHoras')";
$registros= mysqli_query($con,$consulta) or die("Problemas al traer los datos");
$result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result)

?>
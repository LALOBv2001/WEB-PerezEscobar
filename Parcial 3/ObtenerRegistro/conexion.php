<?php

$registro["CiudadPartida"]="Oaxaca";
$registro["CiudadLlegada"]="Nuevo Laredo";
$registro["TiempoVuelo"]="20 hrs";
$registro["Marca"]="NIKE";
$registro["CapacidadPasajeros"]="69";
$registro["NombrePiloto"]="Checo Perez";
$registro["NombreCopiloto"]="Pato oward";
$registro["CapacidadCombustible"]="14 galones";
$registro["CapacidadEquipajePasajero"]="30 kg";


echo json_encode($registro);//lo regresamos en un objeto json a js

?>
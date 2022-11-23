document.querySelector("#btnGetReg").addEventListener("click",async () =>{
let respuesta=await fetch("conexion.php");
let datos=await respuesta.json();

document.querySelector("#CiudadPartida").value=datos.CiudadPartida;
document.querySelector("#CiudadLlegada").value=datos.CiudadLlegada;
document.querySelector("#TiempoVuelo").value=datos.TiempoVuelo;
document.querySelector("#Marca").value=datos.Marca;
document.querySelector("#CapacidadPasajeros").value=datos.CapacidadPasajeros;
document.querySelector("#NombrePiloto").value=datos.NombrePiloto;
document.querySelector("#NombreCopiloto").value=datos.NombreCopiloto;
document.querySelector("#CapacidadCombustible").value=datos.CapacidadCombustible;
document.querySelector("#CapacidadEquipajePasajero").value=datos.CapacidadEquipajePasajero;

});
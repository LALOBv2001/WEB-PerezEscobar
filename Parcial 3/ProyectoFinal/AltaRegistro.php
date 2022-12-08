<?php
    $nombre=$_POST['Nombre-Emp'];
    $apellidoP=$_POST['AP-Emp'];
    $apellidoM=$_POST['AM-Emp'];
    $edad=$_POST['Edad-Emp'];
    $domicilio=$_POST['Dir-Emp'];
    $ciudad=$_POST['Ciudad-Emp'];
    $estado=$_POST['Estado-Emp'];
    $codigoP=$_POST['CodP-Emp'];
    $email=$_POST['Email-Emp'];
    $curp=$_POST['Curp-Emp'];
    $rfc=$_POST['Rfc-Emp'];
    $server= "localhost";
    $db= "proyectoweb";
    $user= "root";
    $pass= "1234";
    $con = mysqli_connect($server,$user,$pass,$db) or die("no se pudo conectar a la base de datos");
    $query= "insert into empleados VALUES ('$nombre','$apellidoP','$apellidoM','$edad','$domicilio','$ciudad','$estado','$codigoP','$email','$curp','$rfc') ";
    $registros= mysqli_query($con,$query) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)

?>

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
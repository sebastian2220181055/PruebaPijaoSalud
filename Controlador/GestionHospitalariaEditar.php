<?php

include_once '../Modelo/DB.php';

date_default_timezone_set("America/Bogota");
$id=$_POST["idGestion"];
$TipoDocumento = $_POST["TipoDocumento"];
$FechaIngreso= $_POST["FechaIngreso"];
$FechaSalida = $_POST["FechaSalida"];
$FechaCreacion = date('Y-m-d');
$IdHospital =intval($_POST["idHospital"]);
$NoDocumento = intval($_POST["NoDocumento"]);


$sentencia = $DBMySQL->prepare("UPDATE gestion_Hospitalaria SET tipo_doc_paciente = ?, fec_ingreso=?,fec_salida=?,fec_creacion=?,hospitalescod_hospital=?,pacientesno_documento=? WHERE id_hospitalizacion = ?;");
$resultado = $sentencia->execute([$TipoDocumento, $FechaIngreso,$FechaSalida,$FechaCreacion,$IdHospital,$NoDocumento,$id]); 
if($resultado === TRUE) echo "Cambios guardados";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>
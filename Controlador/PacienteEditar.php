<?php

include_once '../Modelo/DB.php';
date_default_timezone_set("America/Bogota");
$nombre = $_POST["nombrePaciente"];
$NoDocumento = intval($_POST["NoDocumento"]);
$TipoDocumento = $_POST["TipoDocumento"];
$Apellido = $_POST["apellido"];
$FechaNacimiento = $_POST["FechaNacimiento"];
$email = $_POST["email"];


$sentencia = $DBMySQL->prepare("UPDATE pacientes SET Tipo_documento = ?, nombres=?,apellidos=?,fec_nacimiento=?,email=? WHERE no_documento = ?;");
$resultado = $sentencia->execute([$TipoDocumento, $nombre,$Apellido,$FechaNacimiento,$email,$NoDocumento]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) echo "Cambios guardados";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>
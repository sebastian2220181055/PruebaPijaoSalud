<?php

$id = $_POST["NoDocumento"];
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->prepare("DELETE FROM pacientes WHERE no_documento = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) echo "Eliminado correctamente";
else echo "Algo salió mal";
?>
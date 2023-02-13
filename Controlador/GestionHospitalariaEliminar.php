<?php

$id = $_POST["idHospitalizacion"];
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->prepare("DELETE FROM gestion_Hospitalaria WHERE id_hospitalizacion = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) echo "Eliminado correctamente";
else echo "Algo salió mal";
?>
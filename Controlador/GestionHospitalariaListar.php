<?php
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->query("SELECT * FROM gestion_Hospitalaria;");
$Pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r("<pre>");
print_r($Pacientes);
print_r("</pre>");
?>
<?php
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->query("SELECT * FROM pacientes;");
$Pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r("<pre>");
print_r($Pacientes);
print_r("</pre>");
?>
<?php
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->query("SELECT * FROM hospitales;");
$Hospitales = $sentencia->fetchAll(PDO::FETCH_OBJ);
print_r("<pre>");
print_r($Hospitales);
print_r("</pre>");
?>
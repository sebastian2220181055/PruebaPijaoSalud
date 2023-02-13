<?php
if(!isset($_POST["id"])) exit();
$id = $_POST["id"];
include_once '../Modelo/DB.php';
$sentencia = $DBMySQL->prepare("DELETE FROM hospitales WHERE cod_hospital = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) echo "Eliminado correctamente";
else echo "Algo salió mal";
?>
<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once '../Modelo/DB.php';
$id = $_POST["id"];
$nombre = $_POST["nombre"];


$sentencia = $DBMySQL->prepare("UPDATE hospitales SET nombre = ? WHERE cod_hospital = ?;");
$resultado = $sentencia->execute([$nombre, $id]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) echo "Cambios guardados";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>
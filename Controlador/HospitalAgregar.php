<?php   
            include_once '../Modelo/DB.php';
            
            $nombre = $_POST["nombre"];
            
            $sentencia = $DBMySQL->prepare("INSERT INTO hospitales(nombre) VALUES (?);");
            $resultado = $sentencia->execute([$nombre]); 
           
            if($resultado === TRUE) echo "Insertado correctamente";
            else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>

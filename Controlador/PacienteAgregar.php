<?php   
            include_once '../Modelo/DB.php';
            date_default_timezone_set("America/Bogota");
            $nombre = $_POST["nombrePaciente"];
            $NoDocumento = intval($_POST["NoDocumento"]);
            $TipoDocumento = $_POST["TipoDocumento"];
            $Apellido = $_POST["apellido"];
            $FechaNacimiento = $_POST["FechaNacimiento"];
            $email = $_POST["email"];

            $sentencia = $DBMySQL->prepare("INSERT INTO pacientes(tipo_documento,no_documento,nombres,apellidos,fec_nacimiento,email) VALUES (?,?,?,?,?,?);");
            $resultado = $sentencia->execute([$TipoDocumento,$NoDocumento,$nombre,$Apellido,$FechaNacimiento,$email]);
           
            if($resultado === TRUE) echo "Insertado correctamente";
            else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>

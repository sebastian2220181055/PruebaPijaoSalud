<?php   
            include_once '../Modelo/DB.php';
            
            date_default_timezone_set("America/Bogota");

            $TipoDocumento = $_POST["TipoDocumento"];
            $FechaIngreso= $_POST["FechaIngreso"];
            $FechaSalida = $_POST["FechaSalida"];
            $FechaCreacion = date('Y-m-d');
            $IdHospital =intval($_POST["idHospital"]);
            $NoDocumento = intval($_POST["NoDocumento"]);
           
            $sentencia = $DBMySQL->prepare("INSERT INTO gestion_Hospitalaria (tipo_doc_paciente,fec_ingreso,fec_salida,fec_creacion,hospitalescod_hospital,pacientesno_documento) VALUES (?,?,?,?,?,?);");
            $resultado = $sentencia->execute([$TipoDocumento,$FechaIngreso,$FechaSalida,$FechaCreacion,$IdHospital,$NoDocumento]); # Pasar en el mismo orden de los ?
           
            if($resultado === TRUE) echo "Insertado correctamente";
            else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>

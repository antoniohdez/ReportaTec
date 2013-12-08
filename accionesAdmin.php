<?php
	require_once("ModeloUsuarios.php");
	require_once("ModeloAdmin.php");
	require_once("Driver.php");
	validarSession("admin");
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$estatus = $_POST["estatus"];
		$departamento = $_POST["departamento"];
		$conn = open_connection();
		if(mysqli_query($conn,"UPDATE Reporte SET estadoReporte = '$estatus', departamento='$departamento' WHERE id='$id'")){
			print "success";
			if($estatus == "Resuelto"){
				if($result = mysqli_query($conn,"SELECT matriculaFK FROM Reporte WHERE id='$id'")){
					if($row = $result->fetch_array(MYSQLI_ASSOC)){
						$matricula = $row["matriculaFK"];
						mysqli_query($conn,"UPDATE Usuario SET karma = ((karma+10)/2.0) WHERE matricula='$matricula'");
					}
				}
			}
		}
		else{
			print "error";
		}	
	}
	else{
		print "error";
	}
?>
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
		}
		else{
			print "error";
		}	
	}
	else{
		print "error";
	}
?>
<?php
	require_once("ModeloUsuarios.php");
	require_once("ModeloAdmin.php");
	require_once("Driver.php");
	validarSession("user");
	if(isset($_POST["nuevoReporte"])){
		if($_SESSION["usuario"]->enviarReporte($_POST["inputProblem"],$_POST["inputDetail"])){
			header("Location: index.php?success=reporte");	
		}
		else{
			header("Location: index.php?error=1");
		}	
	}
	else{
		header("Location: index.php");
	}
?>
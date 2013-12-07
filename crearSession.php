<?php
	require_once("ModeloUsuarios.php");
	require_once("ModeloAdmin.php");
	require_once("driver.php");
	if(!isset($_POST["userId"]) || !isset($_POST["password"])){
		header("location: login.php");
	}
	else{
		$user = $_POST["userId"];
		$pass = md5($_POST["password"]);
		$conn = open_connection();
		$stmt = $conn->prepare("SELECT matricula FROM Usuario where matricula = ? AND password = ?");
		$stmt->bind_param('ss', $user, $pass);
		$stmt->execute();
		$stmt->bind_result($mat);
	    if($stmt->fetch()){
			$_SESSION["usuario"] = new Usuario($mat);
	        $stmt->close();
	        close_connection($conn);
	        header("Location: index.php");
	   	}
	   	else{
	   		$stmt = $conn->prepare("SELECT nomina FROM Admin where nomina = ? AND password = ?");
			$stmt->bind_param('ss', $user, $pass);
			$stmt->execute();
			$stmt->bind_result($mat);
		    if($stmt->fetch()){
				$_SESSION["usuario"] = new Admin($mat);
		        $stmt->close();
		        close_connection($conn);
		        header("Location: index.php");
		   	}
	   		close_connection($conn);
			header("Location: login.php?error=1");//No existe el usuario
	   	}
	}
	close_connection($conn);
	header("Location: login.php?error=2");//No se puedo realizar la consulta en la base de datos

?>
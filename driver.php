<?php
	session_start();
	function open_connection(){
		$conn = new mysqli("localhost", "root", "", "reportaTec");
		mysqli_set_charset($conn, "utf8");
		return $conn;
	}

	function close_connection($conn){
		$conn->close();
	}

	function validarSession($session){
		if(!isset($_SESSION["usuario"])){
			if($session != "login"){
				header("location: login.php");	
			}
		}
		else if($session == "any"){
			//
		}
		else if($session == "login"){
			header("Location: index.php");
		}
		else if($session != $_SESSION["usuario"]->tipo){
			header("location: login.php?error=1");
		}
	}

	function getReportes(){
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id FROM Reporte ORDER BY id DESC")){
			$reportes = array();
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				array_push($reportes, new Reporte($row["id"]));
			}
		}
		return $reportes;
	}

	function getConfirmados(){
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id FROM Reporte WHERE estadoReporte = 'Confirmado'")){
			$reportes = array();
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				array_push($reportes, new Reporte($row["id"]));
			}
		}
		return $reportes;
	}

	function getResueltos(){
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id FROM Reporte WHERE estadoReporte = 'Resuelto'")){
			$reportes = array();
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				array_push($reportes, new Reporte($row["id"]));
			}
		}
		return $reportes;
	}

	function getColorEstado($estado){
		if($estado == "En revisión"){
			print "danger";
		}else if($estado == "Confirmado"){
			print "warning";
		}
		else if($estado == "Resuelto"){
			print"success";
		}
	}

?>
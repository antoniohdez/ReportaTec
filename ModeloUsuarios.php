<?php 
require_once("ModeloReportes.php");
class Usuario{ 
	public $matricula;
	public $nombre;
 	public $apellidoP;
 	public $apellidoM;
	public $karma;
	public $tipo;
	public $reportes;
	
	function __construct($matricula){ 
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT * FROM Usuario where Matricula = '$matricula';")){
			if(mysqli_num_rows($result) === 1){
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$this->matricula = $row["matricula"];
				$this->nombre = $row["nombre"];
			 	$this->apellidoP = $row["apellidoP"];
			 	$this->apellidoM = $row["apellidoM"];
				$this->karma = $row["karma"];
				$this->tipo = 'user';
				if($result = mysqli_query($conn,"SELECT id FROM Reporte WHERE matriculaFK = '$this->matricula' ORDER BY id DESC ")){
					$this->reportes = array();
					while($row = $result->fetch_array(MYSQLI_ASSOC)){
						array_push($this->reportes, new Reporte($row["id"]));
					}
				}
			}
		}
		close_connection($conn);
	}

	function recargarReportes(){
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id FROM Reporte WHERE matriculaFK = '$this->matricula' ORDER BY id DESC")){
			$this->reportes = array();
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				array_push($this->reportes, new Reporte($row["id"]));
			}
		}
	}

	function getReportesResueltos(){
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id FROM Reporte WHERE matriculaFK = '".$this->matricula."' and estadoReporte='Resuelto'")){
			$reportes = array();
			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				array_push($reportes, new Reporte($row["id"]));
			}
		}
		return $reportes;
	}

	function enviarReporte($titulo, $descripcion){
		$conn = open_connection();
		if($result = mysqli_query($conn,"INSERT INTO Reporte (matriculaFK, titulo, descripcion, estadoReporte, departamento) VALUES ('".$this->matricula."','$titulo','$descripcion','En revisión', 'No asignado')")){
			return true;
		}
		return false;
	}

	function __destruct() { 
		unset($this); 
	} 
} 
?>

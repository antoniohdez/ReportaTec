<?php 
require_once("ModeloReportes.php");
class Admin{ 
	public $matricula;
	public $nombre;
 	public $apellidoP;
 	public $apellidoM;
 	public $departamento;
	public $tipo;
	
	function __construct($matricula){ 
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT * FROM Admin where Nomina = '$matricula';")){
			if(mysqli_num_rows($result) === 1){
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$this->matricula = $row["nomina"];
				$this->nombre = $row["nombre"];
			 	$this->apellidoP = $row["apellidoP"];
			 	$this->apellidoM = $row["apellidoM"];
			 	$this->departamento = $row["departamento"];
				$this->tipo = 'admin';
			}
		}
		close_connection($conn);
	}

	function __destruct() { 
		unset($this); 
	} 
} 
?>

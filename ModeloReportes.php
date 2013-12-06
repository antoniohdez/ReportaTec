<?php 
class Reporte{ 
	public $id;
	public $titulo;
 	public $descripcion;
 	public $estadoReporte;
	public $departamento;
	
	function __construct($id){ 
		$conn = open_connection();
		if($result = mysqli_query($conn,"SELECT id, titulo, descripcion, estadoReporte, departamento FROM Reporte where id = '$id'")){
			if(mysqli_num_rows($result) === 1){
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$this->id = $row["id"];
				$this->titulo = $row["titulo"];
			 	$this->descripcion = $row["descripcion"];
			 	$this->estadoReporte= $row["estadoReporte"];
				$this->departamento = $row["departamento"];
				close_connection($conn);
			}
		}
	}

	function __destruct() { 
		unset($this); 
	} 
} 
?>

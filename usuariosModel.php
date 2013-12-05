<?php 
require_once('dbAbstractModel.php');
class Usuario extends DBAbstractModel { 
	public $matricula;
	public $nombre;
 	public $apellidoP;
 	public $apellidoM;
	public $karma;
	
	function __construct(){ 
		$this->db_name = 'reportaTec'; 
	} 
	
	public function get($matricula='') { 
		if($matricula != ''): 
			$this->query = " 
							SELECT matricula, nombre, apellidoM, apellidoP, karma
							FROM Usuario
							WHERE matricula = '$matricula'
							"; 
			$this->get_results_from_query(); 
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor; 
				endforeach; 
				return true;
			endif; 
		endif;
		return false;
	} 

	function __destruct() { 
		unset($this); 
	} 
} 
?>

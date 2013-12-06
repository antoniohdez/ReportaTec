<?php
class driver {
	private static $db_host = 'localhost';
	private static $db_user = 'root';
	private static $db_pass = '';
	protected $db_name = 'reportaTec';
	protected $query;
	protected $rows = array();
	private $conn;

	# Conectar a la base de datos
	public function open_connection(){
		$this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
	}

	# Desconectar la base de datos
	public function close_connection(){
		$this->conn->close();
	}

	# Ejecutar un query simple
	public function execute_single_query(){
		$this->open_connection();
		$this->conn->query($this->query);
		$this->close_connection();
	}

	# Traer resultados de una consulta en un Array 
	public function get_results_from_query(){
		$this->open_connection();
		$result = $this->conn->query($this->query);
		while($this->rows[] = $result->fetch_assoc());
		$result->close();
		$this->close_connection();
		array_pop($this->rows);
	}
}
?>

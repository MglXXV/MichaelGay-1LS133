<?php


class Database {

	private $host = "localhost:3308";
	private $db_name = "registro_automoviles";
	private $username = "root";
	private $password = "";
	private $conn;


	public function obtenerConexion() {

		$this->conn = null;

		try {

			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		catch(PDOException $exception) {
			echo "Error de Conexion:" . $exception->getMessage();
		}

		return $this->conn;
	}
}


?>
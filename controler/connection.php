<?php 
	// echo "connection<br/>";
	/**
	* Clase para la conexión a la base de datos
	*/
	class Connection
	{
	    private $host = "localhost";
		private $user = "root";
		private $pswd = "root";
		private $database = "utsoebd";
		private $db = "";
		public $query = "";


		private function makeConnection(){
			// echo "Entrando a makeConnection<br/>";
			$this->db= new mysqli($this->host, $this->user, $this->pswd, $this->database);
			if ($this->db->connect_errno > 0) {
				die("Imposible conectar con la base de datos [". $this->db->connect_error ."]");
			}
		}

		private function closeConnection(){
			// echo "Entrando a closeConnection<br/>";
			$this->db->close();
			unset($this->db);
		}

		public function execQuery($query){
			// echo "Entrando a execQuery<br/>";
			$this->query = $query;
			$this->makeConnection();
			if (!$result = $this->db->query($query)) {
				die("Ocurrion un error ejecutandos el query [". $this->db->error ."]");
			}
			$resultdb = $result->fetch_assoc();
			$this->closeConnection();
			return $resultdb;
		}
	}
	
 ?>
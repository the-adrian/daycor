<?php 
	/**
	* Clase para iniciar una sesión y cerrarla
	*/
	class Session 
	{
		private $username = "";
		private $typeuser = "";

		function __construct($username, $typeuser)
		{
			$this->username = $username;
			$this->typeuser = $typeuser;	
		}

		public function startSession()
		{
			session_start();
			$_SESSION['username'] = $this->username;
			$_SESSION['typeuser'] = $this->typeuser;
		}

		public static function closeSession()
		{
			session_start();
			session_destroy();
			header('location: ../index.html');	
			// echo "entrado";
			// session_start();
			// unset($_SESSION['username']);
			// unset($_SESSION['typeuser']);
			// session_destroy();
			// header('location: ../index.html');
			// exit;
		}
	}
 ?>
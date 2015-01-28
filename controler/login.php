<?php 
	require 'connection.php';

	$objdb = new Connection;
	$username = $_POST['username'];
	$pswd = $_POST['pswd'];

	//  Validación del usuario para entrar al sistema
	$query = "SELECT COUNT(*) AS numrow FROM users WHERE usrname='".$username."' AND usrpsw=SHA('".$pswd."')";

	$isuser = $objdb->execQuery($query);

	if ($isuser['numrow'] == '1') {
		require 'sessions.php';
		$objsession = new Session($username, '1');
		$objsession->startSession();

		header('Location: ../views/menu.php');
	}else{
		header('Location: ../index.html');
	}	
 ?>
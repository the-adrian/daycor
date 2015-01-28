<?php 
	echo "entrando a users<br/>";
	require 'connection.php';
	
	$objdb = new Connection;
	var_dump($objdb);
	// require 'connection.php';
	// echo "pasando el require";
	// $objdb = new Connection;

	// function deleteUser(){

	// }

	// function modifyUser(){

	// }

	// function adduser(){

	// }

	// public function getTypeUser($username){
	// 	$query = "SELECT usrtype AS typeuser FROM users WHERE usrname = '".$username."'";
	// 	$resultdb = $this->objdb->execQuery(query);
	// 	$typeuser = $resultdb['usrtype'];
	// 	return $typeuser;
	// }
 ?>
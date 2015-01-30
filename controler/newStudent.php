<?php 
	require_once 'connection.php';

	$objbd = new Connection;
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$grade = $_POST['grado'];
	$group = $_POST['grupo'];
	$carrer = $_POST['carrer'];
	$status = $_POST['estatus'];

	$queryalumnexist =  'SELECT COUNT(*) FROM alumnos WHERE almnombre = "'.$name.'" AND almapellidos = "'.$lastname.'" AND almcorr = "'.$email.'";';
	$studentexist = $objbd->validateUser($queryalumnexist);
	if ($studentexist == '1') {
		echo "El usuario ya existe";
		return 1;
	}

	$querynewstudent = 'INSERT INTO alumnos values ("", "'.$name.'", "'.$lastname.'", "'.$address.'", "'.$email.'", "'.$phone.'");';
	$objbd->insert($querynewstudent);

	$queryidstudent = 'SELECT almid as numrow FROM alumnos WHERE almnombre = "'.$name.'" AND almapellidos = "'.$lastname.'" AND almcorr = "'.$email.'";'; 
	$idstudent = $objbd->validateUser($queryidstudent);
	$querygragrucar = 'INSERT INTO gragrucar VALUES("", '.$carrer.', '.$grade.', '.$group.', '.$idstudent.', '.$status.');';
	// echo $querygragrucar;
	$objbd->insert($querygragrucar);
	header('Location: ../views/students.php');

 ?>
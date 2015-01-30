<?php 
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$grade = $_POST['grado'];
	$group = $_POST['grupo'];
	$carrer = $_POST['carrer'];
	
	$querynewstudent = 'INSERT INTO alumnos values ("", "'.$name.'", "'.$lastname.'", "'.$address.'", "'.$email.'", "'.$phone.'");';
	

 ?>
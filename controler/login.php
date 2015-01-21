<?php 
	require 'conexion.php';
	// $sql="SELECT nombre_banda FROM bandas";
	// if (!$resultado = $db->query($sql)) {
	// 	die('Ocurrio un error al ejecutar la consulta ['.$db->error.']');
	// }
	// while ($fila = $resultado->fetch_assoc()) {
	// 	echo $fila['nombre_banda'] .'<br/>';
	// }

	function llenarCombo(){
		$sql="SELECT nombre_banda FROM bandas";

		if (!$result=$db->query($sql)) {
			die('Courrio un error al ejecutar la consulta ['.$db->error.']');
		}
		while ($row=$result->fetch_assoc()) {
			echo $row['nombre_banda'].'<br/>';
			
		}
	}
?>
<?php 
	$db = new mysqli('localhost', 'root', '', 'musica');
	if ($db->connect_errno > 0) {
		die('Imposible conectar ['.$db->connect_errno.']');
	}
 ?>
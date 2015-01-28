<?php session_start(); if (!isset($_SESSION['username'])) {
	header('location: ../index.html');
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Daycor (profesores)</title>
	<link rel="stylesheet" href="../css/foundation.css">
	<link rel="stylesheet" href="../css/mystyle.css">
	<link rel="stylesheet" href="../css/foundation-icons.css">
</head>
<body class="color-page">
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1><a href="#">Daycor.</a></h1>
			</li>
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				<li>
					<a href="profile.php"><i class="fi-torso"></i><strong> <?php echo $_SESSION["username"]; ?></strong></a>
				</li>
				<li>
					<a href="../controler/closesession.php"><i class="fi-power"></i> <strong>Cerrar Sesión</strong></a>
				</li>
			</ul>
			<ul class="left">
				<li>
					<a href="menu.php"><i class="fi-home"></i><strong> Menú</strong></a>
				</li>
				<li class="has-form">
				  	<div class="row collapse">
				    	<div class="large-8 small-9 columns">
				      		<input type="text" placeholder="Buscar profesor">
				    	</div>
				    <div class="large-4 small-3 columns">
				      	<a href="#" class="alert button expand"><i class="fi-magnifying-glass"></i></a>
				    	</div>
				  	</div>
				</li>
				<li class="has-form">
					<a href="" class="button">Todos</a>
				</li>
				<li class="has-form">
					<a href="" class="button warning disabled">Tic</a>
				</li>
				<li class="has-form">
					<a href="" class="button success disabled">Den</a>
				</li>
				<li class="has-form">
					<a href="" class="button info disabled">Mec</a>
				</li>
				<li class="has-form">
					<a href="" class="button alert disabled">Dmi</a>
				</li>
				<li class="has-form">
					<a href="" class="button secondary disabled">Pal</a>
				</li>
			</ul>
		</section>
	</nav>
	<section class="row div-centered">
		<section class="large-12 small-12 columns">
			<table class="large-12 small-12 columns hover-table">
				<thead>
				    <tr>
				    	<th>Nombre</th>
				      	<th>Carrera</th>
				      	<th>Correo</th>
				      	<th>Telefono</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				    	<td>Jose Antonio Gordillo</td>
				      	<td>Tecnologias de la infomacion</td>
				      	<td>jantonio@utsoe.edu.mx</td>
				      	<td>456-123-1234</td>
				    </tr>
				    <tr>
				      	<td>Maximiliano Negrete</td>
				      	<td>Tecnologias de la informacion</td>
				      	<td>mnegrete@utsoe.edu.mx</td>
				      	<td>456-812-3421</td>
				    </tr>
				</tbody>
			</table>
		</section>
		<section class="row pagination right">
				<ul class="pagination">
					<li class="arroww unavailable"><a href="">&laquo;</a></li>
					<li class="current"><a href="">1</a></li>
					<li class=""><a href="">2</a></li>
					<li class="arrow"><a href="">&raquo;</a></li>
				</ul>
			</section>
	</section>
	
</body>
</html>
<?php session_start(); if (!isset($_SESSION['username'])) {
	header('location: ../index.html');
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Daycor (alumnos)</title>
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
				      		<input type="text" placeholder="Buscar tesis">
				    	</div>
				    <div class="large-4 small-3 columns">
				      	<a href="#" class="alert button expand"><i class="fi-magnifying-glass"></i></a>
				    	</div>
				  	</div>
				</li>
				<li class="has-form">
					<a href="" class="button disabled">Todos</a>
				</li>
				<li class="has-form">
					<a href="" class="button warning">Tic</a>
				</li>
				<li class="has-form">
					<a href="" class="button success disabled">Den</a>
				</li>
				<li class="has-form"><script src="../js/jquery.js"></script>
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
			<table class="large-12 small-12 columns hover-table" id="mytable">
				<thead>
				    <tr>
				    	<th>Titulo</th>
				      	<th>Autor</th>
				      	<th>Carrera</th>
				      	<th>Grupo</th>
				      	<th>Empresa</th>
				      	<th>Estado</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				    	<td>Migración de la base de datos del subes</td>
				    	<td>Perla Coral Ceja Conejo</td>
				    	<td>Tecnologias de la información</td>
				      	<td>C</td>
				      	<td>Universidad Tecnologica del Suroeste de Guanajuato</td>
				      	<td>Activo</td>
				    </tr>
				    <tr>
				    	<td>Desarrollo de un sistema de administración en la nuve</td>
				      	<td>Jesús Adrián Ramírez López</td>
				      	<td>Tecnologias de la informacion</td>
				      	<td>C</td>
				      	<td>ICT Consulting</td>
				      	<td>Terminado</td>
				    </tr>
				     <tr>
				    	<td>Desarrollo de un sistema de administración en la nuve</td>
				      	<td>Jose</td>
				      	<td>Tecnologias de la informacion</td>
				      	<td>C</td>
				      	<td>ICT Consulting</td>
				      	<td>Terminado</td>
				    </tr>
				     <tr>
				    	<td>Desarrollo de un sistema de administración en la nuve</td>
				      	<td>Manuel</td>
				      	<td>Tecnologias de la informacion</td>
				      	<td>C</td>
				      	<td>ICT Consulting</td>
				      	<td>Terminado</td>
				    </tr>
				</tbody>
			</table>
		</section>
		<section class="row pagination right">
				<ul class="pagination">
					<li class="arroww unavailable"><a href="">&laquo;</a></li>
					<li class="current"><a href="">1</a></li>
					<li class="arrow"><a href="">&raquo;</a></li>
				</ul>
			</section>
	</section>
	<script src="../js/jquery.js"></script>
	<script src="../js/prueba.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/foundation.topbar.js"></script>
	<script src="../js/foundation.alert.js"></script>
	<script>
	$('a.reveal-link').trigger('click');
	$('a.close-reveal-modal').trigger('click');

	// or directly on the modal
	$('#myModal').foundation('reveal', 'open');
	// $('#myModal').foundation('reveal', 'close');
	</script>


</body>
</html>
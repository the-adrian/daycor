<?php session_start(); if (!isset($_SESSION['username'])) {
	header('location: ../index.html');}
	require_once "../controler/combologica.php";
	// else{
		
		// tableStundents();
	// }	
?>
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
				      		<input type="text" placeholder="Buscar alumno">
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
				<li class="has-form">
					<a href="#"  class="button" data-reveal-id="modalNewStudent"><i class="fi-plus"></i> <strong>Nuevo Alumno</strong></a>
				</li>
			</ul>
		</section>
	</nav>
	<section class="row div-centered">
		<section class="large-12 small-12 columns">
			<?php require '../controler/logica.php'; ?>
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
	<section class="row panel reveal-modal modal-20" id="modalNewStudent" data-reveal>
		<h3 class="text-center">Nuevo alumno</h3>
		<a class="close-reveal-modal">&#215;</a>
		<form action="../controler/newStudent.php" method="post">
			<section class="row">
				<input type="text" placeholder="Nombre" name="name">
			</section>
			<section class="row">
				<input type="text" placeholder="Apellidos" name="lastname">
			</section>
			<section class="row">
				<input type="email" placeholder="Correo" name="email">
			</section>
			<section class="row">
				<input type="text" placeholder="Telefono" name="phone">
			</section>
			<section class="row">
				<textarea name="address" id="" cols="2" rows="2" placeholder="Direccion"></textarea>
			</section>
			<section class="row">


			<?php  cmbCar(); ?>



			</section>
			<section class="row">
				<section class="large-4 columns">
					

			<?php  cmbGrad(); ?>
						
				</section>
				<section class="large-4 columns">
				
				<?php cmbGrup(); ?>


				</section>
				<section class="large-4 columns">
					<select name="" id="">
						<option value="" default selected>Activo</option>
						<option value="">Inactivo</option>
					</select>
				</section>
			</section>
			<section class="row">
				<section class="large-6 columns">
					<button class="button alert expand">Cancelar</button>
				</section>
				<section class="large-6 columns">
					<button class="button success expand" type="submit">Aceptar</button>
				</section>
			</section>
		</form>
	</section>
	<script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/fastclick.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
</body>
</html>
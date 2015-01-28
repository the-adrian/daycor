<?php session_start(); if (!isset($_SESSION['username'])) {
	header('location: ../index.html');
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Daycor-Perfil</title>
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
			</ul>
		</section>
	</nav>
	<section class="row div-centered">
		<section class="large-4 columns left">
			<img src="../img/user.png" alt="" class="image-round">
		</section>
		<section class="large-8 columns">
			<form action="" class="panel">
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Nombre:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="Enrique">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Carrera:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="TIC">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Dirección:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="Valle de Santiago">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Grado:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="11">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Grupo:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="A">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Correo:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="enrique@enrique.com">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-2 columns">
						<span class="button alert postfix">Telefono:</span>
					</section>
					<section class="large-9 columns">
						<input type="text" placeholder="456-123-45621">
					</section>
				</section>
				<section class="row collapse">
					<section class="large-12 columns">
						<button class="button right expand">Editar</button>
					</section>
				</section>
			</form>
		</section>
	</section>
</body>
</html>
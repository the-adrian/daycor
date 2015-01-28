<?php session_start(); if (!isset($_SESSION['username'])) {
	header('location: ../index.html');
}?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Daycor-Menú</title>
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
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menú</span></a></li>
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				<li>
					<a href="profile.php"><i class="fi-torso"></i> <strong><?php echo $_SESSION["username"]; ?></strong></a>
				</li>
				<li>
					<a href="../controler/closesession.php"><i class="fi-power"></i> <strong>Cerrar Sesión</strong></a>
				</li>
			</ul>
		</section>
	</nav>
		<section class="row div-centered">
			<a href="students.php">
				<section class="large-3 small-6 columns button efect">
					<i class="fi-torsos-all-female size-72 centered"></i><br/><strong>Alumnos</strong>
				</section>
			</a>
			<a href="thesis.php">
				<section class="large-3 small-6 columns button alert efect">
					<i class="fi-book size-72 centered"></i><br/><strong>Tesis</strong>
				</section>
			</a>
			<a href="enterprise.php">
				<section class="large-3 small-6 columns button success efect" >
					<i class="fi-home size-72 centered"></i><br/><strong>Empresas</strong>
				</section>
			</a>
			<a href="tutors.php">
				<section class="large-3 small-6 columns button warning efect" >
					<i class="fi-torso-business size-72 centered"></i><br/><strong>Tutores</strong>
				</section>
			</a>
		</section>
</body>
</html>
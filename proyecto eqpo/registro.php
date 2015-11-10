<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>HOME - "BOOK-ME"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <!-- css -->
    <link href="css/menu.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/css1.css">
</head>
<body>
	<div style="background:#999; font-size:20px; text-align:center; line-height:160px; color:#FFF; font-weight:bold;">BOOK-ME
    </div>
	<!-- start header -->
	<header>	
		<div class="container">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav bold">
							<li class="dropdown active">
							<a href="index1.php">Home</a>
							</li>
							<!--<li class="dropdown">
							<a href="#">Busqueda <i class="icon-angle-down"></i></a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="Busqueda1.php">Libro</a></li>
								<li><a href="Busqueda2.php">Libreria</a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="Foro.php">Foro</a>
							</li>
							<li class="dropdown">
							<a href="Contactos.php">Contactos</a>
							</li>-->
							<li class="dropdown">
							<a href="#">Inicio de sesion <i class="icon-angle-down"></i></a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="acceso.php">Iniciar sesion</a></li>
								<li><a href="registro.php">Registrarse</a></li>
							</ul>
							</li>
							
							
						</ul>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
			</div>
		</div>
	</header>	
	<!-- end header -->
	<div id='caja1' class='caja1'>
	<form method="POST" action='alta.php'>
		<h2 style="text-align:center;" >Registro</h2>
		
		<p>Nombre</p><input name="nombre" type="text"/>
		<p>E-mail</p><input name="email" ="ingresatexto" type="text"/>
		<p>Ingresa tu contraseña:</p><input name="contrasena" type="password"/>
		<p>
		<input type="submit" name="boton" value="Resgistrarse"/>
	</form>
	</div>
	<!--
	<?php
	/*error_reporting(0);
	$con = mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("libreria", $con) or die(mysql_error());
	$nombre=$_POST["nombre"];
	$correo=$_POST["email"];
	$contraseña=$_POST["contrasena"];
	$sql = "INSERT INTO usuarios VALUES(NULL,'$nombre','$correo','$contraseña')";
	mysql_query($sql);
	mysql_close($con);*/
	?>
	-->

	
	
    <script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
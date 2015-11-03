<?php
	session_start();
	echo "Hola " . $_SESSION['usuario'];
?>
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
</head>
<body>
	<div style="background:#999; font-size:50px; text-align:center; line-height:160px; color:#FFF; font-weight:bold;">BOOK-ME
    </div>
	<!-- start header -->
	<header>	
		<div class="container">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav bold">
							<li class="dropdown active">
							<a href="index.php">Home</a>
							</li>
							<li class="dropdown">
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
							</li>
							<!--
							<li class="dropdown">
							<a href="#">Inicio de sesion <i class="icon-angle-down"></i></a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="acceso.php">Iniciar sesion</a></li>
								<li><a href="registro.php">Registrarse</a></li>
							</ul>
							</li>-->
							
							
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
	<img id="pub" alt="no carga" src="img1.png">
    <script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>
	<a href="logout.php"><button>Salir</button></a>

</body>

</html>
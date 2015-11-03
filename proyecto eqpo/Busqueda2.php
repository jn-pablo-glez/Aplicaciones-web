<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>BUSQUEDA-"BOOK-ME"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <!-- css -->
    <link href="css/menu.css" rel="stylesheet">
</head>
<body>
	<div style="background:#999; font-size:15px; text-align:center; line-height:160px; color:#FFF; font-weight:bold;">BANNER
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  
<script type="text/javascript" src="gmaps.js"></script>
  
<script type="text/javascript">
  
$(document).ready(function(){
  	
var map= new GMaps({
div: '#map',
lat: 19.0412967,
 lng: -98.2061996,
 zoom: 15
});
 });
  
</script>
<form method="POST">
<input type="text" name="libro">
<input type="submit" name="Boton" value="Buscar">
</form>
<div id="map" style="width:100%;height:500px;">
</div>
		
    <script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>
<?php
error_reporting(0);
if ($_REQUEST[Boton] != "" )
{
	$con = mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("libreria", $con) or die(mysql_error());
	$query = "select * from libreria";     
    $result = mysql_query($query);
	$libro=$_POST[libro];
	while($registro=mysql_fetch_array($result))
	{
		if($registro['nombre']==$libro)
		{
					echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						var map= new GMaps({div: '#map',lat: 19.0412967,lng: -98.2061996,zoom: 14});
						map.addMarker({lat:'".$registro['lat']."',lng:'".$registro['lon']."', title:'".$registro['nombre']."',infoWindow: {content:'".$registro['direccion']."'}});
			});</script>";
		}
	}
	mysql_close($con);
}
?>
</body>

</html>
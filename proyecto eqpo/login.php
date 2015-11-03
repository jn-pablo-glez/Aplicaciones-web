<?php

	$usuario=$_POST["usuario"];
	$pass=$_POST["cont"];
	require("coneccion.php");
	$result = mysql_query("SELECT * from usuarios where nombre ='" . $usuario . "'");//"SELECT * from usuario where nombre='" . $usuario . "'"
	if($row = mysql_fetch_array($result))
	{
		
		if($row['password']==$pass)
		{
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: index.php");
		}
		else
		{
			echo "<script>alert('Usuario o Contraseña equivocados');
			location.replace('acceso.php');</script>";
			exit();
		}
	}
	else
	{
		echo "<script>alert('Usuario o Contraseña equivocados');
		location.replace('acceso.php');</script>";
		exit();
	}
?>
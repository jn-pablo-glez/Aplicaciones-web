<?php
	
	$nombre=$_POST["nombre"];
	$correo=$_POST["email"];
	$contraseña=$_POST["contrasena"];
	$reqlen = strlen($nombre)*strlen($correo)*strlen($contraseña);
	if($reqlen>0)
	{
		require("coneccion.php");
		
		
		$result = mysql_query("SELECT * from usuario where nombre='" . $nombre . "'");//"SELECT * from usuario where nombre='" . $usuario . "'"
		if($row = mysql_fetch_array($result))
		{
			echo "<script>alert('Este usuario ya esta registrado');
			location.replace('Registro.php');</script>";
			
			exit();
			
		}
		else
		{

			//registro del usuario
			mysql_query("INSERT INTO usuarios VALUES(NULL,'$nombre','$correo','$contraseña')");
			mysql_close($con);
			
			echo "<script>alert('usuario registrado exitosamente');
			location.replace('');</script>";
			session_start();
			$_SESSION['usuario'] = $nombre;
			header("Location: index.php");
		}
				
	}else
	{
		echo "<script>alert('No esta completo el formulario');
		location.replace('Registro.php');</script>";
	}

?>

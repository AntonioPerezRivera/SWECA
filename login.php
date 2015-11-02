<!DOCTYPE html>
<html>
<head>
	<title>Iniciando Sesion...</title>
</head>
	<body>
		<?php
			/*Conectamos con el servidor de nuestra BD
			$conexion = mysqli_connect("localhost","cursophp-ad","php.hph","lindavista")
			 or die("Imposible conectar con nuestro servidor");

			//Enviamos la consulta
			 $sentencia = "Select *  from login order by id_usuario asc";
			 $consulta = mysqli_query($conexion,$sentencia)
			 or die("fallo en la consulta"); 

			 $num_filas = mysqli_num_rows($consulta);
			 $nombre = $_REQUEST['nombre'];
			 $contraseña = $_REQUEST['contraseña'];

			 if (!empty($nombre) && !empty($contraseña)) 
			 {
				 /*	Buscamos al Usuario 
				 $i= 1; $encontrado = false;
				 while ($i <= $num_filas && $encontrado == false) 
				 {
				 	$usuarios = mysqli_fetch_array($consulta);

				 	if($nombre == $usuarios['Nombre'] && $contraseña == $usuarios['Contrasena'])
				 		$encontrado = true;
		
				 	$i++;
				 }

				 if ($encontrado) 
				 {
				 	print("".$nombre." ha iniciado sesion.");
				 	header("location: nuevoestudio.php");
				 }
				 else
				 {
				 	print("Contrasena erronea <br><br>");
				 	header("location: login.html");
				 }
			}
			else
				header("location: login.html");
		 ?>
	</body>
</html>
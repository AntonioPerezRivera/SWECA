<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Administrador</title>
</head>
	<body>
		<?php
		session_start();

if(isset($_SESSION['nombre_admin']))
{ 
		//Conectamos con el servidor de nuestra BD
		$conexion = mysql_connect("localhost","root","root")
		 or die("Imposible conectar con nuestro servidor");

		 mysql_select_db("mydb");

		 $nombre = $_REQUEST['nombre'];
		 $contraseña_nueva = $_REQUEST['contraseña1'];
		 $contraseña_repeticion = $_REQUEST['contraseña2'];

		 if (!empty($nombre) && !empty($contraseña_nueva) && !empty($contraseña_repeticion)) 
		 {
		 	
			if ($contraseña_nueva != $contraseña_repeticion) 
			{
				echo "Contrasenas distintas";
				time_nanosleep(3,0);
				header("location: nuevoAdmin.html");
			}
			
			//Enviamos la consulta
			 $sentencia = "INSERT into login(Nombre,Contrasena) values('$nombre','$contraseña_nueva')";
			 $consulta = mysql_query($sentencia,$conexion)
			 or die("fallo en la consulta"); 
			 echo "El usuario ".$nombre." ha sido registrado como administrador.";
			 header("location: indexadmin.php");
		}
		else
			header("location: nuevoAdmin.html");
}
else
{
	echo "No ha iniciado sesion";
	print("<br></br><br></br><a href='login.html'>Volver al inicio</a>");

}
		?>
	</body>
</html>
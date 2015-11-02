<html LANG="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK REL="stylesheet" TYPE="text/css" HREF="estilos/estiloAdmin.css"> 
<header>
	<title>Servicio de administracion</title>
	<img id="img" src="imagenes/bannerAdmin.png">
</header>
<body>

	<?php
			session_start();

			//Conectamos con el servidor de nuestra BD
			$conexion = mysql_connect("localhost","root","root")
			 or die("Imposible conectar con nuestro servidor");

			mysql_select_db("mydb");

			//Enviamos la consulta
			 $sentencia = "Select *  from login order by id_usuario asc";
			 $consulta = mysql_query($sentencia,$conexion)
			 or die("fallo en la consulta"); 

			 $num_filas = mysql_num_rows($consulta);
			 $nombre = $_REQUEST['nombre'];
			 $contraseña = $_REQUEST['contraseña'];

			 if (!empty($nombre) && !empty($contraseña)) 
			 {
					 /*	Buscamos al Usuario */
					 $i= 1; $encontrado = false;
					 while ($i <= $num_filas && $encontrado == false) 
					 {
					 	$usuarios = mysql_fetch_array($consulta);

					 	if($nombre == $usuarios['Nombre'] && $contraseña == $usuarios['Contrasena'])
					 		$encontrado = true;
			
					 	$i++;
					 }

				 if ($encontrado)
				 {
				 	print("<p class='botonLog-in'>".$nombre." ha iniciado sesion. </p>");
				 	$_SESSION['nombre_admin'] = $nombre;
				 }
				 else
				 	//print("Contrasena erronea <br><br>");
				 	header("location: login.html");
			}
			else
				header("location: login.html");

		/*if(isset($_SESSION['nombre_admin']))
		{
			echo "HOLAAAAAAAAAAAAAAAAAA";}
		else
		{
			echo "No ha iniciado sesion";
			print("<br></br><br></br><a href='login.html'>Volver al inicio</a>");

		}*/
 ?>
<div id="fondo">
	<div id="global">
		<div id="slide-menu">
			<center>
			<form method="POST">
			    <input class="botonAdmin" type="button" value="Crear nuevo administrador" onClick="window.open('nuevoAdmin.html')"><br>
			    <input class="botonAdmin" type="button" value="Borrar administrador" onClick="window.open('borrarAdmin.php')"><br>
			    <input class="botonAdmin" type="button" target="blank" value="Mostrar Preguntas" onClick="window.open('mostrarPreguntas.php')"><br>
			    <input class="botonAdmin" type="button" value="Editar preguntas" onClick="window.open('editPreguntas.php')"><br>
			    <input class="botonAdmin" type="button" value="Analizar Resultados" onClick="window.open('analisis.php')"><br>
				<input class="botonLogout" type="submit" value="Cerrar sesión" action='cerrarSesion.php'><br><br>
			</form>
		</center>
		</div>
	</div>
</div>

</body>
<footer>
</footer>
</html>

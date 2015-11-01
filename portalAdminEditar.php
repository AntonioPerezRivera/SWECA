<!DOCTYPE=html>
<html>
<html LANG="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK REL="stylesheet" TYPE="text/css" HREF="estilos/estiloAdmin.css">
<header>
	<title>Servicio de administracion</title>
	<img id="img" src="imagenes/banner.png">
</header>
<body>
<center>
	<br/>
	<br/>
	<br/>
	<h3> Por favor, elija un estudio: </h3> <br/>
	<?php

		$conexion = mysql_connect("localhost","root","root")
 			or die("Imposible conectar con nuestro servidor");

 		mysql_select_db("mydb")
 			or die("No se pudo conectar con la BD");

 		$sentencia = "select * from Estudios order by id;";
 		$consulta = mysql_query($sentencia,$conexion)
 			or die("fallo en la consulta");

 	
 		$n_filas = mysql_num_rows($consulta);
 		print "<form method='post' action='estudioPreguntas.php'>";
 		print "<select name='tipoestudio' id=test>";
 			for($i=0;$i<$n_filas;$i++){
 				$resultado = mysql_fetch_array($consulta);
 				print "<option value='".$resultado['nombreEncuesta']."'>".$resultado['nombreEncuesta']." </option>"; // Esto lo manda con _request
 			}
 		print "</select>";
 		print "<br/>";
 		print "<input id='enviar' type='submit' value='Consultar'/>";
 		print "<br/> <br/> <a href='nuevotema.php'> Anadir nuevo tema </a>";
 		print "<br/>";
 		print "<br/>";
 		print "<br/>";
 		print "<br/>";
 		print "</form>";
	?>


</body>


		<footer class="footer-distributed">
			<div class="footer-left">
			<center>
				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Sobre SWECA</a>
					·
					<a href="#">FAQ</a>
					·
					<a href="#">Contacto</a>
				</p>

				<p>SWECA &copy; 2015</p>
			</div>
			</center>

		</footer>

</html>

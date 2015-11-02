<!DOCTYPE=html>
<html>
<head>
	<title> Portal del administrador </title>
</head>
<body>
<center>
	Elija un estudio: <br/>
	<?php

		$conexion = mysql_connect("localhost","root","root")
 			or die("Imposible conectar con nuestro servidor");

 		mysql_select_db("mydb")
 			or die("No se pudo conectar con la BD");

 		$sentencia = "select * from Estudios order by id;";
 		$consulta = mysql_query($sentencia,$conexion)
 			or die("fallo en la consulta");

 	
 		$n_filas = mysql_num_rows($consulta);
 		print "<form method='post' action='no.php'>";
 		print "<select name='tipoestudio'>";
 			for($i=0;$i<$n_filas;$i++){
 				$resultado = mysql_fetch_array($consulta);
 				print "<option value='".$resultado['nombreEncuesta']."'>".$resultado['nombreEncuesta']." </option>"; // Esto lo manda con _request
 			}
 		print "</select>";
 		print "<br/>";
 		print "<input type='submit' value='Consultar'/>"; // Buscate la vida para q llame desde aqui a lo q sea. (php)
 		print "<br/> <br/> <a href='nuevotema.php'> Anadir nuevo tema </a>";
 		print "</form>";
	?>


</body>
</html>
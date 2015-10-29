<!DOCTYPE=html>
<html>
<head>
	<title> Portal del administrador </title>
</head>
<body>
<center>
	<?php
		
		$estudioSeleccionado =  $_POST["tipoestudio"];

		$conexion = mysql_connect("localhost","root","root")
 			or die("Imposible conectar con nuestro servidor");

 		mysql_select_db("mydb")
 			or die("No se pudo conectar con la BD");

 		$sentencia = "select * from Estudios where nombreEncuesta='".$estudioSeleccionado."';";
 		$consulta = mysql_query($sentencia,$conexion)
 			or die("fallo en la consulta1");

 		$resultado = mysql_fetch_array($consulta);

 		//Enviamos la consulta
		 $sentencia2 = "select *  from Dimensiones where Estudios_id=".$resultado['id'].";";

		 $consulta2 = mysql_query($sentencia2,$conexion)
		 	or die("fallo en la consulta2");

		//Mostramos resultados
		 $num_filas = mysql_num_rows($consulta2);

  		print "<form action='addPregunta.php' method='POST'>";
  		print "Texto de la pregunta: ";
  		print "<br>";
  		print "<input type='text' name='pregtexto'>";
  		print "<br>";
  		print "<br>";
  		print "<select name='dimension'>";
 			for($i=0;$i<$num_filas;$i++){
 				$resultado = mysql_fetch_array($consulta2);
 				print "<option value='".$resultado['Nombre']."'>".$resultado['Nombre']." </option>"; // Esto lo manda con _request
 			}
 		print "<br/><br/>";
 		print "<input type='submit' value='Enviar'>";
		print "</form>"; 
	?>


</body>
</html>

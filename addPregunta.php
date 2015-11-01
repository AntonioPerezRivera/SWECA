<!DOCTYPE=html>
<html>
<head>
	<title> Portal del administrador </title>
</head>
<body>
<center>
	<?php
		
		$dimension =  $_POST["dimension"];
		$texto = $_POST["pregtexto"];

		$conexion = mysql_connect("localhost","root","root")
 			or die("Imposible conectar con nuestro servidor");

 		mysql_select_db("mydb")
 			or die("No se pudo conectar con la BD");

 		$sentenciaId = "select * from Dimensiones where Nombre='".$dimension."';";
	
		$consulta = mysql_query($sentenciaId,$conexion);
		$resultado = mysql_fetch_array($consulta);

 		//Enviamos la consulta
		 $sentencia2 = "insert into Preguntas set texto='".$texto."' ,tipo='hola' ,Dimensiones_id='".$resultado['id']."'";

		 $consulta2 = mysql_query($sentencia2,$conexion)
		 	or die("fallo en la insercion");

		 print "<p> Su pregunta: '".$pregtexto."' ha sido incluida en la base de datos.";
		 print "<a href='nuevoestudio.html' target='_parent'><button>Volver al portal del administrador</button></a>";
		
	?>


</body>
</html>

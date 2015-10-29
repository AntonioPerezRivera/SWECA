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

		 for($i=0;$i<$num_filas;$i++){
		
		 	$res = mysql_fetch_array($consulta2);
		 	print "<h3> Dimension: ".$res['Nombre']."<h3>";

		 	$sentencia3 = "select * from Preguntas where Dimensiones_id=".$res['id'].";";

		 	$consulta3 = mysql_query($sentencia3,$conexion)
		 		or die("fail");

		 	print mysql_error($conexion);

		 	$num_filas_preg = mysql_num_rows($consulta3);

		 	$a_eliminar = $_REQUEST['borrar'];

			if(!isset($a_eliminar))
			{
			
				if ($num_filas_preg > 0)
		    	{
		      		print ("<FORM METHOD='post' ACTION='eliminarPregunta.php'>");

		      		print ("<TABLE>\n");
		      		print ("<TR>\n");
		      		print ("<TH>Texto</TH>\n");
		      		print("<TH>Eliminar</TH>");
		      		print ("</TR>\n");

		      		for ($j=1; $j<=$num_filas_preg; $j++)
		      		{
		            	$resultado3 = mysql_fetch_array ($consulta3);
		            	print ("<TR>\n");
		            	print ("<TD>" . $resultado3['texto'] . "</TD>\n");
		            	print("<TD align='center'><INPUT  type='checkbox' name='borrar[]' value=".$resultado3['id']."></TD>");
		            	print ("</TR>\n");
		       		}

		        	print ("</TABLE>\n");
		      	}
			
				else
	      		{
	         		print ("No hay preguntas disponibles");
	         		print("<br></br><a href='nuevoestudio.html'>Volver al inicio</a>");
	      		}
	    		
	    		//Cerramos la conexión
	  		}
	  
	  		elseif (isset($a_eliminar)) 
	  		{
	  	
	  			$n_filas_aborrar = count($a_eliminar);
	  			echo "Se ha eliminado la pregunta ";
	  			for ($j=0; $j <$n_filas_aborrar; $j++) 
	  			{ 
			 		$sentencia4 = "DELETE FROM Preguntas WHERE id = ".$a_eliminar[$j];
			 		$consulta4 = mysql_query($sentencia4,$conexion)
			 			or die("fallo en la consulta de eliminar");

			 		print($a_eliminar[$j].". \n");
	  			}
	  			
	  			print("<br></br><a href='estudioPreguntas.php'> Volver a eliminar.</a>");
	  			
	  		}

		 }


		 print("<br></br><button type='submit'> Eliminar preguntas seleccionadas</button>\n");
		 print("</FORM");
         print("<br></br><br></br><a href='noticias.html'>Volver al inicio</a>");
	
	?>


</body>
</html>


<?php

	$conexion = mysql_connect("localhost","root","root")
		or die("No se puede conectar");

	mysql_select_db("mydb");

	$id = $_REQUEST['borrar'];

	if(count($id) == 0){
		print "<h2> ERROR </h2>";
		print "<h2> identificador(es) de pregunta(s) no válidos o nulos </h2>";
	}

	
	else{
		$consultaBaseDelete = "delete from Preguntas where id = ".$id[0];
		$consultaBaseSelect = "select * from Preguntas where id = ".$id[0];

		if(count($id) > 1){
			for($i=1;$i<count($id);$i++){
				$consultaBaseDelete = $consultaBaseDelete." or id = ".$id[$i];
				$consultaBaseSelect = $consultaBaseSelect." or id = ".$id[$i];
			}
		}

		$consultaBaseSelect = $consultaBaseSelect.";";
		$consultaBaseDelete = $consultaBaseDelete.";";
		
		print "<center>\n";
		print "<h2> ATENCION </h2>";
		print "<h4> Se han eliminado las siguientes preguntas: </h4>";

		$consulta = mysql_query($consultaBaseSelect,$conexion);
		$num_filas_preg = mysql_num_rows($consulta);
		
		if ($num_filas_preg > 0)
		{
		   		for ($j=1; $j<=$num_filas_preg; $j++)
		   		{
		            	$resultado3 = mysql_fetch_array ($consulta);
		            	print ("<h5>" . $resultado3['texto'] . "</h5>\n");
		        }
		
		}
	

		$consulta = mysql_query($consultaBaseDelete,$conexion)
			or die("casi");

		mysql_close($conexion);
		print "<a href='nuevoestudio.html' target='_parent'><button>Volver al portal del administrador</button></a>";
		print "</center>\n";
	}

?>
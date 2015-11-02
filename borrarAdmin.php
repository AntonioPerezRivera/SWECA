<!DOCTYPE html>
<html LANG="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK REL="stylesheet" TYPE="text/css" HREF="estilos/estiloAdmin.css">
<header>
	<title>Servicio de administracion</title>
	<img id="img" src="imagenes/banner.png">
</header>
  <body>
		<?php
		session_start();

if(isset($_SESSION['nombre_admin']))
{ 
		 error_reporting(E_ALL & ~E_NOTICE);
		//Conectamos con el servidor de nuestra BD
			$conexion = mysql_connect("localhost","root","root")
			 or die("Imposible conectar con nuestro servidor");

			mysql_select_db("mydb");

		//Enviamos la consulta
			 $sentencia = "Select *  from login;";
			 $consulta = mysql_query($sentencia,$conexion)
			 or die("fallo en la consulta");

		//Mostramos resultados
			 $num_filas = mysql_num_rows($consulta);
			 $a_eliminar = $_REQUEST['borrar'];

		if(!isset($a_eliminar))
		{
			if ($num_filas > 0)
			      {
			      	print "<center>";
			      	print "<h3> Administradores activos: </h3>";
			      	print ("<FORM ACTION='borrarAdmin.php' METHOD='post'>");

			         print ("<TABLE>\n");
			         print ("<TR>\n");
			         print ("<TH>ID</TH>\n");
			         print ("<TH>Nombre</TH>\n");
			         print ("<TH>Contraseña</TH>\n");
			         print ("</TR>\n");

			         for ($i=1; $i<=$num_filas; $i++)
			         {
			            $resultado = mysql_fetch_array ($consulta);
			            print ("<TR>\n");
			            print ("<TD>" . $resultado['id_usuario'] . "</TD>\n");
			            print ("<TD>" . $resultado['Nombre'] . "</TD>\n");
			            print ("<TD>" . $resultado['Contrasena'] . "</TD>\n");
			            print("<TD align='center'><INPUT  type='checkbox' name='borrar[]' value=".$resultado['id_usuario']."></TD>");
			            print ("</TR>\n");
			         }

			         print ("</TABLE>\n");

			         print("<br></br><input type='submit' value='Eliminar administradores seleccionados'/>");
			         print "<br/><br/><br/>";
			         print("</FORM");
			         print "<form action='http://google.com'>";
    				 print "<input type='button' value='Cerrar ventana' onclick='self.close()'>";
    				 print "<br/><br/>";
					 print "</form>";
			         print "<center>";
			      }
			else
		      {
		         print ("No hay mas administradores disponibles");
		      }
		  }
		  elseif (isset($a_eliminar)) 
		  {
		  	$n_filas_aborrar = count($a_eliminar);
		  	print "<br/><br/><br/><center><h3> Se ha eliminado el administrador ";
		  	for ($j=0; $j <$n_filas_aborrar; $j++) 
		  	{ 
				 $sentencia = "DELETE FROM login WHERE id_usuario = ".$a_eliminar[$j];
				 $consulta = mysql_query($sentencia,$conexion)
				 or die("fallo en la consulta");

				 print($a_eliminar[$j].". \n");
				 print "</h3><br/><br/>";
				 print "<input type='button' value='Cerrar ventana' onclick='self.close()'>";
				 print "<br/><br/><br/><br/><center>";
		  	}
		  	//Cerramos la conexión
			 mysql_close($conexion);
		  }
}
else
{
	echo "No ha iniciado sesion";
	print("<br></br><br></br><a href='login.html'>Volver al inicio</a>");

}
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
 
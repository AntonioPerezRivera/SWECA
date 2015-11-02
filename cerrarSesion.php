<!DOCTYPE html>
<html>
<head>
	<title>Cerrar sesion</title>
</head>
	<body>
		<?php
			session_start();

			if(isset($_SESSION['nombre_admin']))
			{	
				session_destroy();
				echo "destruida";
				header("location: index.html");
			}
			else
				echo "No ha iniciado sesion.";
		?>
	</body>
</html>
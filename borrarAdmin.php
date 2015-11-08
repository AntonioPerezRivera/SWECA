
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Borrar administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.html">Iniciar sesion</a>
                    </li>
                    <li>
                        <a href="about.html">Sobre SWECA</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/admin.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>SWECA</h1>
                        <hr class="small">
                        <span class="subheading">Borrar administrador</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
    <center>
        
        <h3> Borrar administrador </h3>
                <p> Desde este portal usted podrá dar de baja a los diferentes administradores de la web en cuestión. Antes de dar de baja a
                alguno de los administradores, póngase en contacto con administracion@sweca.es </p>
                <br/>

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
			      	print "<h4> Administradores activos: </h4><br/>";
			      	print ("<FORM ACTION='borrarAdmin.php' METHOD='post'>");
			         print ("<TABLE>\n");
			         print ("<TR>\n");
			         print ("<TH>  ID   </TH>\t");
			         print ("<TH>  Nombre </TH>\t");
			         print ("<TH>  Contraseña  </TH>\t");
			         print ("<TH>  Eliminar  </TH>\t");
			         print ("</TR>\n");

			         for ($i=1; $i<=$num_filas; $i++)
			         {
			            $resultado = mysql_fetch_array ($consulta);
			            print ("<TR>\n");
			            print ("<TD>" . "   " . $resultado['id_usuario'] . "  " . "</TD>\n");
			            print ("<TD>" . " " . $resultado['Nombre'] . " " . "</TD>\n");
			            print ("<TD>" . " " . $resultado['Contrasena'] . " " . "</TD>\n");
			            print("<TD align='center'><INPUT  type='checkbox' name='borrar[]' value=".$resultado['id_usuario']."></TD>");
			            print ("</TR>\n");
			         }

			         print ("</TABLE>\n");

			         print("<br></br><input type='submit' class='btn btn-default' value='Eliminar administradores seleccionados'/>");
			         print "<br/><br/><br/>";
			         print("</FORM");
			         print "<form action='http://google.com'>";
    				 print "<input type='button' value='Cerrar ventana' class='btn btn-default' onclick='self.close()'>";
    				 print "<br/><br/>";
                     print ("<br/><br/>");
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
				 print "<br/><br/><br/><center>";
		  	}
		  	//Cerramos la conexión
			 mysql_close($conexion);
		  }
}
else
{
	echo "No ha iniciado sesion";
	print("<br></br><br></br><a href='login.html'>Volver al inicio</a>");
    print ("<br/><br/>");
}
		?>

    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="http://github.com/AntonioPerezRivera">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">SWECA &copy; 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
</center>
</body>

</html>
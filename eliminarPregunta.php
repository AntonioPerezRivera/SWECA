
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Gestion de preguntas</title>

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
                        <span class="subheading">Gestion de preguntas</span>
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
		print "<br/><br/><br/>";
		print "<h2> ATENCION </h2>";
		print "<br/>";
		print "<h4> Se han eliminado las siguientes preguntas: </h4><br/>";
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
	
		$consultaRespuestasDelete = "delete from Respuestas where Preguntas_id = ".$id[0];
		$consulta = mysql_query($consultaRespuestasDelete,$conexion);
		$consulta = mysql_query($consultaBaseDelete,$conexion)
			or die(mysql_error());
		mysql_close($conexion);

		print "<p> Esta ventana se cerrara en 5 segundos... </p>";
		print "<script type='text/javascript'>setTimeout('window.close();', 3000);</script>";
		print "<br/><br/><br/><br/>";
		print "</center>\n";
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
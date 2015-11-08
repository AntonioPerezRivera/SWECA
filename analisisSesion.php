
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Analisis de sesion</title>

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
                        <span class="subheading">Analisis de sesion</span>
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

	$conexion = mysql_connect("localhost","root","root");
  mysql_select_db("mydb");

	$consulta1 = "SELECT * FROM EncuestasRellenas 
				WHERE sexo = 'hombre'";
	$consulta2 = "SELECT * FROM EncuestasRellenas 
				WHERE sexo = 'mujer'";			
	$consulta3 = "SELECT * FROM EncuestasRellenas
				WHERE edad = '18-20'";
	$consulta4 = "SELECT * FROM EncuestasRellenas
				WHERE edad = '21-24'";
	$consulta5 = "SELECT * FROM EncuestasRellenas
				WHERE edad = '25-30'";
	$consulta6 = "SELECT * FROM EncuestasRellenas
				WHERE edad = '+30'";	
	$consulta7 = "SELECT * FROM EncuestasRellenas
				WHERE campus = 'Puerto Real'";	
	$consulta8 = "SELECT * FROM EncuestasRellenas
				WHERE campus = 'Cadiz'";
	$consulta9 = "SELECT * FROM EncuestasRellenas
				WHERE campus = 'Jerez'";
	$consulta10 = "SELECT * FROM EncuestasRellenas
				WHERE campus = 'Algeciras'";
	$consulta11 = "SELECT * FROM EncuestasRellenas
				WHERE tipo = 'alumno'";
	$consulta12 = "SELECT * FROM EncuestasRellenas
				WHERE tipo = 'pdi'";
	$consulta13 = "SELECT * FROM EncuestasRellenas
				WHERE tipo = 'pas'";

	$consulta14 = "SELECT * FROM EncuestasRellenas
					WHERE navegador = 'Mozilla Firefox'";

	$consulta15 = "SELECT * FROM EncuestasRellenas
					WHERE navegador = 'Google Chrome'";

	$consulta16 = "SELECT * FROM EncuestasRellenas
					WHERE navegador = 'Internet Explorer'";

	$consulta17 = "SELECT * FROM EncuestasRellenas
					WHERE navegador = 'Otro'";

	


	// Por sexo
	$hombres = mysql_num_rows(mysql_query($consulta1));
	$mujeres =  mysql_num_rows(mysql_query($consulta2));
	$e1820 = mysql_num_rows(mysql_query($consulta3));
	$e2124 = mysql_num_rows(mysql_query($consulta4));
	$e2530 = mysql_num_rows(mysql_query($consulta5));
	$e30 = mysql_num_rows(mysql_query($consulta6));
	$cpreal = mysql_num_rows(mysql_query($consulta7));
	$ccadiz = mysql_num_rows(mysql_query($consulta8));
	$cjerez = mysql_num_rows(mysql_query($consulta9));
	$calgeciras = mysql_num_rows(mysql_query($consulta10));
	$ualum = mysql_num_rows(mysql_query($consulta11));
	$updi = mysql_num_rows(mysql_query($consulta12));
	$upas = mysql_num_rows(mysql_query($consulta13));
	$nMozilla = mysql_num_rows(mysql_query($consulta14));
	$nChrome = mysql_num_rows(mysql_query($consulta15));
	$nIE = mysql_num_rows(mysql_query($consulta16));
	$nOtro = mysql_num_rows(mysql_query($consulta17));

	
?>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Hombres', 'Mujeres'],
          ['Hombres', <?php echo $hombres ?>],
          ['Mujeres', <?php echo $mujeres ?>],

        ]);

        var options = {
          title: 'Sexo'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gSexo'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['18-20', '21-24'],
          ['18-20', <?php echo $e1820 ?>],
          ['21-24', <?php echo $e2124 ?>],
          ['25-30', <?php echo $e2530 ?>],
          ['+30', <?php echo $e30 ?>],

        ]);

        var options = {
          title: 'Edad'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gEdad'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['18-20', '21-24'],
          ['Puerto Real', <?php echo $cpreal ?>],
          ['Cadiz', <?php echo $ccadiz ?>],
          ['Jerez', <?php echo $cjerez ?>],
          ['Algeciras', <?php echo $calgeciras ?>],

        ]);

        var options = {
          title: 'Campus Universitario'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gCampus'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['18-20', '21-24'],
          ['Alumno', <?php echo $ualum ?>],
          ['PAS', <?php echo $upas ?>],
          ['PDI', <?php echo $updi ?>],

        ]);

        var options = {
          title: 'Tipo de usuario'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gTipo'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['18-20','21-24'],
          ['Mozilla Firefox', <?php echo $nMozilla ?>],
          ['Google Chrome', <?php echo $nChrome ?>],
		  ['Internet Explorer', <?php echo $nIE ?>],
		  ['Otros', <?php echo $nOtro ?>]
         
        ]);

        var options = {
          title: 'Navegador'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gNavegador'));
        chart.draw(data, options);
      }
    </script>

  <body>
  <center>

  <h4> Analisis de sesion </h4>
  <p> A continuacion se muestran datos estadisticos interactivos de las sesiones de los usuarios que han realizado la encuesta. Estos datos son meramente
  orientativos. </p>

    <div id="gSexo" style="margin: auto; width: 100%; height: 500px;"></div>

    <div id="gEdad" style="margin: auto; width: 100%; height: 500px;"></div>

    <div id="gCampus" style="margin: auto; width: 100%; height: 500px;"></div>

    <div id="gTipo" style="margin: auto; width: 100%; height: 500px;"></div>

    <div id="gNavegador" style="margin: auto; width: 100%; height: 500px;"></div>
    

    <br/>
    <br/>
    </center>
  </body>
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
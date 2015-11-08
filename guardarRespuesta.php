<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Rellenar encuesta</title>

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
    <header class="intro-header" style="background-image: url('img/encuesta.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>SWECA</h1>
                        <hr class="small">
                        <span class="subheading">Rellenar encuesta</span>
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
	
	//PREGUNTA 1
		switch($_POST["usuario"]){
			case 1: {$usuario = "pas";
			}break;
			case 2:{ $usuario = "pdi";
			}break;
			case 3:{ $usuario = "alumno";
			}break;
		}
	//PREGUNTA 2
		switch($_POST["sexo"]){
			case 1:{ $sexo = "hombre";
			}break;
			case 2:{ $sexo = "mujer";
			}break;
		}
	//PREGUNTA 3


		switch($_POST["edad"]){
			case 1:{ $edad = "18-20";
			}break;
			case 2:{ $edad = "21-24";
			}break;
			case 3:{ $edad = "25-30";
			}break;
			case 4:{ $edad = "+30";
			}break;
		}
	//PREGUNTA 4

		switch($_POST["campus"]){
			case 1:{ $campus = "Cadiz";
			}break;
			case 2:{ $campus = "Puerto Real";
			}break;
			case 3:{ $campus = "Jerez";
			}break;
			case 4:{ $campus = "Algeciras";
			}break;
		}

	//PREGUNTA 5
		switch($_POST["facultad"])
		{
			case 1: { $facultad="Escuela Superior de Ingeniería";
			}break;
			case 2:{ $facultad="Ciencias de Mar y Ambientales";
			}break;
			case 3:{ $facultad="Ciencias de la Educación";
			}break;
			case 4:{ $facultad="Escuela de Ingenierías Marina, Naútica y Radioelectrónica";
			}break;
			case 5:{ $facultad="Ciencias";
			}break;
			case 6:{ $facultad="Escuela Universitaria Ingeniería Naval y Oceánica";
			}break;
			case 7:{ $facultad="Enfermería y Fisioterapia";
			}break;
			case 8:{ $facultad="Ciencias Económicas y Empresariales";
			}break;
			case 9:{ $facultad="Ciencias del Trabajo";
			}break;
			case 10:{ $facultad="Filosofía y Letras";
			}break;
			case 11:{ $facultad="Medicina";
			}break;
			case 12:{ $facultad="Derecho";
			}break;
			case 13:{ $facultad="Ciencias Sociales y de la Comunicación";
			}break;
			case 14:{ $facultad="Escuela Politécnica Superior de Algeciras";
			}break;
			case 15:{ $facultad="Enfermería";
			}break;
			case 16:{ $facultad="Ciencias del Trabajo";
			}break;
			case 17:{ $facultad="Ciencias Económicas y Empresariales";
			}break;
			case 18:{ $facultad="Derecho";
			}break;
		}
	//PREGUNTA 6
		switch($_POST["grado"]){
			case 1:
			{
				$grado="Ingeniería Aeroespacial";
			}break;
			case 2:
			{
				$grado="Ingeniería en Diseño Industrial y Desarrollo de Producto";
			}break;
			case 3:
			{
				$grado="Ingeniería Eléctrica";
			}break;
			case 4:
			{
				$grado="Ingeniería Electrónica Industrial";
			}break;
			case 5:
			{
				$grado="Ingeniería Informática";
			}break;
			case 6:
			{
				$grado="Ingeniería Mecánica";
			}break;
			case 7:
			{
				$grado="Ingeniería en Tecnologías Industriales";
			}break;
			case 8:
			{
				$grado="Ciencias del Mar";
			}break;
			case 9:
			{
				$grado="Ciencias Ambientales";
			}break;
			case 10:
			{
				$grado="Ciencias Ambientales - Ciencias Químicas";
			}break;
			case 11:
			{
				$grado="Ciencias del Mar - Ciencias Ambientales";
			}break;
			case 12:
			{
				$grado="Educación Infantil";
			}break;
			case 13:
			{
				$grado="Educación Primaria";
			}break;
			case 14:
			{
				$grado="Psicologia";
			}break;
			case 15:
			{
				$grado="CC. Actividad Física y del Deporte";
			}break;
			case 16:
			{
				$grado="Ingeniería Marina";
			}break;
			case 17:
			{
				$grado="Náutica y Transporte Marítimo";
			}break;
			case 18:
			{
				$grado="Ingeniería Radioelectrónica";
			}break;
			case 19:
			{
				$grado="Biotecnología";
			}break;
			case 20:
			{
				$grado="Enología";
			}break;
			case 21:
			{
				$grado="Ingeniería Química";
			}break;
			case 22:
			{
				$grado="Matemáticas";
			}break;
			case 23:
			{
				$grado="Ciencias Química";
			}break;
			case 24:
			{
				$grado="Químicas - Ciencias Ambientales";
			}break;
			case 25:
			{
				$grado="Enología - Químicas";
			}break;
			case 26:
			{
				$grado="Arquitectura Naval e Ingeniería Marítima";
			}break;
			case 27:
			{
				$grado="Enfermería";
			}break;
			case 28:
			{
				$grado="Fisioterapia";
			}break;
			case 29:
			{
				$grado="Administración Dirección de Empresas";
			}break;
			case 30:
			{
				$grado="Finanzas y Contabilidad";
			}break;
			case 31:
			{
				$grado="Finanzas y Contabilidad - Relaciones Laborales y Recursos Humanos";
			}break;
			case 32:
			{
				$grado="Grado en Relaciones Laborales y Recursos Humanos";
			}break;
			case 33:
			{
				$grado="Estudios Ingleses";
			}break;
			case 34:
			{
				$grado="Estudios Franceses";
			}break;
			case 35:
			{
				$grado="Historia";
			}break;
			case 36:
			{
				$grado="Estudios Árabes e Islámicos";
			}break;
			case 37:
			{
				$grado="Filología Clásica";
			}break;
			case 38:
			{
				$grado="Humanidades";
			}break;
			case 39:
			{
				$grado="Lingüística y Lenguas Aplicadas";
			}break;
			case 40:
			{
				$grado="Filología Clásica - Estudios Ingleses";
			}break;
			case 41:
			{
				$grado="Estudios Árabes e Islámicos - Estudios Ingleses";
			}break;
			case 42:
			{
				$grado="Escuela Universitaria Ingeniería Naval y Oceánica";
			}break;
			case 43:
			{
				$grado="Filología Hispánica - Estudios Ingleses";
			}break;
			case 44:
			{
				$grado="Lingüística y Lenguas Aplicadas - Estudios Ingleses";
			}break;
			case 45:
			{
				$grado="Medicina";
			}break;
			case 46:
			{
				$grado="Derecho";
			}break;
			case 47:
			{
				$grado="Criminología";
			}break;
			case 48:
			{
				$grado="Grado en Administracion de Empresas - Derecho";
			}break;
			case 49:
			{
				$grado="Marketing e Investigación de Mercados";
			}break;
			case 50:
			{
				$grado="Gestión y Administración Pública";
			}break;
			case 51:
			{
				$grado="Turismo";
			}break;
			case 52:
			{
				$grado="Publicidad y Relaciones Públicas";
			}break;
			case 53:
			{
				$grado="Ingeniería en Tecnologías Industriales";
			}break;
			case 54:
			{
				$grado="Ingeniería Civil";
			}break;
			case 55:
			{
				$grado="Ingeniería Eléctrica";
			}break;
			case 56:
			{
				$grado="Ingeniería Electrónica Industrial";
			}break;
			case 57:
			{
				$grado="Ingeniería Mecánica";
			}break;
			case 58:
			{
				$grado="Ingeniería Química";
			}break;
			case 59:
			{
				$grado="Enfermería";
			}break;
			case 60:
			{
				$grado="Relaciones Laborales y Recursos Humanos";
			}break;
			case 61:
			{
				$grado="Administración y Dirección de Empresas";
			}break;
			case 62:
			{
				$grado="Derecho";
			}break;
		}
	
		
		$biblioteca = "Biblioteca de la Escuela Superior de Ingenieria";


		if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
   			$buscador = "Internet explorer";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)
    		$buscador = "Internet explorer";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
   			$buscador = "Mozilla Firefox";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   			$buscador = "Google Chrome";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
   			$buscador = "Opera Mini";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
   			$buscador = "Opera";
 		elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
   			$buscador = "Safari";

   		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    		$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
    		$ip = $_SERVER['REMOTE_ADDR'];
		}

		$conexion = mysql_connect("localhost","root","root")
			or die ("No se puede conectar");

		mysql_select_db("mydb");
		$sentencia2 = "insert into EncuestasRellenas set id_Estudios=1 ,biblioteca='$biblioteca' ,grado='$grado' ,campus='$campus', facultad='$facultad', tipo='$usuario', edad='$edad', ip='$ip', navegador='$buscador', sexo='$sexo';";

		$resultado = mysql_query($sentencia2,$conexion)
			or die(mysql_error());

		$sentencia = "SELECT max(id) as maximo FROM EncuestasRellenas;";
		$sentencia = "select * from EncuestasRellenas order by id desc limit 0, 1;";


		$resultado = mysql_query($sentencia,$conexion)
			or die(mysql_error());

		$res =  mysql_fetch_array($resultado);
		$id_EncuestaRellena = $res['id'];


		$sentencia = "select id from Preguntas";
		$consulta = mysql_query($sentencia,$conexion)
			or die(mysql_error());

		$num_filas=mysql_num_rows($consulta);

		for($i=0;$i<$num_filas;$i++) {
			$resultado = mysql_fetch_array($consulta);

			$id_preg = $resultado['id'];
			$val = "valor".$id_preg;
			$valor = $_POST[$val];

			$sentencia = "insert into Respuestas set valor = $valor, Preguntas_id='$id_preg', EncuestasRellenas_id = $id_EncuestaRellena;";

			$resultado = mysql_query($sentencia,$conexion)
				or die(mysql_error());
		}
			print "<h3> Su respuesta ha sido almacenada. </h3>";
			print "<h4> Gracias por participar </h4>";
			print "<p> Sera redirigido en 5 segundos...</p>";
		 	print "<script>";
 		 	print "function r() { location.href='index.html' }"; 
 		 	print "setTimeout ('r()', 5000);";
		 	print "</script>"; 
		
		
?>


    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
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









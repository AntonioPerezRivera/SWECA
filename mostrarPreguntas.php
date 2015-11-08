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
            
            <h3> Datos del usuario </h3>
            <br/><br/>

            <FORM id="formulario" method=post action=guardarRespuesta.php>
  
            Tipo de usuario:
            
            <div class='select-style2'>

            <SELECT NAME=usuario>
            <OPTION cheked> 
            <OPTION VALUE=1> PAS
            <OPTION VALUE=2> PDI
            <OPTION VALUE=3> Alumno
            </SELECT>
            </div>
            <br><br>

            Sexo:
            <div class='select-style2'>
            <SELECT NAME=sexo>
            <OPTION cheked> 
            <OPTION VALUE=1> Hombre
            <OPTION VALUE=2> Mujer
            </SELECT>
            </div>
            <br><br>

            Intervalo de edad:
            <div class='select-style2'>
            <SELECT NAME=edad>
            <OPTION cheked> 
            <OPTION VALUE=1> 18-20
            <OPTION VALUE=2> 21-24
            <OPTION VALUE=3> 25-30
            <OPTION VALUE=4> +30
            </SELECT>
            </div>
            <br/><br/>

            Campus:
            <div class='select-style2'>
            <SELECT id='campus' NAME=campus>
            <OPTION cheked> 
            <OPTION VALUE=1> Campus de Puerto Real
            <OPTION VALUE=2> Campus de Cádiz
            <OPTION VALUE=3> Campus de Jerez
            <OPTION VALUE=4> Campus de Algeciras
            </SELECT>
            </div>
            <br/><br/>

            Facultad/Escuela:
            <div class='select-style2'>
            <SELECT id="facultad" NAME=facultad>
            <OPTION cheked>
            <OPTION VALUE=1> Escuela Superior de Ingeniería
            <OPTION VALUE=2> Facultad de Ciencias de Mar y Ambientales
            <OPTION VALUE=3> Facultad de Ciencias de la Educación
            <OPTION VALUE=4> Escuela de Ingenierías Marina, Naútica y Radioelectrónica
            <OPTION VALUE=5> Facultad de Ciencias
            <OPTION VALUE=6> Escuela Universitaria Ingeniería Naval y Oceánica
            <OPTION VALUE=7> Facultad de Enfermería y Fisioterapia
            <OPTION VALUE=8> Facultad de Ciencias Económicas y Empresariales
            <OPTION VALUE=9> Facultad de Ciencias del Trabajo
            <OPTION VALUE=10> Facultad de Filosofía y Letras
            <OPTION VALUE=11> Facultad de Medicina
            <OPTION VALUE=12> Facultad de Derecho
            <OPTION VALUE=13> Facultad de Ciencias Sociales y de la Comunicación
            <OPTION VALUE=14> Escuela Politécnica Superior de Algeciras
            <OPTION VALUE=15> Facultad de Enfermería
            <OPTION VALUE=16> Facultad de Ciencias del Trabajo
            <OPTION VALUE=17> Facultad de Ciencias Económicas y Empresariales
            <OPTION VALUE=18>Facultad de Derecho
            </SELECT>
            </div>
            <br/><br/>

           Grado:
           <div class='select-style2'>
          <SELECT id="grado" NAME=grado>
          <OPTION cheked>
          <OPTION VALUE=1> Grado en Ingeniería Aeroespacial
          <OPTION VALUE=2> Grado en Ingeniería en Diseño Industrial y Desarrollo de Producto
          <OPTION VALUE=3> Grado en Ingeniería Eléctrica
          <OPTION VALUE=4> Grado en Ingeniería Electrónica Industrial
          <OPTION VALUE=5> Grado en Ingeniería Informática
          <OPTION VALUE=6> Grado en Ingeniería Mecánica
          <OPTION VALUE=7> Grado en Ingeniería en Tecnologías Industriales
          <OPTION VALUE=8> Grado en Ciencias del Mar
          <OPTION VALUE=9> Grado en Ciencias Ambientales
          <OPTION VALUE=10> Dobles títulos Ciencias Ambientales - Ciencias Químicas
          <OPTION VALUE=11> Dobles títulos Ciencias del Mar - Ciencias Ambientales
          <OPTION VALUE=12> Grado en Educación Infantil
          <OPTION VALUE=13> Grado en Educación Primaria
          <OPTION VALUE=14> Grado en Psicologia
          <OPTION VALUE=15> Grado en CC. Actividad Física y del Deporte
          <OPTION VALUE=16> Grado en Ingeniería Marina
          <OPTION VALUE=17> Grado en Náutica y Transporte Marítimo
          <OPTION VALUE=18> Grado en Ingeniería Radioelectrónica
          <OPTION VALUE=19> Grado en Biotecnología
          <OPTION VALUE=20> Grado en Enología
          <OPTION VALUE=21> Grado en Ingeniería Química
          <OPTION VALUE=22> Grado en Matemáticas
          <OPTION VALUE=23> Grado en Ciencias Química
          <OPTION VALUE=24> Dobles títulos Químicas - Ciencias Ambientales
          <OPTION VALUE=25> Dobles títulos Enología - Químicas
          <OPTION VALUE=26> Grado en Arquitectura Naval e Ingeniería Marítima
          <OPTION VALUE=27> Grado en Enfermería
          <OPTION VALUE=28> Grado en Fisioterapia
          <OPTION VALUE=29> Grado en Administración Dirección de Empresas
          <OPTION VALUE=30> Grado en Finanzas y Contabilidad
          <OPTION VALUE=31> Doble Grado en Finanzas y Contabilidad y Relaciones Laborales y Recursos Humanos
          <OPTION VALUE=32> Grado en Relaciones Laborales y Recursos Humanos
          <OPTION VALUE=33> Grado en Estudios Ingleses
          <OPTION VALUE=34> Grado en Estudios Franceses
          <OPTION VALUE=35> Grado en Historia
          <OPTION VALUE=36>Grado en Estudios Árabes e Islámicos
          <OPTION VALUE=37> Grado en Filología Clásica
          <OPTION VALUE=38>Grado en Humanidades
          <OPTION VALUE=39> Grado en Lingüística y Lenguas Aplicadas
          <OPTION VALUE=40>Doble Grado en Filología Clásica y Estudios Ingleses
          <OPTION VALUE=41> Doble Grado en Estudios Árabes e Islámicos y Estudios Ingleses 
          <OPTION VALUE=42> Doble Grado en Estudios Franceses y Estudios Ingleses
          <OPTION VALUE=43> Doble Grado en Filología Hispánica y Estudios Ingleses
          <OPTION VALUE=44> Doble Grado en Lingüística y Lenguas Aplicadas y Estudios Ingleses
          <OPTION VALUE=45> Grado en Medicina
          <OPTION VALUE=46> Grado en Derecho
          <OPTION VALUE=47> Grado en Criminología
          <OPTION VALUE=48> Doble Grado en Administracion de Empresas y Derecho
          <OPTION VALUE=49> Grado en Marketing e Investigación de Mercados
          <OPTION VALUE=50> Grado en Gestión y Administración Pública
          <OPTION VALUE=51> Grado en Turismo
          <OPTION VALUE=52> Grado en Publicidad y Relaciones Públicas
          <OPTION VALUE=53> Grado en Ingeniería en Tecnologías Industriales
          <OPTION VALUE=54> Grado en Ingeniería Civil
          <OPTION VALUE=55> Grado en Ingeniería Eléctrica
          <OPTION VALUE=56> Grado en Ingeniería Electrónica Industrial
          <OPTION VALUE=57> Grado en Ingeniería Mecánica
          <OPTION VALUE=58> Grado en Ingeniería Química
          <OPTION VALUE=59> Grado en Enfermería
          <OPTION VALUE=60> Grado en Relaciones Laborales y Recursos Humanos
          <OPTION VALUE=61> Grado en Administración y Dirección de Empresas
          <OPTION VALUE=62> Grado en Derecho
      </SELECT>
      </div>
      <br/><br/>

  <?php
  

    // Por defecto elegiremos el de la biblioteca.
    $estudioSeleccionado =  "Biblioteca";

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

     print "<br/>";
     print "<h3> Preguntas </h3>";
     print "<br/>";
    //Mostramos resultados
     $num_filas = mysql_num_rows($consulta2);


     for($i=0;$i<$num_filas;$i++){
    
      $res = mysql_fetch_array($consulta2);
      print "<br/><br/><h4>".$res['Nombre']."<h4>";

      $sentencia3 = "select * from Preguntas where Dimensiones_id=".$res['id'].";";

      $consulta3 = mysql_query($sentencia3,$conexion)
        or die("fail");

      $num_filas_preg = mysql_num_rows($consulta3);
      if ($num_filas_preg > 0)
          {
              print ("<FORM METHOD='post' ACTION='guardarRespuesta.php'>");
              print ("<TABLE>");
              print "<br/><br/>";

              for ($j=1; $j<=$num_filas_preg; $j++)
              {
                  $resultado3 = mysql_fetch_array ($consulta3);
                  print ("<TR>");
                  print ("<TD>" . $resultado3['texto'] . "</TD>");
                  print "<TD>";
                  print "<div class='selectstyle2'>";
                  print "<SELECT NAME='valor".$resultado3['id']."'>";
                  for($opt=0;$opt<10;$opt++){
                    print "<br/>";
                    print "<OPTION VALUE='".$opt."'>".$opt."</OPTION>";

                  }
                  print "</SELECT>";
                  print "</div>";
                  print "</TD>";
                  print ("</TR>\n");
              }
              print ("</TABLE>\n");
            }
      
        else
            {
              print ("No hay preguntas disponibles");
            }
          
          //Cerramos la conexión
        }
        print ("<br/><br/>");
        print "<input type='submit' value='Enviar' id='enviar' class='btn btn-default'/>";
        print ("<br/><br/>");

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
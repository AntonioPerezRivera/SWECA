
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

         print "<br/>";
         print "<h3> Pregunas almacenadas: </h3>";
         print "<br/>";
        //Mostramos resultados
         $num_filas = mysql_num_rows($consulta2);

         for($i=0;$i<$num_filas;$i++){
        
            $res = mysql_fetch_array($consulta2);
            print "<h4> Dimension: ".$res['Nombre']."</h4>";

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
                    print "<br/><br/>";
                }
            
                else
                {
                    print ("No hay preguntas disponibles");
                    print "<br/><br/>";
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


         print "<br></br>";
         print "<input type='submit' value='Eliminar seleccionadas' class='btn btn-default'>";
         print("</FORM");
         print("<br></br><br></br><a href='indexadmin.html'>Volver al inicio</a>");
         print "<br/>";
         print "<br/>";
         print "<br/>";
    
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Portal del administrador</title>

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
                <a class="navbar-brand" href="index.html">SWECA</a>
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
                    <div class="site-heading">
                        <h1>SWECA</h1>
                        <hr class="small">
                        <span class="subheading">Portal del administrador</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                

<?php
            session_start();

            //Conectamos con el servidor de nuestra BD
            $conexion = mysql_connect("localhost","root","root")
             or die("Imposible conectar con nuestro servidor");

            mysql_select_db("mydb");

            //Enviamos la consulta
             $sentencia = "Select *  from login order by id_usuario asc";
             $consulta = mysql_query($sentencia,$conexion)
             or die("fallo en la consulta"); 

             $num_filas = mysql_num_rows($consulta);
             $nombre = $_REQUEST['nombre'];
             $contraseña = $_REQUEST['contraseña'];

             if (!empty($nombre) && !empty($contraseña)) 
             {

                     $i= 1; $encontrado = false;
                     while ($i <= $num_filas && $encontrado == false) 
                     {
                        $usuarios = mysql_fetch_array($consulta);

                        if($nombre == $usuarios['Nombre'] && $contraseña == $usuarios['Contrasena'])
                            $encontrado = true;
            
                        $i++;
                     }

                 if ($encontrado)
                 {
                    $_SESSION['nombre_admin'] = $nombre;
                 }
                 else
                    header("location: login.html");
            }
            else
                header("location: login.html");

        /*if(isset($_SESSION['nombre_admin']))
        {
            echo "HOLAAAAAAAAAAAAAAAAAA";}
        else
        {
            echo "No ha iniciado sesion";
            print("<br></br><br></br><a href='login.html'>Volver al inicio</a>");

        }*/
?> 
    <center>
        
        <h3> Portal del administrador </h3>
                <p> Desde este portal podrá realizar las tareas necesarias de gestión de las preguntas y de los administradores de éstas. Seleccione
                una de las opciones que se muestran a continuación: </p>
                <br/>
                <form method="POST">
                <input class="btn btn-default" type="button" value="Nuevo admin" onClick="window.open('nuevoAdmin.html')">
                <input class="btn btn-default" type="button" value="Borrar admin" onClick="window.open('borrarAdmin.php')">
                <input class="btn btn-default" type="button" value="Gestionar preguntas" onClick="window.open('portalAdminEditar.php')">
                <input class="btn btn-default" type="button" value="Añadir nuevas preguntas" onClick="window.open('portalAdminAnadir.php')">
                <input class="btn btn-default" type="button" value="Analisis" onClick="window.open('seleccionaAnalisis.html')">
                <input class="btn btn-default" type="button" value="Cerrar sesión" onClick="window.open('cerrarSesion.php')">
                <br/>
                <br/>
                <br/>
                
            </form>
    </center>
    <!-- Footer -->
    </div>


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

</body>
</html>

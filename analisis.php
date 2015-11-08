<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SWECA - Analisis de satisfaccion</title>

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
                        <span class="subheading">Analisis</span>
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
    
    error_reporting(~E_ALL & ~E_NOTICE);
    $conexion = mysql_connect("localhost","root","root");
    mysql_select_db("mydb");

    $tipo="0";
    $sexo="0";
    $edad="0";
    $campus="0";
    $facultad="0";
    $grado="0";
    $biblioteca="0";

    //PREGUNTA 1
        if ($_POST["tipo"]==1){
            $tipo="pas"; 
        }else if($_POST["tipo"]==2){
                $tipo="pdi";
            }else if($_POST["tipo"]==3){
                    $tipo="alumno";
                }
    //PREGUNTA 2
        if ($_POST["sexo"]==1)
        {
            $sexo="hombre"; 
        }else if($_POST["sexo"]==2)
            $sexo="mujer"; 
    //PREGUNTA 3
        if($_POST["edad"]==1){
            $edad="18-20";
        }else if($_POST["edad"]==2){
                $edad="21-24";
            }else if($_POST["edad"]==3){
                    $edad="25-30";
                }else if($_POST["edad"]==4){
                        $edad="+30";
                    }
    //PREGUNTA 4
        if($_POST["campus"]==1){
            $campus="Puerto Real";
        }else if($_POST["campus"]==2){
                $campus="Cadiz";
            }else if($_POST["campus"]==3){
                    $campus="Jerez";
                }else if($_POST["campus"]==4){
                        $campus="Algeciras";
                    }
    //PREGUNTA 5
        switch($_POST["facultad"])
        {
            case 1:
            {
                $facultad="Escuela Superior de Ingeniería";
            }break;
            case 2:
            {
                $facultad="Ciencias de Mar y Ambientales";
            }break;
            case 3:
            {
                $facultad="Ciencias de la Educación";
            }break;
            case 4:
            {
                $facultad="Escuela de Ingenierías Marina, Naútica y Radioelectrónica";
            }break;
            case 5:
            {
                $facultad="Ciencias";
            }break;
            case 6:
            {
                $facultad="Escuela Universitaria Ingeniería Naval y Oceánica";
            }break;
            case 7:
            {
                $facultad="Enfermería y Fisioterapia";
            }break;
            case 8:
            {
                $facultad="Ciencias Económicas y Empresariales";
            }break;
            case 9:
            {
                $facultad="Ciencias del Trabajo";
            }break;
            case 10:
            {
                $facultad="Filosofía y Letras";
            }break;
            case 11:
            {
                $facultad="Medicina";
            }break;
            case 12:
            {
                $facultad="Derecho";
            }break;
            case 13:
            {
                $facultad="Ciencias Sociales y de la Comunicación";
            }break;
            case 14:
            {
                $facultad="Escuela Politécnica Superior de Algeciras";
            }break;
            case 15:
            {
                $facultad="Enfermería";
            }break;
            case 16:
            {
                $facultad="Ciencias del Trabajo";
            }break;
            case 17:
            {
                $facultad="Ciencias Económicas y Empresariales";
            }break;
            case 18:
            {
                $facultad="Derecho";
            }break;
        }
    //PREGUNTA 6
        switch($_POST["grado"])
        {
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
    //PREGUNTA 7
        switch($_POST["biblioteca"])
        {
            case 1:
            {
                $biblioteca="Biblioteca de la facultad de Enefermería y Fisioterapia";
            }break;
            case 2:
            {
                $biblioteca="Edificio de Servicios Centrales Andrés Segovia";
            }break;
            case 3:
            {
                $biblioteca="Biblioteca de Ciencias Sociales y Juridicas";
            }break;
            case 4:
            {
                $biblioteca="Biblioteca de la facultad de Humanidades";
            }break;
            case 5:
            {
                $biblioteca="Biblioteca del Campus de Puerto Real";
            }break;
            case 6:
            {
                $biblioteca="Biblioteca de la Escuela Superior de Ingenieria";
            }break;
            case 7:
            {
                $biblioteca="Biblioteca del Campus de Jerez";
            }break;
            case 8:
            {
                $biblioteca="Biblioteca de la Escuela Politécnica Superior de Ingeniería de Algeciras";
            }break;
            case 9:
            {
                $biblioteca="Facultad de Enfermería de Algeciras";
            }break;
        }

    if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
        $query = "SELECT id FROM EncuestasRellenas";
    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
        $query = "SELECT id FROM EncuestasRellenas
                WHERE biblioteca = '$biblioteca' ";
    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
            $query = "SELECT id FROM EncuestasRellenas
                    WHERE grado = '$grado' ";
        }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                $query = "SELECT id FROM EncuestasRellenas
                        WHERE facultad = '$facultad' ";
            }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                    $query = "SELECT id FROM EncuestasRellenas
                            WHERE campus = '$campus' ";
                }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                        $query = "SELECT id FROM EncuestasRellenas
                                WHERE edad = '$edad' ";
                    }else if($tipo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                            $query = "SELECT id FROM EncuestasRellenas
                                    WHERE sexo = '$sexo' ";
                        }else if($sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                $query = "SELECT id FROM EncuestasRellenas
                                        WHERE tipo = '$tipo' ";
                            }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0"){
                                    $query = "SELECT id FROM EncuestasRellenas
                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado'";
                                }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $grado=="0"){
                                        $query = "SELECT id FROM EncuestasRellenas
                                                WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' ";
                                    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $facultad=="0" && $grado=="0"){
                                            $query = "SELECT id FROM EncuestasRellenas
                                                    WHERE biblioteca = '$biblioteca' AND campus = '$campus'";
                                        }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                $query = "SELECT id FROM EncuestasRellenas
                                                        WHERE biblioteca = '$biblioteca' AND edad = '$edad' ";
                                            }else if($tipo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                    $query = "SELECT id FROM EncuestasRellenas
                                                            WHERE biblioteca = '$biblioteca' AND sexo = '$sexo' ";
                                                }else if($sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                WHERE biblioteca = '$biblioteca' AND tipo = '$tipo' ";
                                                    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0" && $biblioteca=="0"){
                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                    WHERE grado = '$grado' AND facultad = '$facultad' ";
                                                        }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                        WHERE grado = '$grado' AND campus = '$campus' ";
                                                            }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                            WHERE grado = '$grado' AND edad = '$edad' ";
                                                                }else if($tipo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                WHERE grado = '$grado' AND sexo = '$sexo' ";
                                                                    }else if($sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                    WHERE grado = '$grado' AND tipo = '$tipo' ";
                                                                        }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                        WHERE facultad = '$facultad' AND campus = '$campus' ";
                                                                            }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                            WHERE facultad = '$facultad' AND edad = '$edad' ";
                                                                                }else if($tipo=="0" && $edad=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                WHERE facultad = '$facultad' AND sexo = '$sexo' ";
                                                                                    }else if($sexo=="0" && $edad=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                    WHERE facultad = '$facultad' AND tipo = '$tipo' ";
                                                                                        }else if($tipo=="0" && $sexo=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                        WHERE campus = '$campus' AND edad = '$edad' ";
                                                                                            }else if($tipo=="0" && $edad=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                            WHERE campus = '$campus' AND sexo = '$sexo' ";
                                                                                                }else if($sexo=="0" && $edad=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                WHERE campus = '$campus' AND tipo = '$tipo' ";
                                                                                                    }else if($tipo=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                    WHERE edad = '$edad' AND sexo = '$sexo' ";
                                                                                                        }else if($sexo=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                        WHERE edad = '$edad' AND tipo = '$tipo' ";
                                                                                                            }else if($edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                            WHERE sexo = '$sexo' AND tipo = '$tipo' ";                                                                                                                      
                                                                                                                }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $campus=="0"){
                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND facultad = '$facultad' ";
                                                                                                                    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $facultad=="0"){
                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND campus = '$campus' ";
                                                                                                                        }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND edad = '$edad' ";
                                                                                                                            }else if($tipo=="0" && $edad=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND sexo = '$sexo' ";
                                                                                                                                }else if($sexo=="0" && $edad=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND tipo = '$tipo' ";
                                                                                                                                    }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $grado=="0"){
                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND campus = '$campus' ";
                                                                                                                                        }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND edad = '$edad' ";
                                                                                                                                            }else if($tipo=="0" && $edad=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND sexo = '$sexo' ";
                                                                                                                                                }else if($sexo=="0" && $edad=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND tipo = '$tipo' ";
                                                                                                                                                    }else if($tipo=="0" && $sexo=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND edad = '$edad' ";
                                                                                                                                                        }else if($tipo=="0" && $edad=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND sexo = '$sexo' ";
                                                                                                                                                            }else if($sexo=="0" && $edad=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND tipo = '$tipo' ";
                                                                                                                                                                }else if($tipo=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                    }else if($sexo=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                        }else if($edad=="0" && $campus=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                            }else if($tipo=="0" && $sexo=="0" && $edad=="0" && $biblioteca=="0"){
                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                        WHERE grado = '$grado' AND facultad = '$facultad' AND campus = '$campus' ";
                                                                                                                                                                                }else if($tipo=="0" && $sexo=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                            WHERE grado = '$grado' AND facultad = '$facultad' AND edad = '$edad' ";
                                                                                                                                                                                    }else if($tipo=="0" && $edad=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                WHERE grado = '$grado' AND facultad = '$facultad' AND sexo = '$sexo' ";
                                                                                                                                                                                        }else if($sexo=="0" && $edad=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                    WHERE grado = '$grado' AND facultad = '$facultad' AND tipo = '$tipo' ";
                                                                                                                                                                                            }else if($tipo=="0" && $sexo=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                        WHERE grado = '$grado' AND campus = '$campus' AND edad = '$edad' ";
                                                                                                                                                                                                }else if($tipo=="0" && $edad=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                            WHERE grado = '$grado' AND campus = '$campus' AND sexo = '$sexo' ";
                                                                                                                                                                                                    }else if($sexo=="0" && $edad=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                WHERE grado = '$grado' AND campus = '$campus' AND tipo = '$tipo' ";
                                                                                                                                                                                                    }else if($tipo=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                WHERE grado = '$grado' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                        }else if($sexo=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                    WHERE grado = '$grado' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                            }else if($edad=="0" && $campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                        WHERE grado = '$grado' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                }else if($tipo=="0" && $sexo=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                            WHERE facultad = '$facultad' AND campus = '$campus' AND edad = '$edad' ";
                                                                                                                                                                                                                    }else if($tipo=="0" && $edad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                WHERE facultad = '$facultad' AND campus = '$campus' AND sexo = '$sexo' ";
                                                                                                                                                                                                                        }else if($sexo=="0" && $edad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                    WHERE facultad = '$facultad' AND campus = '$campus' AND tipo = '$tipo' ";
                                                                                                                                                                                                                            }else if($tipo=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                        WHERE facultad = '$facultad' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                }else if($sexo=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                            WHERE facultad = '$facultad' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                    }else if($edad=="0" && $campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                WHERE facultad = '$facultad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                        }else if($tipo=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                    WHERE campus = '$campus' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                            }else if($sexo=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                        WHERE campus = '$campus' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                }else if($edad=="0" && $facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                            WHERE campus = '$campus' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                    }else if($campus=="0" && $grado=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                WHERE edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                        }else if($tipo=="0" && $sexo=="0" && $edad=="0"){
                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                    facultad = '$facultad' AND campus = '$campus' ";
                                                                                                                                                                                                                                                            }else if($tipo=="0" && $sexo=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                        facultad = '$facultad' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                }else if($tipo=="0" && $edad=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                            facultad = '$facultad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                    }else if($sexo=="0" && $edad=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                facultad = '$facultad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                        }else if($tipo=="0" && $sexo=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                    edad = '$edad' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                            }else if($tipo=="0" && $edad=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                        sexo = '$sexo' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                            }else if($sexo=="0" && $edad=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                        tipo = '$tipo' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                                }else if($tipo=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                            sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                    }else if($sexo=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                        }else if($edad=="0" && $campus=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                            }else if($tipo=="0" && $sexo=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                        edad = '$edad' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                                                }else if($tipo=="0" && $edad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                            sexo = '$sexo' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                                                    }else if($sexo=="0" && $edad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND campus = '$campus' ";
                                                                                                                                                                                                                                                                                                        }else if($tipo=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                    sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                            }else if($sexo=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                        tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                }else if($edad=="0" && $campus=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                            tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                    }else if($tipo=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                        }else if($sexo=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                            }else if($edad=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                        tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                }else if($campus=="0" && $facultad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                            tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                    }else if($tipo=="0" && $sexo=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                campus = '$campus' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                        }else if($tipo=="0" && $edad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                    WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                    campus = '$campus' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                            }else if($sexo=="0" && $edad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                        WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                        campus = '$campus' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                }else if($tipo=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                            WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                            sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                    }else if($sexo=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                        }else if($edad=="0" && $campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                    WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                            }else if($tipo=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                        WHERE grado = '$grado' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                        sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                                }else if($sexo=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                            WHERE grado = '$grado' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                            tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                                    }else if($edad=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                WHERE grado = '$grado' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                        }else if($campus=="0" && $facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                    WHERE grado = '$grado' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                            }else if($tipo=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                        WHERE facultad = '$facultad' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                        sexo = '$sexo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                                                }else if($sexo=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                            WHERE facultad = '$facultad' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                            tipo = '$tipo' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                                                    }else if($edad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                WHERE facultad = '$facultad' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                        }else if($campus=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                    WHERE facultad = '$facultad' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                            }else if($facultad=="0" && $grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                        WHERE campus = '$campus' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                        tipo = '$tipo' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                }else if($tipo=="0" && $sexo=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                facultad = '$facultad' AND campus = '$campus' AND edad = '$edad' ";
                                                                                                                                                                                                                                                                                                                                                                                                    }else if($tipo=="0" && $edad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                facultad = '$facultad' AND campus = '$campus' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                        }else if($tipo=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                    facultad = '$facultad' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                            }else if($tipo=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                        campus = '$campus' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                }else if($tipo=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                            campus = '$campus' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($tipo=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                            WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                campus = '$campus' AND edad = '$edad' AND sexo = '$sexo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($sexo=="0" && $edad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                     facultad = '$facultad' AND campus = '$campus' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($sexo=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                         facultad = '$facultad' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                }else if($sexo=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                             campus = '$campus' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($sexo=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                 campus = '$campus' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($sexo=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                     campus = '$campus' AND edad = '$edad' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($edad=="0" && $campus=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                         facultad = '$facultad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                }else if($edad=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                             campus = '$campus' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($edad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                            WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                 campus = '$campus' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($edad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                     campus = '$campus' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($campus=="0" && $facultad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE biblioteca = '$biblioteca' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                         edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                }else if($campus=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE biblioteca = '$biblioteca' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($campus=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            WHERE grado = '$grado' AND facultad = '$facultad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($facultad=="0" && $grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE biblioteca = '$biblioteca' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($facultad=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE grado = '$grado' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }else if($grado=="0" && $biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE facultad = '$facultad' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             edad = '$edad' AND sexo = '$sexo' AND tipo = '$tipo' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($tipo=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        campus = '$campus' AND facultad = '$facultad' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($sexo=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE tipo = '$tipo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            campus = '$campus' AND facultad = '$facultad' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($edad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE sexo = '$sexo' AND tipo = '$tipo' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                campus = '$campus' AND facultad = '$facultad' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }else if($campus=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            WHERE sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    tipo = '$tipo' AND facultad = '$facultad' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    }else if($facultad=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                WHERE sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        tipo = '$tipo' AND campus = '$campus' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }else if($grado=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            tipo = '$tipo' AND facultad = '$facultad' AND campus = '$campus' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            biblioteca = '$biblioteca' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            }else if($biblioteca=="0"){
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        WHERE sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                tipo = '$tipo' AND facultad = '$facultad' AND grado = '$grado' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                campus = '$campus' ";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }else{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $query = "SELECT id FROM EncuestasRellenas
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    WHERE tipo = '$tipo' AND sexo = '$sexo' AND edad = '$edad' AND
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            campus = '$campus' AND facultad = '$facultad' AND grado = '$grado' AND biblioteca = '$biblioteca' ";}                       

    $result = mysql_query($query);
    $numPersonas=mysql_num_rows($result);

    if($numPersonas==0){
        echo "<script>alert('No se encuentran coincidencias')</script>";
        echo "<script>";
        echo    "function r() { location.href='filtroAnalisis.html' } ";
        echo    "setTimeout ('r()', 0);";
        echo "</script>";
    }
    $flag = true;

    while($tabla = mysql_fetch_array($result)){
        $id = $tabla['id'];
        $orden = "SELECT valor FROM Respuestas
                    WHERE EncuestasRellenas_id = '$id'";
        $resultado = mysql_query($orden)
            or die(mysql_error());    

        $numPreguntas=mysql_num_rows($resultado);
        if($flag){
            for($j=0;$j<$numPreguntas;$j++){
                $vectorRespuestas[$j]=0;
                $vectorPreguntas[$j]='array';
            }
            $flag = false;
        }
        $i=0;
        while($tabla2 = mysql_fetch_array($resultado)){
            $vectorRespuestas[$i] = $tabla2['valor'] + $vectorRespuestas[$i];
            $i++;
        }
    }
    $resultado = mysql_query("SELECT texto FROM Preguntas")
        or die(mysql_error());
    $p=0;
    while($tablaPregunta = mysql_fetch_array($resultado)){
        $vectorPreguntas[$p] = $tablaPregunta['texto'];
        $p++;
    }

    print $valores[0];

?>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['18-20', '21-24'],
           <?php for($j=0;$j<$numPreguntas;$j++){ ?>
                ['<?php echo "Media pregunta ". ($j+1)?>',  <?php echo $vectorRespuestas[$j]/$numPersonas; ?>],    
                <?php } ?>
            ]);

        var options = {
          title: 'Diagrama de sectores - Respuestas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('gGeneral'));
        chart.draw(data, options);
      }
    </script>



    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Year', 'Media real'],
                <?php for($j=0;$j<$numPreguntas;$j++){ ?>
                ['<?php echo "Pregunta ".($j+1)?>',  <?php echo $vectorRespuestas[$j]/$numPersonas ?>],    
                <?php } ?>
            ]);

            var options = {
                title: 'Diagrama de barras - Respuestas',
                hAxis: {title: '', titleTextStyle: {color: 'red'}}
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);

        }
</script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["table"]});
      google.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pregunta');
        data.addColumn('number', 'Media');
        data.addRows([
            <?php for($j=0;$j<$numPreguntas;$j++){ ?>
            ['<?php echo $vectorPreguntas[$j] ?>',  {v: <?php echo $vectorRespuestas[$j]/$numPersonas ?>, f: '<?php echo $vectorRespuestas[$j]/$numPersonas ?>'}],
            <?php } ?>

        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true});
      }
    </script>
  <body>
  <center>
     <h4> Media de satisfaccion de los usuarios </h4>
  <p> A continuacion se muestran datos estadisticos sobre la satisfaccion de los distintos usuarios. Se muestra la media de la valoracion segun
      cada una de las preguntas. </p>
 
    <div id="gGeneral" style="margin: auto; width: 100%; height: 500px;"></div>
    <div id="chart_div" style="margin: auto; width: 100%; height: 500px;"></div>
    <br/>
    <br/>
    <div id="table_div"></div>
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
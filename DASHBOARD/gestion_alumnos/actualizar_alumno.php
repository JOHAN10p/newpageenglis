<?php 

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
  header('location: ../../LOGIN/LOGIN.HTML');

  die();
}

?>





<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> LE-EN ➢ DASHBOARD - ACTUALIZAR ALUMNO</title>


    <!--STYLESHEET-->
    <!--================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="../../imagenes/reino-unido.png" >

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="../css\bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!--stylecss-->
    <link rel="stylesheet" href="style_agregaralumno.css">

    <link rel="stylesheet" type="text/css" href="../css/STYLEDASHBOARD.css">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="../css\nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="../css\demo\nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="../plugins\pace\pace.min.css" rel="stylesheet">
    <script src="../plugins\pace\pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="../css\demo\nifty-demo.min.css" rel="stylesheet">


        
    <!--Custom scheme [ OPTIONAL ]-->
    <link href="../css\themes\type-c\theme-navy.min.css" rel="stylesheet">

    
    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <img src="../../imagenes/banderaredonda.png" alt="Nifty Logo" class="brand-icon" id="bandera"  >

                        <div class="brand-title">
                            <span class="brand-text leen-center"><font face="comic sans MS,arial,verdana">LE-EN.COM</font></span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Search-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li>
                            <div class="custom-search-form">
                                <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </label>
                                <form>
                                    <div class="search-container collapse" id="nav-searchbox">
                                        <input id="search-input" type="text" class="form-control" placeholder="Buscar...">
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Search-->

                    </ul>
                    <ul class="nav navbar-top-links">


                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">


                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-file icon-lg icon-fw"></i> Páginas </li>
									        <li><a href="#">Perfil</a></li>
									        <li><a href="#">Mantenimiento</a></li>
									        <li><a href="#">Factura</a></li>
									                                             </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header"><i class="demo-pli-mail icon-lg icon-fw"></i> Buzón </li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Recibidos</a></li>
									        <li><a href="#">Leer mensaje</a></li>
									        <li><a href="#">Componer</a></li>
									        <li><a href="#">Plantilla</a></li>
                                        </ul>
                                        <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-calendar-4 icon-fw"></i>News</p>
                                        <p class="pad-top mar-top bord-top text-sm">messi murio de diarrea</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Copias de seguridad</p>
                                                        <small class="text-muted">Descripción</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Soporte técnico</p>
                                                        <small class="text-muted">Descripción</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Seguridad</p>
                                                        <small class="text-muted">Descripción</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Localización</p>
                                                        <small class="text-muted">Descripción</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-lg icon-fw"></i> Galeria </p>
                                        <div class="row img-gallery">
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-block btn-primary">Ver galeria</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>


                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-file-edit icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Escribe un articulo</p>
                                                        <small>Última actualización hace 8 horas</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <span class="label label-info pull-right">Nuevo</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Comentarios</p>
                                                        <small>Última actualización hace 8 horas</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-add-user-star icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Nuevos usuarios registrados</p>
                                                        <small>Hace 2 minutos</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="../img\profile-photos\9.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold">Juliet te envió un mensaje</p>
                                                        <small>Hace 30 minutos</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <img class="img-circle img-sm" alt="Profile Picture" src="../img\profile-photos\3.png">
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mar-no text-nowrap text-main text-semibold"> camilo te envió un mensaje</p>
                                                        <small>Hace 40 minutos</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-main box-block">
                                        <i class="pci-chevron chevron-right pull-right"></i>Mostrar todas las notificaiones
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i>Perfil </a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Mensajes</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="label label-success pull-right">Nuevo</span><i class="demo-pli-gear icon-lg icon-fw"></i> Configuración </a>
                                    </li>
                                    <li>
                                        <a href="../../controlador/cerrar_sesion.php"><i class="demo-pli-unlock icon-lg icon-fw"></i> cerrar sesión </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
 
                        
                        <li>
                            <a href="#" class="aside-toggle">
                                <i class="demo-pli-dot-vertical"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>


        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">¿Dónde estás?</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="../DASHBOARD.php"><i class="demo-pli-home"></i></a></li>
					<li class="active"><a href="../gestion_alumnos/eliminar_alumno.php">GESTION DE ALUMNOS   </a> <i class="fas fa-chevron-right"></i>  ACTUALIZAR ALUMNO</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                                
                <!--Fixedbar-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="page-fixedbar-container">
                    <div class="page-fixedbar-content">
                        <div class="nano">
                            <div class="nano-content">

                                INFO AQUI


                                <hr class="new-section-xs">

                                <p class="pad-all text-main text-sm text-uppercase text-bold">Otras acciones</p>

                                
                                      INFO AQUI


                            
                                <hr>
                                <p class="pad-all text-main text-sm text-uppercase text-bold">Galeria de aprendizaje</p>
                                <div class="pad-hor">
                                   
                                    <div class="row img-gallery">
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                        <div class="col-xs-6">
                                            <img class="img-responsive" src="../img/IMAGENES-ENGLISH/img2.jpg" alt="thumbs">
                                        </div>
                                       
                                      
                                    
                                    



                            
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="col-sm-6 col-lg-12">
              

                                </div>



                                </div>           
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Fixedbar-->

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
						
					<div class="row">
					   
					    <div class="col-lg-9">
					        <div class="panel">
					            <div class="panel-body">
					             












<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
<?php

//se llama a la clase
require '../../modelo/mysql.php';

   //se valida que efectivamente se envie una variable tipo get desde la página usuarios.php
   // En este punto PHP reconoce que llegó una variable llamada id 
    if( isset($_GET['id']) && !empty($_GET['id'])){
        
        // se asigna esa variable recibida a la variable $variable
$variable= $_GET['id'];

//se instancia la clase
$mysql = new Mysql();
//se conecta a la bd por medio del método
$mysql->conectar();
                                                                                       
//se ejecuta la consulta
//La consulta trae todos los campos de la tabla usuarios que sean igual al id recibido
//Es decir de acuerdo al id recibido me muestra los datos de una persona en particular (cada persona o usuario tiene un id único)
$consulta  = $mysql->efectuarConsulta("SELECT
                            englispage.miembros.img,
                            englispage.miembros.nombre,
                            englispage.miembros.apellido,
                            englispage.miembros.usuario,
                            englispage.miembros.correo,
                            englispage.miembros.contraseña,
                            englispage.miembros.id
                            
                            FROM 
                            englispage.miembros
                            WHERE englispage.miembros.id = '".$variable."'");


$row = mysqli_fetch_assoc($consulta);

//llamamos al método desconectar
    $mysql->desconectar();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <!-- se crea la etiqueta meta para decirle que acept acentos o tildes -->
	<meta charset="utf-8">
	
</head>

<body>

<div class="divform">             
              
    <h1>ACTUALIZA UN ALUMNO</h1>


<form class="form" action="../controladordashboard/actualizaralumno.php" method="POST" enctype="multipart/form-data">
    
<input type='hidden' value= "<?php echo $variable ?>" name='id'>


<p> IMG PERFIL : <br>

<img class="img-circle img-sm inputo" src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>"/>  
  <input  type="file" required  name="img"  >
    </p>

  <p> NOMBRE : <br> 
  <input class="inputo" type="text" name="nombre"  value = "<?php echo $row['nombre'] ?>" requiered >
  </p>
  
  <p> APELLIDO : <br>
  <input class="inputo" type="text" name="apellido" value= "<?php echo $row['apellido']?>" requiered >
  </p>

 
  <p> USUARIO : <br>
  <input class="inputo" type="text" name="usuario" value= "<?php echo $row['usuario']?>" required="" >
  </p>
  
  <p> CORREO : <br>
  <input class="inputo" type="email" name="correo" value= "<?php echo $row['correo']?>" required="" >
  </p>
  
  <p> CONTRASEÑA : <br>
  <input class="inputo" type="password"  name="contraseña" value= "<?php echo $row['contraseña']?>" minlength="8" required="" >
  </p>
  
<br><br>    
  <div class="centerbutton">
  <input class="boton"  type="submit" value="REGISTRAR" >
</div>                          

  </form>

</div>


</body>

</html>






<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->                                    
                                                        

















					            </div>
					        </div>
					    </div>
					</div>
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Actividad reciente
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\2.png" alt="Profile Picture">
												<i class="badge badge-success badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">JOHAN POSADA</p>
							                    <small class="text-muteds">Disponible</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\7.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">MALUMA BEYBY</p>
							                    <small class="text-muteds">Desconectado</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\1.png" alt="Profile Picture">
												<i class="badge badge-info badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Juan camilo</p>
							                    <small class="text-muteds">Última vez hace 2 horas</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\4.png" alt="Profile Picture">
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Alvaro morata</p>
							                    <small class="text-muteds">Última vez hace 2 horas</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\8.png" alt="Profile Picture">
												<i class="badge badge-warning badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">El bicho siu</p>
							                    <small class="text-muteds">Inactivo</small>
							                </div>
							            </a>
							            <a href="#" class="list-group-item">
							                <div class="media-left pos-rel">
							                    <img class="img-circle img-xs" src="../img\profile-photos\9.png" alt="Profile Picture">
												<i class="badge badge-danger badge-stat badge-icon pull-left"></i>
							                </div>
							                <div class="media-body">
							                    <p class="mar-no text-main">Daniela jaramillo</p>
							                    <small class="text-muteds">Desconectado</small>
							                </div>
							            </a>
                                    </div>

                                   

          
                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Noticias</p>

                                    <div class="pad-hor">
                                        <p>Messi gana su 7 balón de oro gracias a su
                                            <a data-title="gol de messi" class="add-tooltip text-semibold text-main" href="#">gol</a>, el dia de ayer
                                        </p>
                                        <small><em>Last Update : Des 12, 2021</em></small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                              
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">




                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="../img\profile-photos\1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name"><?php echo $sesioon_usuario ?></p>
                                            <span class="mnp-desc">messicole2013@gmail.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Ver perfil
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> configuraciones
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i>ayuda
                                        </a>
                                        <a href="../../controlador/cerrar_sesion.php" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> cerrar sesión
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">Navegación</li>
						
						            <!--Menu list item-->
						            
						                <a href="../DASHBOARD.php">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Inicio</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse in">
						                <a href="#">Inicio</a></li>
						
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
                                        
                                        <a href="#">
						                    <i class="demo-pli-gear"></i>
                                            <span class="menu-title">Gestión de cursos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
                                            
										<li><a href="#">Gestionar cursos</a></li>
											
											
						                </ul>
						            </li>
						
						             <!--Menu list item-->
                                     <li>
                                        <li class="active-sub">
						                <a href="#">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">Gestión de Alumnos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
											<li><a href="eliminar_alumno.php">Gestionar alumno</a></li>
											<li class="list-divider"></li>
											
											
                                        </ul>
						            </li>
						
						
						             <!--Menu list item-->
                                     <li>
						                <a href="#">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">Gestión de Docentes</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
                                        <ul class="collapse">
											<li><a href="../gestion_docentes/eliminar_docente.php">Gestionar docentes</a></li>
											<li class="list-divider"></li>
											
											
						                </ul>
						            </li>
						
						
						             <!--Menu list item-->
                                     <li>
						                <a href="#">
						                    <i class="demo-pli-file-html"></i>
						                    <span class="menu-title">Generación de reportes</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
                                            <li><a href="../../F-pdf/paginausuario.php" target="_blank">reporte Usuarios</a></li>
						                    <li><a href="../../F-pdf/paginaalumno.php" target="_blank">reporte Alumnos</a></li>
											<li><a href="../../F-pdf/paginadocente.php" target="_blank">reporte Docentes</a></li>

											<li class="list-divider"></li>
									
                                            </ul>
						            </li>



						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-bar-chart"></i>
						                    <span class="menu-title">Gráficos estadisticos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="../graficas/index.php" target="_blank">Ver estadisticas</a></li>						
						                </ul>
						            </li>
						
						           
						
						        
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-happy"></i>
						                    <span class="menu-title">Zona de diversión (beta)</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#">Juegos</a></li>
											<li><a href="#">Chistes</a></li>
											<li><a href="#">Entretenimiento</a></li>
											<li><a href="#">Bot social</a></li>
	
						                </ul>
						            </li>
						
						

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                English page <strong> Johan posada</strong> 2021
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2021 Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="../js\jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="../js\bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="../js\nifty.min.js"></script>




    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="../js\demo\nifty-demo.min.js"></script>

    
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="../plugins\flot-charts\jquery.flot.min.js"></script>
	<script src="../plugins\flot-charts\jquery.flot.categories.min.js"></script>
	<script src="../plugins\flot-charts\jquery.flot.orderBars.min.js"></script>
	<script src="../plugins\flot-charts\jquery.flot.tooltip.min.js"></script>
	<script src="../plugins\flot-charts\jquery.flot.resize.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="../js\demo\dashboard-2.js"></script>


    

</body>
</html>

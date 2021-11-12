<?php 

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
  header('location: ../LOGIN/LOGIN.HTML');

  die();
}

?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 


  <!-- Bootstrap CSS -->
  <link type="text/css" href="../BOOSTRAP/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="../BOOSTRAP/cssnew/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap CSS -->
  

  <!--Font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--Font awesome-->





  <!--Enlace css -->
  <link rel="stylesheet" href="STYLEINICIO.css">
 <!--Enlace css -->



  <!-- icono responsive nav -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- icono responsive nav -->
  
  
  
<!--icono redes sociales-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!--icono redes sociales-->



<!--shortcut-->
    <link rel="shortcut icon" href="../imagenes/reino-unido.png" >
<!--shortcut-->



<title> LE-EN ➢ INICIO </title>



</head>

<body>




<div class="content">

  <!--NAV--------------------------BOOSTRAP---------------NAV------------------------------------------------------------------------------------>
  
  <nav class="navbar navbar-expand-lg bg-dark navk">

    <div class="container">
    
      <a class="navbar-brand text-light font-weight-bold" href="#"><font face="comic sans MS,arial,verdana">LE-EN.COM</font></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <i class="icon ion-md-menu lead text-light"></i>
      
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2">
            <a class="nav-link text-light font " href="../INICIO/INICIO.php" > INICIO</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../DICCIONARIO/DICCIONARIO.php">DICCIONARIO</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../TRADUCTOR/TRADUCTOR.php"> TRADUCTOR </a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../PRONUNCIACION/PRONUNCIACION.php"> PRONUNCIACIÓN </a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../CURSOS/CURSOS.php"> CURSOS </a>
          </li>  
          
          <li class="nav-item mr-3">
          <a class="nav-link text-light  btn btn-danger py-1" href="../controlador/cerrar_sesion.php"><font face="comic sans MS,arial,verdana">CERRAR SESIÓN</font></a> 

          </li>  
          

        </ul>
      </div>
    </div>
  </nav>  
 
  <!--NAV--------------------------BOOSTRAP-------------------------NAV-------------------------------------------------------------------------->




<!--carrousellllllllllll----------------------------------------------------------------------------------------->

  <div id="contenido">
    <contenido>
  
       <br><br> <b class="tittle"> <center> <i><a href="../index.php" class="lee">¡LE-EN.COM </a></i>APRENDE Y DIVIERTETE!</b>  </center> <br><br>  
  
  <center>


    <br><br><br>

  <div id="newcarrusel1">
   <div id="carrusel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
  



      <div class="carousel-item active">
        <a href="../DICCIONARIO/DICCIONARIO.php"  target="_blank"><img id="img1"  src="../imagenes/DICCIONARIO.jpeg" > </a>
        
      </div>



  
      <div class="carousel-item">
        <a href="../TRADUCTOR/TRADUCTOR.php" target="_blank"> <img id="img1" src="../imagenes/TRADUCTOR.jpeg"> </a>
      
      </div>



      <div class="carousel-item">
        <a href="../PRONUNCIACION/PRONUNCIACION.php" target="_blank"> <img id="img1" src="../imagenes/PRONUNCIACION.jpeg"> </a>
      
      </div>


      <div class="carousel-item">
        <a href="../CURSOS/CURSOS.php" target="_blank"> <img id="img1" src="../imagenes/CURSOS.jpeg"> </a>
      
      </div>




    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carrusel1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
  </div>
  
  </center>
  
   <br> <br> <br> 
  
  <br> <br> 
    
</contenido>
  
<!--carrousellllllllllll----------------------------------------------------------------------------------------->


<div class="recursos">
<ul>
<a href="../DICCIONARIO/DICCIONARIO.php" target="_blank"><i class="fas fa-book icons"></i><a  href="../DICCIONARIO/DICCIONARIO.php" class="colortxt">DICCIONARIO</a><br><br></a>
<a href="../TRADUCTOR/TRADUCTOR.php" target="_blank"><i class="fas fa-language icons"></i><a  href="../TRADUCTOR/TRADUCTOR.php" class="colortxt">TRADUCTOR</a><br><br></a>
<a href="../PRONUNCIACION/PRONUNCIACION.php" target="_blank"><i class="fas fa-microphone icons"></i><a  href="../PRONUNCIACION/PRONUNCIACION.php" class="colortxt">PRONUNCIACIÓN</a><br><br></a>
<a href="../CURSOS/CURSOS.php" target="_blank" ><i class="fab fa-buffer icons"></i><a  href="../CURSOS/CURSOS.php" class="colortxt">CURSOS</a><br><br></a>
</div>
</ul>

<br><br>

  </div>



<div class="footer-basic">

    <footer>

        <div class="social">
            
            <a href="#" class="instagram"><i class="icon ion-social-instagram"></i></a>
            <a href="#" class="twitter"><i class="icon ion-social-twitter"></i></a>
            <a href="#" class="facebook"><i class="icon ion-social-facebook"></i></a>
            <a href="#" class="github"><i class="icon ion-social-github"></i></a>
            <a href="#" class="linkedin"><i class="icon ion-social-linkedin"></i></a>
            <a href="#" class="pinterest"><i class="icon ion-social-pinterest"></i></a> 
        
        </div>



        <ul class="list-inline">
            <li class="list-inline-item"><a href="..index.php">WELCOME</a></li>
            <li class="list-inline-item"><a href="#">MISIÓN</a></li>
            <li class="list-inline-item"><a href="#">SOPORTE TÉCNICO</a></li>
            <li class="list-inline-item"><a href="#">TERMINOS Y CONDICIONES</a></li>
            <li class="list-inline-item"><a href="#">PODCAST</a></li>
        </ul>
        <p class="copyright">LE-EN.COM © 2021</p>
    </footer>





</div>
</div>



  <!--javascript--------------------------------------------------------------------------------------------------------------------------->
  <script src="../BOOSTRAP/js/jquery.js"></script>
  <script src="../BOOSTRAP/js/popper.min.js"></script>
  <script src="../BOOSTRAP/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../BOOSTRAP/js/jquery.js" > </script>
 <!--javascript--------------------------------------------------------------------------------------------------------------------------->

 <!--BOOSTRAPJS---------------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="../BOOSTRAP/jsnew/jquery.min.js" > </script>
<script type="text/javascript" src="../BOOSTRAP/jsnew/bootstrap.min.js" > </script> 
<!--BOOSTRAPJS---------------------------------------------------------------------------------------------------------------------------->
</body>
</html>
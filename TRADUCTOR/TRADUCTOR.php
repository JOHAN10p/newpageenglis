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
  <link rel="stylesheet" href="STYLETRADUCTOR.css">
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



<title> LE-EN ➢ TRADUCTOR </title>



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
            <a class="nav-link text-light font " href="../INICIO/INICIO.html" > INICIO</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../DICCIONARIO/DICCIONARIO.HTML">DICCIONARIO</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../TRADUCTOR/TRADUCTOR.html"> TRADUCTOR </a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../PRONUNCIACION/PRONUNCIACION.html"> PRONUNCIACIÓN </a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link text-light font" href="../CURSOS/CURSOS.html"> CURSOS </a>
          </li>
          
          <li class="nav-item mr-3">
          <a class="nav-link text-light  btn btn-danger py-1" href="../controlador/cerrar_sesion.php"><font face="comic sans MS,arial,verdana">CERRAR SESIÓN</font></a> 

          </li>  


        </ul>
      </div>
    </div>
  </nav>  
 
  <!--NAV--------------------------BOOSTRAP-------------------------NAV-------------------------------------------------------------------------->


  <div id="contenido">

    <div class="tittled"> TRADUCTOR <i><a href="../INICIO/INICIO.html" style="color: aquamarine;">LE-EN.COM</a></i></div>

    <br><br>

    <table id="racetimes">

    <tr id="firstrow"><th>Detectar idioma<i class="fa fa-angle-down"></i></th><th>Español</th><th><i class="fa fa-exchange-alt"></i><th>Ingles</th></th><th>Más idiomas<i class="fa fa-angle-down"></i></th></tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    </table>







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
            <li class="list-inline-item"><a href="../WELCOME.HTML">WELCOME</a></li>
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
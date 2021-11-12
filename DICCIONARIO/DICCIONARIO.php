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
  <link rel="stylesheet" href="STYLEDICCIONARIO.CSS">
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



<title> LE-EN ➢ DICCIONARIO </title>



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
            <a class="nav-link text-light font" href="../PRONUNCIACIÓN/PRONUNCIACIÓN.php"> PRONUNCIACIÓN </a>
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


  <div id="contenido">


  <div class="tittled"> DICCIONARIO <i><a href="../INICIO/INICIO.php" style="color: aquamarine;">LE-EN.COM</a></i></div>


  <br><br>

<h3 class="h3txtingresar">Ingresa una palabra a consultar...</h3>

<div class="navsearch">
<input class="inputsearch" type="text" name="buscar" placeholder="Buscar...">
<button type="submit" class="btn btn-success bo">

  <i class="fas fa-search"></i>
</button>

<br><br>

<div class="resultadon">
<h3 class="h3txtingresar">RESULTADO DE LA BUSQUEDA: </h3>
</div>

<p class="paviso"><i class="fas fa-exclamation-circle"></i>Aviso: la palabra ingresada no se encuentra, acontinuación algunas palabras que podrían estar relacionadas: </p>

<ul>
<p>
  <li class="li-d">  ad <a href="#">(ad)</li></a>
  <li class="li-d"> ad- <a href="#">(ad)</li></a>
  <li class="li-d">  ir <a href="#">(id)</li></a>
  <li class="li-d">saber<a href="#">(sé)</li></a>
  <li class="li-d"> se1 <a href="#">(se)</li></a>
  <li class="li-d"> se2 <a href="#">(se)</li></a>
  <li class="li-d"> sed <a href="#">(sed)</li></a>
  <li class="li-d"> ser1<a href="#">(sé)</li></a>
  <li class="li-d"> si1 <a href="#">(si)</li></a>
  <li class="li-d"> si2 <a href="#">(si)</li></a>
  <li class="li-d"> sí1 <a href="#">(sí)</li></a>
  <li class="li-d"> sí2 <a href="#">(sí)</li></a>
  <li class="li-d"> so1 <a href="#">(so)</li></a>
  <li class="li-d"> so2 <a href="#">(so)</li></a>
  <li class="li-d"> so3 <a href="#">(so)</li></a>
  <li class="li-d"> so4 <a href="#">(so)</li></a>
  <li class="li-d"> so- <a href="#">(so)</li></a>
  <li class="li-d"> su  <a href="#">(su)</li></a>
  <li class="li-d"> sud <a href="#">(sud)</li></a>
  <li class="li-d"> sud-<a href="#">(sud)</li></a>

</p>
</ul>

</div>


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
            <li class="list-inline-item"><a href="../index.php">WELCOME</a></li>
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
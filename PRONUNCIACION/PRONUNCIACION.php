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
  <link rel="stylesheet" href="STYLEPRONUNCIACION.css">
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



<title> LE-EN ➢ PRONUNCIACIÓN </title>



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


  <div id="contenido">
    <div class="tittled"> PRONUNCIACIÓN <i><a href="../INICIO/INICIO.php" style="color: aquamarine;">LE-EN.COM</a></i></div>

 <br> <br>   

<div class="txtpronunciacion"> 

<h6 class="h6tobe">Bervo To-Be: </h6>  

<div class="divtobe">
<p class="descriptiontobe">

Definición: El verbo to be es uno de los más camaleónicos del inglés, por lo que en muchas ocasiones su significado depende del contexto en el que te lo encuentres. Sin embargo, sus significados principales son los siguientes: <br>

<hr>

<li>Ser</li><br>

<i class="Itxt">He is smart = Él es inteligente.</i>

<br><br><hr>

<li>Estar</li><br>

<i class="Itxt">It is cold today = Hoy está haciendo frio.</i>

<br><br><hr>

<li>Haber</li><br>

<i class="Itxt">Is there anyboy inside? = ¿Hay alguien adentro?</i>

<br><br><hr>
<li>Poder (Permiso)</li><br>

<i class="Itxt">Tell her she is not to open the door to strangers  = Dile que no puede abrirle la puerta a extraños.</i>

<hr>

<h6 class="h6tobe">Conjugación del verbo to-be</h6>

<img class="img1" src="https://i.ytimg.com/vi/MdUGyMZqcbU/maxresdefault.jpg" alt="">


<br><br><hr><br>

<div class="divh1pronu">
<h1 class="h1pronu">Es hora de practicar tu pronunciación</h1>
</div>

<br>

<h6 class="h6tobe"> Repite lo que está en el siguiente cuadro...
</h6>

<br>

<div class="cuadropro"> I AM </div>
<br><br>
<div class="voice"><i class="fas fa-microphone micro"></i> PRESIONA PARA HABLAR</div>

<br><br>

<div class="divbutton">
<input class="buttoncomprobar" type="button" value="COMPROBAR">
</div>

</p>



</div>



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
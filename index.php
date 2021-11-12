<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="BOOSTRAP/css/bootstrap.min.css">

  <!-- style -->
  <link rel="stylesheet" href="STYLEWELCOME.css">

  <!-- iconos -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

  <title> LE-EN ➢ WELCOME </title>

<!-- AWESOME-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!--ICONO-->
    <link rel="shortcut icon" href="imagenes/reino-unido.png" >
 
<!--ANIMATE CSS-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 


</head>

<body>

<div class="content">

  <!--NAV--------------------------BOOSTRAP--------------------------------------------------------------------------------------------------->
  
  <nav class="navbar navbar-expand-lg bg-dark">

    <div class="container">
    
      <a class="navbar-brand text-light font-weight-bold" href="#"><font face="comic sans MS,arial,verdana">LE-EN.COM</font></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <i class="icon ion-md-menu lead text-light"></i>
      
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-2">
          <a class="nav-link text-light font " href="INICIO/INICIO.php" > INICIO</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-light font" href="DICCIONARIO/DICCIONARIO.php">DICCIONARIO</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-light font" href="TRADUCTOR/TRADUCTOR.php"> TRADUCTOR </a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-light font" href="PRONUNCIACION/PRONUNCIACION.php"> PRONUNCIACIÓN </a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-light font" href="CURSOS/CURSOS.php"> CURSOS </a>
        </li>   
        <li class="nav-item">
          <a class="nav-link text-light  btn btn-danger py-1" href="LOGIN/LOGIN.HTML"><font face="comic sans MS,arial,verdana">INICIA SESIÓN </font></a> 
                   
        </li> 
        
      </ul>
    </div>
  </div>
</nav>

  
  <!--NAV--------------------------BOOSTRAP--------------------------------------------------------------------------------------------------->


  <!----------------------------CONTENIDO--------------------------------------------------------------------------------------------------->
  <section id="contenedortxt" class="position-relative text-light">
    <div id="cont-background"></div>
      <div id="contenido" class="container h-100">
        <div class="row no-gutters h-100 d-flex">
          <div id="txt" class="col-md-6 align-self-center">
            <h1  class="display-1 font-weight-bold mb-4"><font face="comic sans MS,arial,verdana"> WELCOME </font></h1>
            <p  class="lead mb-5 font-weight-bold mb-4"> <font face="comic sans MS,arial,verdana"> TENGAN UNA CORDIAL BIENVENIDA ESPERO SEA 
              DE SU AGRADO ESTE ESPACIO VIRTUAL Y PODAMOS APRENDER JUNTOS ESTE MARAVILLOSO IDIOMA.</font>
            </p>
            <a class="btn btn-danger py-1" href="REGISTRO/REGISTRO_ESTUDIANTES.HTML"><font face="comic sans MS,arial,verdana">  REGISTRATE  </font> </a>
          </div>
         <div class="col-md-6 img-container align-self-center h-100">
            <img src="imagenes/banderaredonda.png" id="img" class="position-absolute ">
            <img src="imagenes/lines.svg" id="linea" class="spin position-absolute ">
          </div>
        </div>
      </div>
  </section>
  <!----------------------------CONTENIDO--------------------------------------------------------------------------------------------------->
</div>



  <!--javascript--------------------------------------------------------------------------------------------------------------------------->
  <script src="BOOSTRAP/js/jquery.js"></script>
  <script src="BOOSTRAP/js/popper.min.js"></script>
  <script src="BOOSTRAP/js/bootstrap.min.js"></script>
  <!--javascript--------------------------------------------------------------------------------------------------------------------------->

</body>

<script>
  window.onload = function () {
    setTimeout(function () {
    document.getElementById('cont-background').style.width = '100%';
    }, 1500);
    setTimeout(function () {
      document.getElementById('txt').style.opacity = '1';
    }, 2500);
    setTimeout(function () {
      document.getElementById('img').style.opacity = '1';
    }, 3500);
    setTimeout(function () {
      document.getElementById('linea').style.opacity = '1';
    },4500);
  };
</script>

</html>
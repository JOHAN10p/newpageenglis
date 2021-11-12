
<?php

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
  header('location: ../LOGIN/LOGIN.HTML');

  die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LE-EN ➢ DESCARGAS</title>

    <link rel="shortcut icon" href="../imagenes/reino-unido.png" >
    <link type="text/css" href="../BOOSTRAP/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../BOOSTRAP/cssnew/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="paginaestudiante.css">
    
    <!-- Bootstrap CSS -->
    
</head>
<body>
    
<div class="content"> 
    



<center><a href="generarusu.php"><button type="button" class="btn btn-success">EXCEL</button></a></center><br>
<center><a href="reporteusuario.php"><button type="button" class="btn btn-danger">PDF</button></a></center>




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
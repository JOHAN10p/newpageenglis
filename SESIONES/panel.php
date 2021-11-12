<?php 

session_start();

     $sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
    echo "Usted no tiene autorización";

    die();
}


//ARCHIVO PAARA CADA INDEX O DASH BOARD

?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Hola Mundo!</title>
	</head>
	<body>


		<h1>bienvenido: <?php echo $sesioon_usuario?> </h1>

        <a href="cerrarsesion.php">cerrar sesion</a>


	</body>
</html>
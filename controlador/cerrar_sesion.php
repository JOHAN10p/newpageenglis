<?php 

//se pone en toda página dond se vaya a manejar sesiones
session_start();



//se declara la vaariable d usuarios

$sesioon_usuario = $_SESSION['usuario']; 



//se hace la condicion para comprobar si hay un usuario

if ( $sesioon_usuario == null ) {
 
    header('location: ../LOGIN/LOGIN.HTML');

    die();
}


//se destruye la sesion
session_destroy();
header('location: ../LOGIN/LOGIN.HTML');

?>
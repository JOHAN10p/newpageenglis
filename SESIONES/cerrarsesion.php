<?php 

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null ) {
 
    echo "noni";

    die();
}



session_destroy();
header('location:index.php')

?>
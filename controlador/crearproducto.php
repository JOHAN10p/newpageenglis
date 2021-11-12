<?php

 if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
 							&&
    isset($_POST['cantidad']) && !empty($_POST['cantidad'])
    						 &&
    
     isset($_POST['precio']) && !empty($_POST['precio']) 
     						&&
     isset($_POST['usuario']) && !empty($_POST['usuario']) 

     ){
 	require_once '../modelo/mysql.php';
 
 $mysql = new MySQL();

 $mysql->conectar();

 $nombre = $_POST['nombre'];
 $cantidad = $_POST['cantidad'];
 $precio = $_POST['precio'];
 $usuario = $_POST['usuario'];
 


 $mysql->efectuarConsulta("INSERT INTO farmacia.productos
 			VALUES('', '" . $nombre . "','" . $cantidad . "','" . $precio . "
 			','" . $usuario . "')");


$mysql->desconectar();
}

?>
<head>
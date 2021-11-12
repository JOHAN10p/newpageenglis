<?php

 if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
 							&&
    isset($_POST['apellido']) && !empty($_POST['apellido'])
    						 &&
    
     isset($_POST['numdoc']) && !empty($_POST['numdoc']) 
     						&&
     isset($_POST['direccion']) && !empty($_POST['direccion']) 
     							&&
     isset($_POST['telefono']) && !empty($_POST['telefono']) 

     ){
 	require_once '../modelo/mysql.php';
 
 $mysql = new MySQL();

 $mysql->conectar();

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $numdoc = $_POST['numdoc'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];


 $mysql->efectuarConsulta("INSERT INTO farmacia.clientes
 			VALUES('', '" . $nombre . "','" . $apellido . "','" . $numdoc . "
 			','" . $direccion . "','" . $telefono . "')");


$mysql->desconectar();
}

?>
<head>
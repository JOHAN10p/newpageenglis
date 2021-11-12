<?php 
session_start();

if(isset($_POST['usuario']) && !empty($_POST['usuario']) 
                           &&                   
isset($_POST['password'])  && !empty($_POST['password'])){

	require_once '../modelo/mysql.php';

$usuario = $_POST["usuario"];
$contraseña = MD5($_POST["password"]);

//Se llama la variable que fue enviada por metodo post desde el login 
$_SESSION['usuario'] = $usuario;




//se instancia la clase, es decir, se llama para poder usar sus metodos
$mysql = new MySQL();

//se hace uso del metodo para conectarse a la base de datos
$mysql->conectar();


//se guarda en una variable la consulta utilizando el metodo para dicho proceso
$admin = $mysql->efectuarConsulta("SELECT englispage.miembros.usuario, englispage.miembros.contraseña FROM 
										 englispage.miembros
										 WHERE englispage.miembros.usuario = '".$usuario."' &&
										 englispage.miembros.contraseña = '".$contraseña."' && englispage.miembros.miembros_rol_fk = 1 ");

$estudiantes = $mysql->efectuarConsulta("SELECT englispage.miembros.usuario, englispage.miembros.contraseña FROM 
										 englispage.miembros
										 WHERE englispage.miembros.usuario = '".$usuario."' &&
										 englispage.miembros.contraseña = '".$contraseña."' && englispage.miembros.miembros_rol_fk = 2 ");

$maestros = $mysql->efectuarConsulta("SELECT englispage.miembros.usuario, englispage.miembros.contraseña FROM 
										 englispage.miembros
										 WHERE englispage.miembros.usuario = '".$usuario."' &&
										 englispage.miembros.contraseña = '".$contraseña."' && englispage.miembros.miembros_rol_fk = 3 ");

 //desconectar la base de datos para liberar memoria 
 $mysql->desconectar();							
}


if(mysqli_num_rows($admin) > 0){


	 header("location: ../DASHBOARD/DASHBOARD.php");
   } 
   elseif(mysqli_num_rows($estudiantes) > 0){


      header("location: ../INICIO/INICIO.php");
     } 
     elseif(mysqli_num_rows($maestros) > 0){


      header("location: ../INICIO/INICIO3.php");
     } 
   else {

    header("location: ../LOGIN/LOGIN.HTML");

   }



?>
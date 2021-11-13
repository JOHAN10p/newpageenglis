<?php
//se validan los datos del formulario crearuser.php
if(isset($_FILES['img'])    && !empty($_FILES['img'])
                             &&     
   isset($_POST['nombre']) && !empty($_POST['nombre']) 
                              &&
   isset($_POST['apellido']) && !empty($_POST['apellido']) 
                              &&
   isset($_POST['usuario'])     && !empty($_POST['usuario'])
                              &&
   isset($_POST['correo'])      && !empty($_POST['correo']) 
                                     &&
   isset($_POST['contraseña']) && !empty($_POST['contraseña'])   
                                   
   
        ){



	require_once '../../modelo/mysql.php';




$mysql = new MySQL();

$mysql->conectar();

$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = MD5($_POST['contraseña']);
$id = $_POST['id'];

// se realiza la actualización con los parametros enviados desde el formulario editaruser.php
$mysql ->efectuarConsulta("UPDATE englispage.miembros SET  englispage.miembros.nombre = '".$nombre."', 
englispage.miembros.img = '".$img."', 
englispage.miembros.apellido = '".$apellido."', 
englispage.miembros.usuario = '".$usuario."', 
englispage.miembros.correo= '".$correo."', 
englispage.miembros.contraseña= '".$contraseña."'  WHERE englispage.miembros.id = ".$id."");



   ?>

<head>
    
    
    <META HTTP-EQUIV="REFRESH" CONTENT="0.5;URL=../gestion_alumnos/eliminar_alumno.php">
   
    <center>
      ¡Alumno actualizado Correctamente!
    </center>
</head>
<?php
        }
        
        else{
           header('location: ../gestion_alumnos/eliminar_alumno.php' );
        }
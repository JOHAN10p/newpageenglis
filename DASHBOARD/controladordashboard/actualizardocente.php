<?php
// se validan las variables del formulario editaruser.php
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&   
   isset($_POST['apellido']) && !empty($_POST['apellido']) &&
   isset($_POST['usuario']) && !empty($_POST['usuario']) &&
   isset($_POST['correo']) && !empty($_POST['correo']) &&  
   isset($_POST['contraseña']) && !empty($_POST['contraseña'])     
        
        ){
    //se llama la clase
require_once '../../modelo/mysql.php';
//se instancia la clase
$mysql = new MySQL();
// se conecta con el método
$mysql->conectar();

//se capturan las variables
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = MD5($_POST['contraseña']);
$id = $_POST['id'];

// se realiza la actualización con los parametros enviados desde el formulario editaruser.php
$mysql ->efectuarConsulta("UPDATE englispage.miembros SET  englispage.miembros.nombre ='".$nombre."',  
                                           englispage.miembros.apellido = '".$apellido."', 
                                           englispage.miembros.usuario = '".$usuario."', 
                                           englispage.miembros.correo= '".$correo."',
                                           englispage.miembros.contraseña='".$contraseña."'    
                                           WHERE englispage.miembros.id = ".$id."");


   ?>

<head>
    
    <!-- se utiliza la etiqueta meta para mandar automaticamente a la pagina usuarios.php que se encuentra en la raíz del proyecto -->
    <META HTTP-EQUIV="REFRESH" CONTENT="0.5;URL=../gestion_docentes/eliminar_docente.php">
   <!-- se muestra un mensaje al usuario para garantizar que hizo la actualización -->
    <center>
       ¡Información del docente actualizada!
    </center>
</head>
<?php
        }
        //en caso de que no llene todos los campos muestra el mensaje que ocurrió un error
        else{
            echo "ecurrio un error";
        }
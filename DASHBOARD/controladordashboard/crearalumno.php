<?php
//se validan los datos del formulario crearuser.php
if(isset($_FILES['img'])    && !empty($_FILES['img'])
                              &&   
   isset($_POST['apellidos']) && !empty($_POST['apellidos']) 
                              &&
   isset($_POST['nombre']) && !empty($_POST['nombre']) 
                              &&
   isset($_POST['usuario'])     && !empty($_POST['usuario'])
                              &&
   isset($_POST['correo'])      && !empty($_POST['correo']) 
                                   
   
        ){

	require_once '../../modelo/mysql.php';


$mysql = new MySQL();

$mysql->conectar();
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = MD5($_POST['contraseña']);
$rol = 2;




$mysql->efectuarConsulta("INSERT INTO englispage.miembros VALUES('',  '" . $img . "',    '". $nombre . "', '" . $apellidos . "', '" . $usuario. 
"', '" . $correo. "', '" . $contraseña . "','" . $rol . "')");




$mysql->desconectar();
		
?>
    <!-- se utiliza la etiqueta meta para mandar automaticamente a la pagina usuarios.php que se encuentra en la raíz del proyecto -->
    <META HTTP-EQUIV="REFRESH" CONTENT="0.5;URL=../gestion_alumnos/eliminar_alumno.php">
   <!-- se muestra un mensaje al usuario para garantizar que hizo la actualización -->
    <center>
       ¡Alumno registrado Correctamente!
    </center>
</head>
<?php
        }
        //en caso de que no llene todos los campos muestra el mensaje que ocurrió un error
        else{
            header('location: ../gestion_alumnos/eliminar_alumno.php' );
        }
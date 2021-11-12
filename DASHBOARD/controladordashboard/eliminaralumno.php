<?php
// se llama la clase
require '../../modelo/mysql.php';
// se captura la variable id enviada desde la tabla de usuarios.php por el metodo get
$variable = $_GET['id'];
//se instancia la clase
$mysql = new Mysql();
//se llama el método conectar
$mysql->conectar();
//se realiza el borrado con la variable llamada $variable que contiene el id
// es decir borra la fila que tenga el id capturado
$mysql->efectuarConsulta("DELETE FROM englispage.miembros WHERE englispage.miembros.id = " . $variable . "");
//se desconecta con el método 
$mysql->desconectar();

?>

<head>
    <!-- se utiliza la etiqueta meta para enviar al usuario a la pagina usuarios.php que está en la raiz -->
<META HTTP-EQUIV="REFRESH" CONTENT="0.5;URL=../gestion_alumnos/eliminar_alumno.php">
    <!-- se muestra un mensaje al usuario que el borrado fue realizado -->
    <center>
       ¡Alumno Eliminado Correctamente! 
    </center>
</head>

        
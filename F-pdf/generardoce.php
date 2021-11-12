<?php

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null && $sesioon_usuario == '' ) {
 
  header('location: ../LOGIN/LOGIN.HTML');

  die();
}



include("cn.php");
$usuarios = "SELECT miembros.id, miembros.nombre, 

miembros.apellido, miembros.usuario, miembros.correo,

roles.rol FROM miembros inner join 

roles on miembros.miembros_rol_fk = roles.id_rol 

 where miembros.miembros_rol_fk = 3 order by  miembros.id asc";


header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=repordoce.xls");
?>
 
<table>
<caption>DATOS DEL DOCENTE</caption>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Correo</th>
        <th>Rol</th>
      </tr>
    <?php $resultado = mysqli_query($conexion,$usuarios);
    while($row = mysqli_fetch_assoc($resultado))
    { ?>
    
    <tr>
        
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['nombre']?></td>
        <td><?php echo $row['apellido']?></td>
        <td><?php echo $row['usuario']?></td>
        <td><?php echo $row['correo']?></td>
        <td><?php echo $row['rol']?></td>
      </tr>
      

    <?php }  mysqli_free_result($resultado);?>

  </table>


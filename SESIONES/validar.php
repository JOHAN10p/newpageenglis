<?php 

session_start();

$_SESSION['usuario'] = "JOHAN POSADA";

header("location: panel.php");

?>
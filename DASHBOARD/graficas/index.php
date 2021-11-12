<?php 

session_start();


$sesioon_usuario = $_SESSION['usuario']; 

if ( $sesioon_usuario == null && $sesioon_usuario == '' ) {
 
  header('location: ../LOGIN/LOGIN.HTML');

  die();
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>LE-EN ➢ GRÁFICAS</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<link rel="shortcut icon" href="../../imagenes/reino-unido.png" >
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<center><b style="color: chartreuse">ENGLISHPAGE GRÁFICAS</b></center>
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
		$('#cargaBarras').load('barras.php');
	});
</script>
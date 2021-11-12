
<?php

	require_once "conexion.php"; 
	$conexion=conexion();

	$sql="SELECT englispage.roles.rol,
	      count(englispage.miembros.id) 
		  FROM englispage.miembros inner join
		  englispage.roles on 
		  englispage.miembros.miembros_rol_fk
		  = englispage.roles.id_rol group by 
		    englispage.miembros.miembros_rol_fk
		     ";


	$result=mysqli_query($conexion,$sql);
	$valoresY=array();
	$valoresX=array();

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);

 ?>
<div id="graficaLineal"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');

	var trace1 = {
		x: datosX,
		y: datosY,
		type: 'scatter'
	};

	var data = [trace1];

	Plotly.newPlot('graficaLineal', data);
</script>
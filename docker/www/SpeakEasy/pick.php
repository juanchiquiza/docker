<?php
//include('conexion.php');
$conexion= new mysqli("localhost","root","","speakeasy");
$ubicacion = "";

if($conexion->connect_errno){
	echo 'Error en la conexion';
	exit;
}

$sql ="SELECT * FROM ubicaciones";
if ($pick = $conexion->query($sql)){
	if ($pick==null)
	{
		echo "No se encuentra esa Cedula";
	}
	while ($picks = $pick->fetch_assoc()) {
	//	echo $picks ['cedula'] . " " . $picks ['codigo'] . " ". $picks ['nombre']  . " " .$profe ['apellido'] . " " . $profe ['profesion'] . " " . $profe ['interes']   ;
		$ubicacion = $picks ['ubicacion'];
		$pedido = $picks ['pedido'];
		$producto = $picks ['producto'];
		$cantidad = $picks ['cantidad'];
	   // print_r($ubicacion);
	}
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pick</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<br>

	<div class="container">
		<form id ="formLDS" name ="formLds" action="guardar.php" class="" method="POST">

			<img src="pictures/udistrital.png" width="300" height="250"/>
			<br><br>
			
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						<table>
			                <tbody><tr>
			                    <td><label>Ubicación: </label></td>
			                    <td>&nbsp;<label for=""> <?php echo $ubicacion;?></label></td>
				                </tr>
				                <tr>
				                    <td><label>Pedido: </label></td>
				                    <td>&nbsp;<label for=""><?php echo $pedido;?></label></td>
				                </tr>
				                <tr>
				                    <td><label>Producto: </label></td>
				                    <td>&nbsp;<label for=""><?php echo $producto;?></label></td>
				                </tr>
				                <tr>
				                    <td><label>Cantidad: </label></td>
				                    <td>&nbsp;<label for=""><?php echo $cantidad;?></label></td>
				                </tr>  
			            	</tbody>
			        	</table>
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">	
					<div class="col-lg-6">
						Ubicacion:
						<label class="sr-only" for="nombre">Ubicacion: </label>
						<input class="form-control"type="text" name="_ubicacion" id="ubicacion" placeholder="ubicacion" value="">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						Pedido:
						<label class="sr-only" for="nombre">No. pedido </label>
						<input class="form-control"type="text" name="_pedido" id="pedido" placeholder="pedido">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						Producto:
						<label class="sr-only" for="nombre">Producto</label>
						<input class="form-control" type="text" name="_producto" id="producto" placeholder="producto">
					</div>
				</div>			
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						Cantidad:
						<label class="sr-only" for="nombre">Cantidad</label>
						<input class="form-control" type="text" name="_cantidad" id="cantidad" placeholder="cantidad">
					</div>
				</div>			
			</div>
			

			<button class="btn btn-primary">Enviar</button>
				
		</form>

<br>
	<p id="cac"></p>
	<p id="speaks"></p>
	<p id="ejemplo"></p>
	
</body>


</html>
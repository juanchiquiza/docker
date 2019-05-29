<?php
//include('conexion.php');
$conexion= new mysqli("localhost","user","test","speakeasy");

$ubicacion = $_POST['_ubicacion'];
$pedido = $_POST['_pedido'];
$producto = $_POST['_producto'];
$cantidad = $_POST['_cantidad'];
$operario = '001';

if($conexion->connect_errno){
	echo 'Error en la conexion';
	exit;
}


$tz_object = new DateTimeZone('America/Cancun');
$datetime = new DateTime();
$datetime->setTimezone($tz_object);
$fecha = $datetime->format('Y\-m\-d\ h:i:s');

$sql = "INSERT INTO pick (fecha, ubicacion, n_pedido, producto, cantidad, operario) VALUES ('$fecha','$ubicacion', '$pedido', '$producto', '$cantidad', '$operario')";

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Errors: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();

?>

<script type="text/javascript">
//	alert("Guardado con exito, desea volver");
	window.location.href = "pick.php";
</script>
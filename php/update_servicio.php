<?php

	$data = json_decode(file_get_contents("php://input"));
	$codigo = $data->codigo;
	$nombre = $data->nombre;
	$descripcion = $data->descripcion;
	$estado = $data->estado;

	include('conexion.php');
	$con = conexion();
	$sql="UPDATE servicio  SET nombre= '".$nombre."', descripcion = '".$descripcion."', estado = '".$estado."' WHERE codigo = '".$codigo."'";

	$resultado = $con->query($sql);
	if ($resultado===true) {
		echo true;
	} else {
		echo false;
	}
?>

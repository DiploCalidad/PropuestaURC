<?php
	$data = json_decode(file_get_contents("php://input"));
	$codigo = $data->codigo;

	include('conexion.php');
	$con = conexion();

	$sql="DELETE FROM usuario WHERE codigo = '".$codigo."'";

	$resultado = $con->query($sql);
	
	echo "$resultado";
?>
<?php
function Conectar(){

	$server = "localhost";
	$bd = 'bd1';
	$nombre_usuario = 'root';
	$contrasea = '';
	$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
	if (!$conexion) {
		echo "acceso denegado";}

	return $conexion;

}


	?>
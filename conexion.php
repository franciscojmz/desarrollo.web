<?php 
require_once "config.php";
function conexionMySQL(){


	$conexion= new mysqli (SERVER, USER, PASS, BD);
	if ($conexion->connect_error) {
		$error .="<div class= 'error'> Error de conexion num <b>%d</b> mensaje de error: <mark>%s</mark></div>";
		printf($error, $conexion->connect_errno,$conexion-> connect_error);
	}
else{
	printf("ya me conecte") ;
	
    }
return $conexion;
}
conexionMySQL();

 ?>
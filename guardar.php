<?php 
require 'conex.php';

if( $_POST ){

	$sql_inserta = 'INSERT INTO usua_regis( nombre, apellido, correo, sexo  ) VALUES ( ?, ?, ?, ? )';

	$nombre  = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
	$apellido = isset( $_POST['apellido'] ) ? $_POST['apellido'] : '';
	$correo  = isset( $_POST['correo'] ) ? $_POST['correo'] : '';
	$sexo 	= isset( $_POST['sexo'] ) ? $_POST['sexo'] : '';
	

	$decla_inserta = $pdo->prepare( $sql_inserta );
 	$decla_inserta->execute( array( $nombre, $apellido, $correo, $sexo ) );
 	}

 	?>
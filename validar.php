<?php

require 'conex.php';

session_start();

/* Captura y Almacena el usuario y contraseña del Administrador */
$u = $_POST['nombre'];
$c = $_POST['comtraseña'];

/* Ususario Activo, Logueado */
$_SESSION['nombre'] = $u;

/* Sentencia Que Compara los datos Ingresados con los almacenados en la base de datos */
$sql = "SELECT * FROM usua_regis WHERE nombre = '$u' and contraseña = '$c' ";

/* Prepara y ejecuta la Sentencia */
$con = $pdo->prepare( $sql );
$rs = $con->execute();

/* Comprueba Si los Datos Son correctos */

$n_filas = count($rs);

if( $n_filas > 0 ){
	header("location: biblioteca2.php");
}else{
	echo 'Error de Autenticación';
}




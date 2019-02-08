<?php 

$dsn = 'mysql:dbname=cuentos;host=127.0.0.1';
$user = 'robert';
$pw = 'basededatos';

try{
	$pdo = new PDO( $dsn, $user, $pw );
}

catch( PDOException $error ){
	echo 'Error al Conectar' . $error->getMessage();
}

?>
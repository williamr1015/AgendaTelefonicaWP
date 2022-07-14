<?php
$servidor = "localhost";
$contrasena = "";
$usuario = "root";
$nombre_bd = "pruebabrmwilliamr";

// Metodo de conexion 1
$conexion = new mysqli(
	$servidor, // Servidor
	$usuario, // Usuario
	$contrasena, // Clave usuario
	$nombre_bd // Base de datos
  );
  //comprobar conexion
  if (mysqli_connect_errno()){
	printf("Fallo la conexion");
  }

// Metodo de conexion 2
try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}

?>
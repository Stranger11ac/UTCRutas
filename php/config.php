<?php
// Definimos la conexion con el servidor de Base de Datos
define('HostBD', 'localhost');
define('UsuarioBD', 'id21796962_adminutc');
define('PassBD', 'AdminUTC2020.');
define('NombreBD', 'id21796962_general');
// Para la conexión usaremos PDO
try {
	$DBcon = new PDO("mysql:host=".HostBD.";dbname=".NombreBD,UsuarioBD,PassBD);
} catch(PDOException $conexion){
	die($conexion->getMessage());
}
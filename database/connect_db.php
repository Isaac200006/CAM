<?php

require('C:\xampp2\htdocs\CAM\global.php');

$mysqli = new MySQLi($host, $user, $password, $name);
if ($mysqli->connect_errno) {
	die("Fallo la conexión a MySQL: (" . $mysqli->connect_errno
		. ") " . $mysqli->connect_errno);
}

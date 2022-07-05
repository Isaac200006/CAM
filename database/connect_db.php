<?php

$mysqli = new MySQLi("localhost", "root", "", "db_cam");
if ($mysqli->connect_errno) {
	die("Fallo la conexión a MySQL: (" . $mysqli->mysqli_connect_erro()
		. ") " . $mysqli->mysqli_connect_error());
}

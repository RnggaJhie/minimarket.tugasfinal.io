<?php
//koneksi ke database
define("HOST", "localhost"); 
define("USER", "root"); 
define("PASSWORD", "12345");
define("DATABASE", "ypos2015");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($mysqli->connect_error){ 
	trigger_error('Koneksi gagal!!: ' . $mysqli->connect_error, E_USER_ERROR);
}
?>
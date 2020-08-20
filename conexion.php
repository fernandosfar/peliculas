<?php

 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'videocentro';

	$conn = new mysqli("localhost","root","", "videocentro");
	 if ($conn->connect_errno)
	 {
	 	echo "Error al conectar";
	 }
	 else
	 	//Echo "conexion correcta";
?>
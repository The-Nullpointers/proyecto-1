<?php
	// MYSQL CONNECTION

	$servername = "localhost";
	$username = "AVATARCREATOR_DBA";
	$password = "root123";
	$database = "AVATARCREATOR";
	
	$conn = new mysqli($servername, $username, $password, $database);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}


	//ORACLE CONECTION
	/*
	$host = 'localhost';
	$port = '1521';
	$service = 'sys';
	$username = 'AVATARCREATOR_DBA';
	$password = 'root123';
	$tablespace = 'AVATARCREATOR';

	// Establish the database connection
	$conn = oci_connect($username, $password, "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service)))");

	if (!$conn) {
		$e = oci_error();
		die("Connection failed: " . $e['message']);
	}

	// Set the current tablespace
	$stmt = oci_parse($conn, "ALTER SESSION SET CURRENT_SCHEMA = $tablespace");
	oci_execute($stmt);
	*/
?>
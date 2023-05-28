<?php
	// MYSQL CONNECTION
	/*
	$servername = "localhost";
	$username = "AVATARCREATOR_DBA";
	$password = "root123";
	$database = "AVATARCREATOR";
	
	$conn = new mysqli($servername, $username, $password, $database);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	*/
	
	//ORACLE CONECTION
	
	$host = 'localhost';
	$port = 1521; // Replace with your Oracle database port number
	$sid = 'xe'; // Replace with your Oracle database SID
	$tablespace = 'AVATARCREATOR_DBA'; // Replace with the desired tablespace

	// Create a connection string
	$connectionString = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=".$host.")(PORT=".$port."))(CONNECT_DATA=(SID=".$sid.")))";

	// Connect to the Oracle database
	$conn = oci_connect('AVATARCREATOR_DBA', 'root123', $connectionString);

	if (!$conn) {
		$e = oci_error();
		console.log("ERROR");
		die("Connection failed: " . $e['message']);
	}

	// Set the default tablespace
	$setTablespaceQuery = "ALTER SESSION SET CURRENT_SCHEMA = ".$tablespace;
	$setTablespaceStmt = oci_parse($conn, $setTablespaceQuery);
	oci_execute($setTablespaceStmt);
	
?>
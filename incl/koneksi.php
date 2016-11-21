<?php 

	$servername = "localhost";
	$serveruser = "root";
	$serverpass = "";
	$dbname = "dbintibenua";

	$conn = mysqli_connect($servername, $serveruser, $serverpass, $dbname);

	if (!$conn) {
		die("Connection Failed: ".mysqli_connect_error());
	}

?>
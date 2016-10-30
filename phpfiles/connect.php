<?php

	function Connection(){
		$server="localhost";
		$user="root";
		$pass="Charith";
		$db="temperature_db";

		$connection = new mysqli($server, $user, $pass,$db);

		if ($connection->connect_error) {
	    	die('MySQL ERROR: ' . $connection->connect_error);
		}
		
		return $connection;
	}
?>

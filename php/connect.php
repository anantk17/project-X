<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	
	function dbConnect($db="")
	{
		global $dbhost, $dbuser, $dbpass;
		
		$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("The site database appears to be down");
		
		if(mysqli_connect_errno())
		{
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		return $mysqli;	
	}
?>
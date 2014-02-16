<?php
	$dbhost = "localhost";
	$dbuser = "anant";
	$dbpass = "sqlpwd";
	
	function dbConnect()
	{
		global $dbhost, $dbuser, $dbpass;
		
		$mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,"nitc_market") or die("The site database appears to be down");
		
		if(mysqli_connect_errno())
		{
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		return $mysqli;	
	}
?>
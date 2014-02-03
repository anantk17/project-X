<?php
	$dbhost = "localhost";
	$dbuser = "anant";
	$dbpwd = "sqlpwd";
	
	function dbConnect($db="")
	{
		global $dbhost, $dbuser, $dbpwd;
		
		$mysqli = mysqli_connect($dbhost,$dbuser,$dbpwd,$db) or die("The site database appears to be down");
		
		if(mysqli_connect_errno())
		{
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}		
?>

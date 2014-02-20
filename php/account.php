<?php
	require_once 'connect.php';
	session_start();
	$mysqli = dbConnect();
	if(isset($_SESSION['username']) && isset($_SESSION['id']))
	{
		$query = "SELECT * from Users where openid = '".$_SESSION['id']."'";
		$result = mysqli_query($mysqli,$query);
		if($result)
		{
			$row = mysqli_fetch_array($result);
			echo "Name : ".$row['Name']."<br>";
			echo "Email : ".$row['Email']."<br>";
			echo "Mobile : ".$row['Mobile']."<br>";
			echo "Address : ".$row['Address']."<br>";
		}
	}
	else
	{
		header('Location: ../index.php');
	}
	mysqli_close($mysqli);
	?>
<?php

	require_once 'php/connect.php';
	session_start();
	$user = $_SESSION['username'];
	$id = $_SESSION['id'];
	
	$mysqli = dbConnect();
	if(mysqli_connect_errno())
	{
		printf("Connect failed: %s\n",mysqli_connect_error());
		exit();
	}
	else
	{
		
		$sql = "UPDATE Users SET Name= '".$_POST['name']."', Mobile = '".(int)$_POST['mobile']."', Address= '".$_POST['add']."' WHERE openid = '".$_SESSION['id']."'";
		$res = mysqli_query($mysqli,$sql);
		if($res)
		{
			$_SESSION['username'] = $_POST['name'];
			header('Location: index.php');
			echo "Updated";
		}
		else
		{
			echo "Could not access DB";
		}
	}
	mysqli_close($mysqli);
	
?>
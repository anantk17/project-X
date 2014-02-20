<!--userreg.php  --> 
<?php 
	session_start();
	require_once 'php/connect.php';
	 ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>User Registration</title>
</head>
<?php
	if(isset($_SESSION['username']) && isset($_SESSION['id']))
	{ 
?>
<body>
	<form action="useredit.php" method="post">
	Name: <input type="text" name="name" value = "<?php echo $_SESSION['username']; ?>"><br>
	<?php
		$mysqli = dbConnect();
		$query = "SELECT * from Users WHERE openid = '".$_SESSION['id']."'";
		$result = mysqli_query($mysqli,$query);
		$row = mysqli_fetch_array($result);
		$mobile = $row['Mobile'];
		$address = $row['Address'];
	?>
	Mobile Number: <input type="text" name="mobile" value = "<?php echo $mobile; ?>"maxlength ="10" min="6666666666" max="9999999999" required="required"><br>
	Hostel Address: <input type = "text" name = "add" required="required" value = "<?php echo $address;?>"><br>
	<input type="submit">
</form>
</body>
<?php 
	}
	else 
	{
		header('Location : index.php');
	}
?>
</html>
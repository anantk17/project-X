<!--userreg.php  --> 
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>User Registration</title>
</head>
<body>
	<form action="useredit.php" method="post">
	Name: <input type="text" name="name" value = "<?php echo $_SESSION['username'] ?>"><br>
	Mobile Number: <input type="text" name="mobile" maxlength ="10" min="6666666666" max="9999999999" required="required"><br>
	Hostel Address: <input type = "text" name = "add" required="required"><br>
	<input type="submit">
</form>
</body>
</html>
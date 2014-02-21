<html>
<head>
	<title>EXTRACT</title>
</head>
<body>
<?php
	$dbc = mysqli_connect('localhost', 'root', '', 'nitc_market');
	
	$query = "SELECT * FROM ads";
	$data = mysqli_query($dbc, $query);
	
	
	while($row = mysqli_fetch_array($data)) {
		echo 'Title='.$row['title'].'<br />Price='.$row['price'].'<br /></td></tr>';
		echo '<img src="'.$row['pic_url'].'">';	
	}

	
	mysqli_close($dbc);
?>
</body>
</html>



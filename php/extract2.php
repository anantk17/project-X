<html>
<head>
	<title>EXTRACT</title>
</head>
<body>
<?php
	$dbc = mysqli_connect('localhost', 'root', '', 'nitc_market');
	
	$query = "SELECT * FROM `ads` WHERE category = 'games'";
	$data = mysqli_query($dbc, $query);
	
	
	while($row = mysqli_fetch_array($data)) { ?>
		<div id="add">
		<?php 		
		echo 'Title='.$row['title'].'<br />Price='.$row['price'].'<br /></td></tr>';
		echo '<img src="../media/'.$row['pic_url'].'">';	
		?>
		</div>
		<?php 
	}
	mysqli_close($dbc);
?>
</body>
</html>

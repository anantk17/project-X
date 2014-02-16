<?php
	//$dbc = mysqli_connect('localhost', 'root', '', 'nitc_market');
	
	$title=$_POST['title'];
	$descrip=$_POST['desc'];
	$price=$_POST['price'];
	$user="mahesh";
	$file=$_FILES['pic']['name'];
	$date=date('Y-n-d');
	
	$target='../media/';
	$target = $target . basename( $_FILES['pic']['name']);
	move_uploaded_file($_FILES['pic']['tmp_name'], $target);
	
	//if(isset($title)&&isset($descrip)&&isset($price)) {
	//		$query = "INSERT INTO `ads`(title, user, pic_url, price, posted, descrip) VALUES ('$title', '$user', '$file', '$price', '$date', '$descrip')";
			
//			$result =  mysqli_query($dbc, $query);
//			mysqli_close($dbc);
//	}
?>
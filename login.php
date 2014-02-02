<?php	//login.php

$ip = 'localhost';

require_once 'php/openid.php';

$openid = new LightOpenID($ip);

if($openid->mode)
{
	if($openid->mode == 'cancel')
	{
		echo "User has cancelled authentication!";
	}
	else if($openid->validate())
	{
		$data = $openid->getAttributes();
		$email = $data['contact/email'];
		$first = $data['namePerson/first'];

		$mysqli = mysqli_connect("localhost","anant","sqlpwd","test");
		
		if(mysqli_connect_errno())
		{
			printf("Connect failed: %s\n",mysqli_connect_error());
			exit();
		}
		else{
		if(strstr($email,"@nitc.ac.in"))
		{
			$sql = "SELECT * FROM Users where Email = '".$email."'";
			$res = mysqli_query($mysqli,$sql);
			
			if($res)
			{	
				if(mysqli_num_rows($res) == 0)
				{
					$sql1 = "INSERT INTO Users (Email,Name,openid) VALUES ('".$email."','".$first."','".$openid->identity."')";
					$res = mysqli_query($mysqli,$sql1);
				
					if($res == TRUE)
					{
						echo "A record has been inserted";
					
					}
					else
					{
						printf("Could not insert record: %s\n", mysqli_error($mysqli));
					}
				}
				else
				{
					echo "User already exists";
				}
				//Put redirection and close window						
				//echo '<a href = "index.php">Back Home</a>';
				header('Location: index.php');

				mysqli_close($mysqli);
			}
			else
			{
				echo "Could not access db";
			}
			
		}
		else
		{
			//echo "User authentication failed!";
			//echo 'Please use a VALID NITC email id <br>';
			echo '<script type="text/javascript">'
				,'var t = confirm("Email Id incorrect. Fuck off!");'
				,'if(t == true) window.location.assign("index.php");'
				,'</script>';
			
			//header('Location: index.php?varname=false');
			//echo '<scrit
		}
		}
	}
	else
	{
		echo "The user has not logged in";
	}
}
else
{
	echo "Go to index page to log in.";
}
?>

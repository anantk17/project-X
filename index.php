<?php // index.php

$ip = 'localhost';

require_once 'php/openid.php';
$openid = new LightOpenID($ip);

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://localhost/nitc-market/login.php'

/*if($_GET["varname"] == "false")
{
	echo "Fuck off.";
}*/

//echo $_GET["varname"];
//if(isset($_GET["varname"]))
//	echo "Fuck Off";


?>

<?php session_start(); ?>
<!Doctype html>
<html>
<head>
<title>NITC Market</title>
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
<h1>NITC <span style="color:#2D84DF;">Market</h1>

<input type="text" placeholder="Search Across Stuffs...">
<input type="submit" value="Search">

<?php if (isset($_SESSION['username'])) {?>
	<p>Welcome back, <?=$_SESSION['username'];?>!</p>
	<?php } else {?>
<a href="<?php echo $openid->authUrl() ?>" >Login with Google</a>
<?php } ?>

<div id="drpdwn"><!--<?php include 'dropdown.php'; ?>-->
<p style="text-align:right; color:white; padding-right:50px;padding-top: -610px;">No Need To SignUp!</p>
</div>
<div id="drpdwn2"></div>
<div id="mainbox">
<div class="a">1</div>
<div class="a">2</div>
<div class="a">3</div>
<div class="a">4</div>
<div class="a">5</div>
<div class="a">6</div>
<div class="a">7</div>
<div class="a">8</div>
<div class="a">9</div>
</div>
</body>
</html>





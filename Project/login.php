<?php
	session_start();
	require_once("connect.php");
	if (isset($_POST) & !empty($_POST)){
		$username = mysqli_real_escape_string($connection,$_POST['username']);
		$password = md5($_POST['password']);
	$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";	
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);
	if ($count==1){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
	}
	else{
		echo "<center style='color:white;'>Invalid username or password</center>";
	}
	if (isset($_SESSION['username'])){
		header('Location: welcome.php');
	}
	}
	
?>
<html>
	<head>
		<link rel="icon" href="SajiloSikshya.png"/>
		<title>SajiloSikshya</title>
		<link rel="stylesheet" type="text/css" href="alpha.css"/>
	</head>
	<body>
		<div class="content">
		<center><h2>Enter UserName and Password</h2></center>
		</div>
		<div>
			<form action="<?php $_PHP_SELF ?>" method="post" class="form-signin">
			<input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
				<input type="password" name="password" placeholder="Password" class="form-control" required/>
				<button type="submit" name="login" class="login">Login</button>
			</form>
		<a style="color:white" href="menu.php"><center>Register.</center></a>
		</div>
	</body>
</html>
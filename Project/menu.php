<?php
	require_once('connect.php');
	if(isset($_POST) & !empty($_POST)){
	 $username=mysqli_escape_string($connection,$_POST['username']);
	 $email=mysqli_real_escape_string($connection,$_POST['email']);
	 $password=md5($_POST['password']);	
	
	 $sql = "INSERT INTO login (username,email,password) VALUES ('$username','$email','$password')";
	 $result = mysqli_query($connection,$sql);
	 if($result){
		 echo "<center style='color:white;'>User registration successfull</center>";
	 }else{
		 echo "User registration failed";
	 }
	 
	}
?>

<html>
	<head>
		<link href="SajiloSikshya.png" rel="icon"/>
		<title>SajiloSikshya</title>
		<link rel="stylesheet" type="text/css" href="alpha.css"/>
	</head>
	<body>
		<div class="container">
			<form class="form-signin" method="POST">
				<div>
				<h1 style="color:white; text-align:left-center; ">Registration</h1>
				</div>
				<div>
					<input type="text" name="username" placeholder="username" class="form-control" required autofocus/>
				</div>
				<input type="email" name="email" id="inputEmail" placeholder="Email Address" class="form-control" required/>
				<input type="password" name="password" placeholder="Password" class="form-control" required/>
				<button type="submit" class="login">Register</button>
			</form>
			<a style='color:white; text-align:middle;' href='login.php'><center>Login</center></a>
			
		</div>
	</body>
</html>	
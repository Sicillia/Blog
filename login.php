<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location:admin.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<center>
<head>
	<title>Login^_^</title>
</head>
<body>
 <div class="row">
  <div class="col-md-6 col-md-offset-3">

 	Login >_<<br><br>
 	<form method="POST" action="actionlogin.php">
 		username	: 
		<input type="text" name="username" placeholder="username">
		<br><br>
		password	:
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="submit" name="submit">
 	</form>
 		<br><br> <h3>Didn't Have an Account Yet?</h3> <button><a href="register.php"> Sign Up </a></button>
 </div>
</div>
</body>
</center>
</html>
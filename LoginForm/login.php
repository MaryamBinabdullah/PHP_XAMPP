<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log In System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- LOGIN FORM -->
<div class="the-form">
	<div class="text">
		<h2>LOGIN</h2>
	</div>

  	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<!-- USERNAME -->
			<div class="fas fa-envelope"></div>
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-group">
			<!-- PASSWORD -->
			<div class="fas fa-envelope"></div>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Submit</button>
		</div>
		<div class="link">
			Not a member?
			<a href="register.php">Signup now</a>
		</div>

  	</form>
</div>
</body>
</html>
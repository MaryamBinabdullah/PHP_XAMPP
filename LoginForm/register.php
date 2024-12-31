<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="the-form">
	<div class="text">
		<h2>REGISTER</h2>
	</div>
	<!-- REGISTER FORM -->
  <form method="post" action="register.php">
  		 <?php include('errors.php'); ?> 
  	<div class="input-group">
  	  <!-- USERNAME -->
		<div class="fas fa-envelope"></div>
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <!-- EMAIL -->
		<div class="fas fa-envelope"></div>
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <!-- PASSWORD -->
		<div class="fas fa-envelope"></div>
  	  <input type="password" name="password_1" placeholder="Password">
  	</div>
  	<div class="input-group">
  	  <!-- PASSWORD VERIFICATION -->
		<div class="fas fa-envelope"></div>
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
	  <div class="link">
		Already a member?
		<a href="login.php">Sign in</a>
	  </div>

  </form>
  
</div>
</body>
</html>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="the-form">
	<div class="text">
		<h2>HOME PAGE</h2>
	</div>
	<div class="link">
	Welcome to my project page	
	</div>
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div id="error" class="error success">
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
		<!-- X BUTTON SVG -->
		<div id="x"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></div>
	</div>
  	<?php endif ?>
	
    <!-- logged in user information -->
	<div class="link">
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'">logout</a> </p>
    <?php endif ?>
	</div>
</div>

<script>
        const errorDiv = document.getElementById('error');
        const hideButton = document.getElementById('x');

        hideButton.addEventListener('click', function() {
            errorDiv.style.display = 'none';
            // Show the button to display the error again
        });
 </script>

</body>
</html>
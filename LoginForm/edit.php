<?php  
	# If user ID is not set
	if (!isset($_GET['id'])) {
		#Redirect to table page
        header("Location: table.php");
        exit;
	}
	$id = $_GET['id'];

	# Database Connection Files
	include "conn.php";
	include "server.php";
    
	# user function
	function get_user($conn, $id){
		$sql  = "SELECT * FROM users WHERE id=?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$id]);
	
		if ($stmt->rowCount() > 0) {
				$user = $stmt->fetch();
		}else {
			$user = 0;
		}
		return $user;
	}

    # If the ID is invalid
    if ($id == 0) {
    	#Redirect to table.php page
        header("Location: table.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="the-form">

	<div class="text">
		<h2>Update User</h2>
	</div>
	<!-- UPDATE FORM -->
  <form method="post" action="register.php">
		<input type="hidden" value="<?=$user['id']?>">
  	
	 <div class="input-group">
  	  <!-- USERNAME -->
		<div class="fas fa-envelope"></div>
  	  <input type="text" name="username" placeholder="Username" value="<?=$user['username']?>">
  	</div>
  	<div class="input-group">
  	  <!-- EMAIL -->
		<div class="fas fa-envelope"></div>
  	  <input type="email" name="email" placeholder="Email" value="<?=$user['email']?>">
  	</div>
  	<div class="input-group">
  	  <!-- PASSWORD -->
		<div class="fas fa-envelope"></div>
  	  <input type="password" name="password_1" placeholder="Password <?=$user['password']?>">
  	</div>
  	<div class="input-group">
  	  <!-- PASSWORD VERIFICATION -->
		<div class="fas fa-envelope"></div>
  	  <input type="password" name="password_2" placeholder="Confirm password <?=$user['password']?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Update</button>
  	</div>

  </form>

</div>
</body>
</html>
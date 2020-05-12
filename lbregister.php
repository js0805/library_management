<?php include('lbserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Librarian</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="sstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="lbregister.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Librarian ID</label>
  	  <input type="text" name="lid" value="<?php echo $lid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  	</div>
	  	
	 <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="mob" value="<?php echo $mob; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="lpass_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="lpass_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="lblogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
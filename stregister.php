<?php include('stserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="stregister.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Scholar No</label>
  	  <input type="text" name="sid" value="<?php echo $sid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="sname" value="<?php echo $sname; ?>">
  	</div>
	  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	  <input type="text" name="gender" value="<?php echo $gender; ?>">
  	</div>
	 <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phoneno" value="<?php echo $phoneno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="stlogin.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
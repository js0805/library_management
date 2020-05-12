<?php include('stserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="stfunctions.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Scholar No</label>
  		<input type="text" name="sid" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="stregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
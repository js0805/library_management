<?php include('lbserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Librarian</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="lbfunctions.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Librarian ID</label>
  		<input type="text" name="lid" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="lpass">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="lbregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
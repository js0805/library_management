<?php 
  session_start(); 

  $c=mysqli_connect("localhost","root","");
mysqli_connect_select_db("manit",$c);
  $lid = $_POST['lid'];
  $pass = $_POST['lpass'];
  
  $query = mysqli_query("select lpass from librarian where lid =$lid");
  
  if ($query == lpass)
  {
  
  
  if (!isset($_SESSION['lid'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: lblogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['lid']);
  	header("location: lblogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['lid'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['lid']; ?></strong></p>
    	<p> <a href="lbindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
  }
  <?php else {
	  echo "Invalid ID or password";
  }
		?>
</body>
</html>
<?php
session_start();

// initializing variables
$lid = "";
$lname = "";
$mob = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'manit');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $lid = mysqli_real_escape_string($db, $_POST['lid']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $mob = mysqli_real_escape_string($db, $_POST['mob']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $lpass_1 = mysqli_real_escape_string($db, $_POST['lpass_1']);
  $lpass_2 = mysqli_real_escape_string($db, $_POST['lpass_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($lid)) { array_push($errors, "ID is required"); }
  if (empty($lname)) { array_push($errors, "Name is required"); }
  
  if (empty($mob)) { array_push($errors, "mob is required"); }
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($lpass_1)) { array_push($errors, "password is required"); }
  if ($lpass_1 != $lpass_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM librarian WHERE lid='$lid' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['lid'] === $lid) {
      array_push($errors, "LID already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$lpass = $lpass_1;//encrypt the lpass before saving in the database

  	$query = "INSERT INTO librarian (lname,lid,email, lpass,mob) 
  			  VALUES('$lname','$lid', '$email', '$lpass','$mob')";
  	mysqli_query($db, $query);
  	$_SESSION['lid'] = $lid;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: lbindex.php');
  }
}

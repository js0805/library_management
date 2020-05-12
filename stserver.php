<?php
session_start();

// initializing variables
$sid = "";
$sname = "";
$address = "";
$gender= "";
$phoneno = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'manit');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $sid = mysqli_real_escape_string($db, $_POST['sid']);
  $sname = mysqli_real_escape_string($db, $_POST['sname']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($sid)) { array_push($errors, "Scholar No is required"); }
  if (empty($sname)) { array_push($errors, "Name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($phoneno)) { array_push($errors, "PhoneNo is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM student WHERE sid='$sid' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['sid'] === $sid) {
      array_push($errors, "Scholar No already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO student (sname,sid,address,gender, email, password,phoneno) 
  			  VALUES('$sname','$sid', '$address','$gender','$email', '$password','$phoneno')";
  	mysqli_query($db, $query);
  	$_SESSION['sid'] = $sid;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

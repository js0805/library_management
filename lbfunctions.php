<?php // call the login() function if register_btn is clicked
if (isset($_POST['login_user'])) {
	login();
}

// LOGIN USER
function login(){
	
	$db = mysqli_connect('localhost', 'root', '', 'manit');
	
	

	// grap form values
	$username = $_POST['lid'];
	$password = $_POST['lpass'];

	// make sure form is filled properly
	if (empty($username)) {
		echo "Enter Librarian ID";
	}
	else if (empty($password)) {
		echo "Enter Password";
	}

	// attempt login if no errors on form
	else {
		

		$query = "SELECT * FROM librarian WHERE lid='$username' AND lpass='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: front.html');		  
			
		}else {
			echo "Wrong username/password combination";
		}
	}
}
?>

<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
$bid=$_POST["bid"];
$status=$_POST["status"];
$query = "update book SET status='$status' where bid='$bid'"; //Insert query to update status of book in the book_info table
$result = mysqli_query($db,$query);
?>
<h3> Book status is changed successfully </h3>
<a href="searchbooks.php"> To search for the Book information click here </a>
</body>
</html>
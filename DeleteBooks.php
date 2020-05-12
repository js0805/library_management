
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
$bid=$_POST["bid"];
$query = "delete from book where bid='$bid'"; //Delete query to delete tuple of book in the book_info table
$result = mysqli_query($db,$query);
?>
<h3> Book deleted successfully </h3>
</body>
</html>
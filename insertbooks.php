
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
$bid=$_POST["bid"];
$bname=$_POST["bname"];
$author=$_POST["author"];
$branch=$_POST["branch"];
$publisher=$_POST["publisher"];
$status=$_POST["status"];
$query = "insert into book(bid,bname,author,branch,publisher,status) values('$bid','$bname','$author','$branch','$publisher','$status')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
?>
<h3> Book information is inserted successfully </h3>
<a href="searchbooks.php"> To search for the Book information click here </a>
</body>
</html>
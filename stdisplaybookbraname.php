<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select * from book where branch = '$search'"; //search with a author name in the table book_info
$result = mysqli_query($db,$query);
 
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
{
?>
 
<table border="2" align="center" cellpadding="5" cellspacing="5">
 
<tr>
<th> Book ID </th>
<th> Title </th>
<th> Author </th>
<th> Branch </th>
<th> Publication </th>
<th> Status </th>
</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["bid"];?> </td>
<td><?php echo $row["bname"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["branch"];?> </td>
<td><?php echo $row["publisher"];?> </td>
<td><?php echo $row["status"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library of the branch name $search </center>" ;
?>
</table>
</body>
</html>
<br>